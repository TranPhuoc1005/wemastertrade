"use client";

import Image from "next/image";
import Link from "next/link";
import React, { useEffect } from "react";
import { Fancybox } from "@fancyapps/ui";
import { getSafeLocale, localizedPath } from "../../../lib/i18n/routing";
import { LangProps } from "../../../types/common";
import { useDailyPayout } from "../../../hooks/useDailyPayout";

export default function Payout({ lang }: LangProps) {
    const {
        error,
        expanded,
        hasMore,
        items,
        loading,
        loadMore,
        sectionRef,
        shouldShowViewAll,
    } = useDailyPayout();
    const payoutHref = localizedPath(getSafeLocale(lang), "/payout");

    useEffect(() => {
        if (!items.length) return;

        Fancybox.bind("[data-fancybox='gallery']", {});

        return () => {
            Fancybox.unbind("[data-fancybox='gallery']");
            Fancybox.close();
        };
    }, [items]);

    return (
        <section className="payouts">
            <div className="container">
                <div className="payouts__content">
                    <div className="title">
                        <p className="title__sub">Payouts</p>
                        <h3>Fast & Reliable <br /><span>Payouts</span></h3>
                    </div>
                    <div className="desc">
                        <p className="txt">Enjoy hassle-free payouts as a reward for your simulated trading. Because you shouldn’t wait for your money</p>
                        <div className="info">
                            <p><span>24h</span>Avg Payout Time</p>
                            <p><span>1d</span>Daily Payout</p>
                            <p><span>24/5</span>Customer Support</p>
                        </div>
                    </div>
                </div>
                <div className="payouts__card">
                    <div className="item">
                        <div className="cnt">
                            <h3 className="h4">Bank Transfer</h3>
                            <div className="desc">
                                <p>Money in the bank within <br />hours of your request</p>
                            </div>
                        </div>
                        <p className="ic"><Image loading="lazy" src="/images/payouts_ic1.png" width={97} height={95} alt="Bank Transfer" />
                        </p>
                    </div>
                    <div className="item">
                        <div className="cnt">
                            <h3 className="h4">Payouts</h3>
                            <div className="desc">
                                <p>We support payouts via USDC and other stablecoins</p>
                            </div>
                        </div>
                        <p className="ic"><Image loading="lazy" src="/images/payouts_ic2.png" width={102} height={92} alt="Payouts" />
                        </p>
                    </div>
                    <div className="item">
                        <div className="cnt">
                            <h3 className="h4">Debit/Credit/Prepaid<br className="pc" />Cards</h3>
                            <div className="desc">
                                <p>Use your performance-based rewards directly with our branded Visa/MasterCard/American Express/JCB...</p>
                            </div>
                        </div>
                        <p className="ic"><Image loading="lazy" src="/images/payouts_ic3.png" width={108} height={114} alt="Debit/Credit/Prepaid Cards" />
                        </p>
                    </div>
                </div>
                <div id="daily-payout-section" className="payouts__list" ref={sectionRef}>
                    <h4>Payouts</h4>
                    <div className={`payouts__frame${expanded ? " expanded" : ""}`}>
                        <ul id="daily-payout-list" className="payouts-list">
                            {items.map((item, index) => (
                                <li key={`${item.fullName}-${item.certificateUrl}-${index}`}>
                                    <p
                                        className="img lightbox-item"
                                        data-fancybox="gallery"
                                        data-src={item.certificateUrl || ""}>
                                        {/* eslint-disable-next-line @next/next/no-img-element */}
                                        <img
                                            alt={item.fullName || ""}
                                            height={150}
                                            loading="lazy"
                                            src={item.certificateUrl || ""}
                                            width={150}
                                        />
                                    </p>
                                    <div className="info">
                                        <p className="price">${item.payout || 0}</p>
                                        <p className="name">{item.fullName || ""}</p>
                                        <p className="location">
                                            <span>{item.countryName || ""}</span>
                                        </p>
                                    </div>
                                </li>
                            ))}
                        </ul>
                    </div>
                    <div className="btn center">
                        {loading ? (
                            <p id="btnViewMorePayout" className="btn__viewmore">
                                <span>Loading...</span>
                            </p>
                        ) : null}

                        {error ? (
                            <Link className="btn__viewmore payout-link" href={payoutHref}>
                                <span>View All Payouts</span>
                            </Link>
                        ) : null}

                        {!loading && !error && hasMore ? (
                            <p
                                id="btnViewMorePayout"
                                className="btn__viewmore"
                                onClick={loadMore}
                                onKeyDown={(event) => {
                                    if (event.key === "Enter" || event.key === " ") {
                                        event.preventDefault();
                                        loadMore();
                                    }
                                }}
                                role="button"
                                tabIndex={0}>
                                <span>Load More</span>
                            </p>
                        ) : null}

                        {!loading && !error && shouldShowViewAll ? (
                            <Link className="btn__viewmore payout-link" href={payoutHref}>
                                <span>View All Payouts</span>
                            </Link>
                        ) : null}
                    </div>
                </div>
            </div>
        </section>
    );
}
