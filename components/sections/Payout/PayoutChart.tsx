"use client";

import React, { useState, useEffect, useRef } from "react";
import { Chart, DoughnutController, ArcElement, Tooltip, Legend } from "chart.js";
import type { PayoutDictionary } from "../../../lib/i18n/payoutTranslations";
import { getContinentPayout, type ContinentPayoutItem } from "../../../services/wordpress/payout";

// Register Chart.js components
Chart.register(DoughnutController, ArcElement, Tooltip, Legend);

interface RangeData {
    items: ContinentPayoutItem[];
    total: number;
}

type RangeType = "all" | "7d" | "30d" | "12m";

interface PayoutChartProps {
    dict: PayoutDictionary["daily"];
}

export default function PayoutChart({ dict }: PayoutChartProps) {
    const [currentRange, setCurrentRange] = useState<RangeType>("all");
    const [chartCache, setChartCache] = useState<Record<RangeType, RangeData | null>>({
        all: null,
        "7d": null,
        "30d": null,
        "12m": null,
    });
    const [loading, setLoading] = useState(true);

    const canvasRef = useRef<HTMLCanvasElement | null>(null);
    const chartInstanceRef = useRef<Chart | null>(null);

    // Prefetch all ranges on mount
    useEffect(() => {
        async function fetchAllData() {
            try {
                const ranges: RangeType[] = ["all", "7d", "30d", "12m"];
                const fetched: Partial<Record<RangeType, RangeData>> = {};

                await Promise.all(
                    ranges.map(async (range) => {
                        try {
                            const result = await getContinentPayout(range);
                            if (result && result.data) {
                                fetched[range] = {
                                    items: result.data.items || [],
                                    total: result.data.totalPayoutAmount || 0,
                                };
                            }
                        } catch (err) {
                            console.error(`Error fetching payout range ${range}:`, err);
                        }
                    })
                );

                setChartCache({
                    all: fetched.all || { items: [], total: 0 },
                    "7d": fetched["7d"] || { items: [], total: 0 },
                    "30d": fetched["30d"] || { items: [], total: 0 },
                    "12m": fetched["12m"] || { items: [], total: 0 },
                });
            } catch (err) {
                console.error("Error fetching continent payouts:", err);
            } finally {
                setLoading(false);
            }
        }

        fetchAllData();
    }, []);

    // Create & Update Chart
    useEffect(() => {
        if (loading || !canvasRef.current) return;

        const currentData = chartCache[currentRange];
        if (!currentData) return;

        const labels = currentData.items.map((i) => i.continentName);
        const values = currentData.items.map((i) => Number(i.payoutPercentage));

        // Destroy previous chart if it exists
        if (chartInstanceRef.current) {
            chartInstanceRef.current.destroy();
        }

        const ctx = canvasRef.current.getContext("2d");
        if (!ctx) return;

        chartInstanceRef.current = new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: labels,
                datasets: [
                    {
                        data: values,
                        backgroundColor: [
                            "#F6CC23",
                            "#FF935E",
                            "#ED5128",
                            "#654FC5",
                            "#3984FD",
                            "#257471",
                            "#63B96E",
                        ],
                        borderRadius: 10,
                        spacing: 1,
                    },
                ],
            },
            options: {
                cutout: "70%",
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                const idx = context.dataIndex;
                                const item = currentData.items[idx];
                                if (!item) return "";
                                const amount = Number(item.payoutAmount).toLocaleString("en-US", {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2,
                                });
                                return [
                                    `Region: ${item.continentName}`,
                                    `Amount: $${amount}`,
                                    `Share: ${item.payoutPercentage}%`,
                                    `Count: ${item.payoutCount}`,
                                ];
                            },
                        },
                    },
                },
            },
        });

        return () => {
            if (chartInstanceRef.current) {
                chartInstanceRef.current.destroy();
                chartInstanceRef.current = null;
            }
        };
    }, [loading, currentRange, chartCache]);

    const currentRangeData = chartCache[currentRange] || { items: [], total: 0 };
    const formattedTotal = Number(currentRangeData.total).toLocaleString("en-US", {
        minimumFractionDigits: 0,
        maximumFractionDigits: 0,
    });

    return (
        <div className="item">
            <h4>
                {dict.totalPayouts}
            </h4>
            <div className="payouts__chart--tabs">
                <p
                    className={`tab ${currentRange === "all" ? "active" : ""}`}
                    onClick={() => setCurrentRange("all")}
                    role="button"
                    tabIndex={0}
                    onKeyDown={(e) => e.key === "Enter" && setCurrentRange("all")}
                >
                    {dict.tabAll}
                </p>
                <p
                    className={`tab ${currentRange === "7d" ? "active" : ""}`}
                    onClick={() => setCurrentRange("7d")}
                    role="button"
                    tabIndex={0}
                    onKeyDown={(e) => e.key === "Enter" && setCurrentRange("7d")}
                >
                    {dict.tab7d}
                </p>
                <p
                    className={`tab ${currentRange === "30d" ? "active" : ""}`}
                    onClick={() => setCurrentRange("30d")}
                    role="button"
                    tabIndex={0}
                    onKeyDown={(e) => e.key === "Enter" && setCurrentRange("30d")}
                >
                    {dict.tab30d}
                </p>
                <p
                    className={`tab ${currentRange === "12m" ? "active" : ""}`}
                    onClick={() => setCurrentRange("12m")}
                    role="button"
                    tabIndex={0}
                    onKeyDown={(e) => e.key === "Enter" && setCurrentRange("12m")}
                >
                    {dict.tab12m}
                </p>
            </div>

            <div className="payouts__chart--js active">
                {loading && <p className="loader" id="chartLoader"></p>}
                
                <div 
                    className="chart-content" 
                    id="chartContent" 
                    style={{ display: loading ? "none" : "block" }}
                >
                    <div className="chart">
                        <div style={{ position: "relative", height: "300px", width: "300px", margin: "0 auto" }}>
                            <canvas ref={canvasRef} id="myChart"></canvas>
                        </div>
                        <p className="chart__total">
                            <span className="txt">{dict.totalPayouts}</span>
                            <span id="totalPayout">${formattedTotal}</span>
                        </p>
                    </div>

                    <div className="payouts__chart--table">
                        <div className="table__scroll">
                            <table>
                                <thead>
                                    <tr>
                                        <th>{dict.chartColumns.region}</th>
                                        <th>{dict.chartColumns.amount}</th>
                                        <th>{dict.chartColumns.share}</th>
                                        <th>{dict.chartColumns.count}</th>
                                    </tr>
                                </thead>
                                <tbody id="payoutTableBody">
                                    {currentRangeData.items.map((item, index) => (
                                        <tr key={`${item.continentName}-${index}`}>
                                            <td>
                                                <p className="region">
                                                    <span className={`clr${index + 1}`}></span>
                                                    {item.continentName}
                                                </p>
                                            </td>
                                            <td>
                                                <p>${Number(item.payoutAmount).toLocaleString()}</p>
                                            </td>
                                            <td>
                                                <p>{item.payoutPercentage}%</p>
                                            </td>
                                            <td>
                                                <p>{item.payoutCount}</p>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
