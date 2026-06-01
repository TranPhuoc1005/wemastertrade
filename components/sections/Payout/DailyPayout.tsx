"use client";

import React, { useEffect } from "react";
import Image from "next/image";
import { Fancybox } from "@fancyapps/ui";
import PayoutChart from "./PayoutChart";
import { usePayoutTable } from "../../../hooks/usePayoutTable";
import Link from "next/link";
import type { PayoutDictionary } from "../../../lib/i18n/payoutTranslations";

interface DailyPayoutProps {
    lang: string;
    dict: PayoutDictionary["daily"];
}

export default function DailyPayout({ lang, dict }: DailyPayoutProps) {
    const {
        rows,
        paging,
        currentPage,
        loading,
        search,
        setSearch,
        goToPage,
        sectionRef,
        formatTimestamp,
        getPaginationItems,
    } = usePayoutTable();

    useEffect(() => {
        Fancybox.bind("[data-fancybox='table-gallery']", {});
        return () => {
            Fancybox.unbind("[data-fancybox='table-gallery']");
        };
    }, [rows]);

    // Dynamic "Showing X to Y of Z entries"
    const total = paging?.totalItem || 0;
    const start = total === 0 ? 0 : (currentPage - 1) * 10 + 1;
    const end = Math.min(currentPage * 10, total);

    const paginationText = dict.entriesDescription
        .replace("{start}", String(start))
        .replace("{end}", String(end))
        .replace("{total}", String(total));

    const paginationItems = getPaginationItems();

    return (
        <section className="payouts" ref={sectionRef}>
            <div className="container">
                <div className="payouts__content">
                    <div className="title">
                        <p className="title__sub">{dict.titleSub}</p>
                        <div dangerouslySetInnerHTML={{ __html: `<h3>${dict.titleMain}</h3>` }} />
                    </div>
                    <div className="desc">
                        <p className="txt" dangerouslySetInnerHTML={{ __html: dict.blockchainDesc }} />
                        <div 
                            dangerouslySetInnerHTML={{ 
                                __html: `<div class="info"><p><span>24 ${lang === "vi" ? "giờ" : "hours"}</span>${lang === "vi" ? "Thời gian trung bình" : "Avg Payout Time"}</p><p><span>1 ${lang === "vi" ? "ngày" : "day"}</span>${lang === "vi" ? "Thanh toán hàng ngày" : "Daily Payout"}</p><p><span>24/5</span>${lang === "vi" ? "Hỗ trợ khách hàng" : "Customer Support"}</p></div>` 
                            }} 
                        />
                    </div>
                </div>

                <div id="payouts__chart" className="payouts__chart">
                    <div className="item">
                        <h4>Step-by-Step Guide</h4>
                        <div className="desc">
                            <p>{dict.blockchainDesc}</p>
                        </div>
                        <div className="video">
                            <p 
                                className="certificates__video lightbox-item" 
                                data-youtube-id="DU9er9bdItU"
                                style={{ cursor: "pointer" }}
                            >
                                <Image
                                    src="/images/payouts_chart_img3n.png"
                                    width={583}
                                    height={821}
                                    alt="Step-by-Step Guide"
                                    loading="lazy"
                                />
                            </p>
                        </div>
                    </div>
                    <PayoutChart dict={dict} />
                </div>
                <div id="payout-table-section" className="payouts" style={{ marginTop: "60px" }}>
                    <div className="containerr">
                        <div className="wmt-table table__frame payouts__daily">
                            <div className="head" style={{ display: "flex", justifyContent: "space-between", alignItems: "center", flexWrap: "wrap", gap: "15px" }}>
                                <h4>{dict.tableTitle}</h4>
                                <div className="inputs custom_inputs">
                                    <div className="search">
                                        <input
                                            type="text"
                                            value={search}
                                            onChange={(e) => setSearch(e.target.value)}
                                            placeholder={dict.searchPlaceholder}
                                        />
                                    </div>
                                </div>
                            </div>

                            <div className="table__content">
                                <div className="table__scroll" style={{ position: "relative" }}>
                                    {loading && (
                                        <div 
                                            style={{ 
                                                position: "absolute", 
                                                top: 0, left: 0, right: 0, bottom: 0, 
                                                background: "rgba(0,0,0,0.1)", 
                                                display: "flex", justifyContent: "center", alignItems: "center",
                                                zIndex: 5
                                            }}
                                        >
                                            <p className="loader"></p>
                                        </div>
                                    )}

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>{dict.columns.no}</th>
                                                <th>{dict.columns.name}</th>
                                                <th>{dict.columns.payout}</th>
                                                <th>{dict.columns.accountSize}</th>
                                                <th>{dict.columns.country}</th>
                                                <th>{dict.columns.time}</th>
                                                <th>{dict.columns.txHash}</th>
                                                <th>{dict.columns.certificate}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {rows.map((row, index) => (
                                                <tr key={`${row.fullName}-${row.createdAt}-${index}`}>
                                                    <td>{(currentPage - 1) * 10 + index + 1}</td>
                                                    <td>{row.fullName}</td>
                                                    <td>
                                                        ${Number(row.payout).toLocaleString("en-US", {
                                                            minimumFractionDigits: 2,
                                                            maximumFractionDigits: 2,
                                                        })}
                                                    </td>
                                                    <td>${Number(row.accountSize).toLocaleString()}</td>
                                                    <td>{row.countryName}</td>
                                                    <td>{formatTimestamp(row.createdAt || row.timestamp || "")}</td>
                                                    <td>
                                                        {row.transactionHash ? (
                                                            <Link className="wmt-tx" href={`https://bscscan.com/tx/${row.transactionHash}`} target="_blank" title={row.transactionHash}>
                                                                {row.transactionHash.slice(0, 8)}...{row.transactionHash.slice(-6)}
                                                            </Link>
                                                        ) : (
                                                            "-"
                                                        )}
                                                    </td>
                                                    <td>
                                                        {row.certificateUrl ? (
                                                            <p
                                                                className="lightbox-item pointer-cursor"
                                                                data-src={row.certificateUrl}
                                                                style={{ cursor: "pointer", display: "inline-block" }}
                                                            >
                                                                <Image
                                                                    src="https://wmtstorageaccprodsa.blob.core.windows.net/wemastertrade-nodejs/certificate-profit-split/Certificate-profit-split-WDS00007413_1780307520645.png"
                                                                    width={24}
                                                                    height={24}
                                                                    alt="Certificate"
                                                                 />
                                                            </p>
                                                        ) : (
                                                            "-"
                                                        )}
                                                    </td>
                                                </tr>
                                            ))}

                                            {!loading && rows.length === 0 && (
                                                <tr>
                                                    <td colSpan={8} style={{ textAlign: "center", padding: "30px" }}>
                                                        No payouts found matching your search.
                                                    </td>
                                                </tr>
                                            )}
                                        </tbody>
                                    </table>
                                </div>

                                <div className="blog__pagination">
                                    <p className="txt">{paginationText}</p>
                                    <ul className="pagination">
                                        {paginationItems.map((item, idx) => (
                                            <li
                                                key={idx}
                                                className={`${item.active ? "active" : ""} ${item.disabled ? "disabled" : ""}`}
                                                onClick={() => !item.disabled && item.page > 0 && goToPage(item.page)}
                                            >
                                                <span>{item.label}</span>
                                            </li>
                                        ))}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    );
}
