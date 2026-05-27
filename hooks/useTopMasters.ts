"use client";

import { useState, useCallback, useRef, useEffect } from "react";
import { fetchData, observeOnce } from "../lib/utils";

interface MasterItem {
    name: string;
    accountId: string;
    avatar: string;
    flag: string;
    countryName: string;
    followers: number;
    totalRoi: number;
    totalProfit: number;
    maxDD: number;
    subscriptionFee: number;
    index: number;
    profitGrowthCharts: Array<{
        time: string;
        value: { profit: number };
    }>;
}

interface TabConfig {
    sort: string;
    tab: string;
    label: string;
}

/**
 * Fetch and manage Top Masters data with tab switching.
 * Migrated from: common.js L515-671
 *
 * Usage:
 * ```tsx
 * const { masters, activeTab, loadTab, tabs, sectionRef, loading } = useTopMasters();
 * ```
 */
export function useTopMasters(tabs: TabConfig[]) {
    const [masters, setMasters] = useState<MasterItem[]>([]);
    const [activeTab, setActiveTab] = useState(tabs[0]?.tab ?? "");
    const [loading, setLoading] = useState(false);
    const loadedTabs = useRef<Record<string, MasterItem[]>>({});
    const sectionRef = useRef<HTMLElement>(null);

    const loadTab = useCallback(
        async (sortby: string, tabName: string) => {
            setActiveTab(tabName);

            // Use cache if available
            if (loadedTabs.current[tabName]) {
                setMasters(loadedTabs.current[tabName]);
                return;
            }

            setLoading(true);
            const { data } = await fetchData<MasterItem[]>(
                `/wp-json/proxy/v1/top-masters?sort=${sortby}`
            );

            if (data) {
                loadedTabs.current[tabName] = data;
                setMasters(data);
            }
            setLoading(false);
        },
        []
    );

    // Lazy-load when section scrolls into view
    useEffect(() => {
        const cleanup = observeOnce(sectionRef.current, () => {
            if (tabs[0]) {
                loadTab(tabs[0].sort, tabs[0].tab);
            }
        });

        return cleanup;
    }, [tabs, loadTab]);

    /**
     * Process chart data for a master item.
     * Returns { data: number[], labels: string[], color: string }
     */
    function getChartData(item: MasterItem) {
        const raw = item.profitGrowthCharts || [];
        let chartData: number[] = [];
        let chartLabels: string[] = [];

        if (raw.length) {
            const step = Math.ceil(raw.length / 20);
            const filtered = raw.filter((_, i) => i % step === 0);
            chartData = filtered.map((p) => p?.value?.profit ?? 0);
            chartLabels = filtered.map((p) => {
                const d = new Date(p.time);
                return `${d.getDate()}/${d.getMonth() + 1}`;
            });
        }

        if (!chartData.length) {
            chartData = [2, 3, 4, 5, 6];
            chartLabels = chartData.map((_, i) => String(i + 1));
        }

        const color = chartData[chartData.length - 1] >= chartData[0] ? "#00ff66" : "#ff3b3b";

        return { data: chartData, labels: chartLabels, color };
    }

    return {
        masters,
        activeTab,
        loadTab,
        loading,
        sectionRef,
        getChartData,
    };
}
