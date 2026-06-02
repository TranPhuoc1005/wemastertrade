"use client";

import React, { useState, useEffect, useTransition } from "react";
import Link from "next/link";
import type { TimelineProps, TabState, TimelineCardProps } from "../../../types/announcement";
import { getAnnouncementCategories } from "../../../services/wordpress/announcement";
import { fetchAnnouncementItems } from "../../../services/announcement";
import { getAnnouncementTranslations } from "../../../lib/i18n/announcementTranslations";
import { useFormatDate } from "../../../hooks/useFormatDate";

type AnnouncementTabType = "all" | "blog" | "promotions" | "seminar";

const ANNOUNCEMENT_TABS: { type: AnnouncementTabType; contentKey: string }[] = [
    { type: "all", contentKey: "timeline_tab0" },
    { type: "blog", contentKey: "timeline_tab1" },
    { type: "promotions", contentKey: "timeline_tab5" },
    { type: "seminar", contentKey: "timeline_tab6" },
];

function getTabContentKey(type: AnnouncementTabType | string): string {
    return ANNOUNCEMENT_TABS.find((t) => t.type === type)?.contentKey ?? "timeline_tab0";
}
// ───────────────────────────────────────────────────────────────────────────

export default function Timeline({ lang, initialItems, initialHasMore }: TimelineProps) {
    const t = getAnnouncementTranslations(lang);
    const categories = getAnnouncementCategories(lang);

    const [activeTab, setActiveTab] = useState<string>("all");
    const [isLoading, setIsLoading] = useState<boolean>(false);
    const [isPending, startTransition] = useTransition();

    const [tabData, setTabData] = useState<Record<string, TabState>>({
        all: { items: initialItems, page: 1, hasMore: initialHasMore },
    });

    const activeData = tabData[activeTab] || { items: [], page: 1, hasMore: false };
    const items = activeData.items;
    const hasMore = activeData.hasMore;

    useEffect(() => {
        if (tabData[activeTab]) return;

        setIsLoading(true);
        void (async () => {
            try {
                const result = await fetchAnnouncementItems(activeTab, 1, lang);

                setTabData((current) => ({
                    ...current,
                    [activeTab]: {
                        items: result.items || [],
                        page: 1,
                        hasMore: result.hasMore || false,
                    },
                }));
            } catch (error) {
                console.error("Failed to load tab posts:", error);
            } finally {
                setIsLoading(false);
            }
        })();
    }, [activeTab, lang, tabData]);

    const handleTabClick = (tabType: string) => {
        startTransition(() => {
            setActiveTab(tabType);
        });
    };

    const handleLoadMore = async () => {
        if (isLoading || isPending || !hasMore) return;

        setIsLoading(true);
        const nextPage = activeData.page + 1;

        try {
            const result = await fetchAnnouncementItems(activeTab, nextPage, lang);

            setTabData((current) => {
                const prev = current[activeTab];
                return {
                    ...current,
                    [activeTab]: {
                        items: [...(prev?.items || []), ...(result.items || [])],
                        page: nextPage,
                        hasMore: result.hasMore || false,
                    },
                };
            });
        } catch (error) {
            console.error("Failed to load more posts:", error);
        } finally {
            setIsLoading(false);
        }
    };

    return (
        <section className="blogtimeline">
            <div className="container">
                <div className="blog__category">
                    <p>
                        <a
                            className={activeTab === "all" ? "active" : ""}
                            onClick={() => handleTabClick("all")}
                            role="button"
                            tabIndex={0}
                            onKeyDown={(e) => e.key === "Enter" && handleTabClick("all")}>
                            {t.all}
                        </a>
                    </p>

                    <p>
                        <a
                            className={activeTab === "promotions" ? "active" : ""}
                            onClick={() => handleTabClick("promotions")}
                            role="button"
                            tabIndex={0}
                            onKeyDown={(e) => e.key === "Enter" && handleTabClick("promotions")}>
                            {t.promotions}
                        </a>
                    </p>

                    {categories.map((cat, i) => (
                        <p key={i}>
                            <a
                                className={activeTab === "blog" ? "active" : ""}
                                onClick={() => handleTabClick("blog")}
                                role="button"
                                tabIndex={0}
                                onKeyDown={(e) => e.key === "Enter" && handleTabClick("blog")}>
                                {cat.label}
                            </a>
                        </p>
                    ))}

                    <p>
                        <a
                            className={activeTab === "seminar" ? "active" : ""}
                            onClick={() => handleTabClick("seminar")}
                            role="button"
                            tabIndex={0}
                            onKeyDown={(e) => e.key === "Enter" && handleTabClick("seminar")}>
                            {t.seminar}
                        </a>
                    </p>
                </div>
                {/* ── END TAB NAV ── */}

                {/* ── TAB CONTENTS ── */}
                <div className="timeline__content_wrap">
                    <div
                        className="timeline__content active"
                        data-tl-content={getTabContentKey(activeTab)}
                        data-tl-group="timeline_group1">
                        <div className="blogtimeline__list">
                            {items.map((item, index) => (
                                <TimelineCard item={item} readMoreLabel={t.readMore} key={index} />
                            ))}
                        </div>

                        {items.length === 0 && !isLoading && !isPending && (
                            <p style={{ textAlign: "center", padding: "40px 0", color: "#888" }}>{t.noData}</p>
                        )}
                    </div>
                </div>
                {/* ── END TAB CONTENTS ── */}

                {hasMore && (
                    <div className="blog" style={{ marginTop: "40px" }}>
                        <p
                            className={`btn__viewmore timeline__loadmore ${isLoading ? "loading" : ""}`}
                            onClick={handleLoadMore}
                            role="button"
                            tabIndex={0}
                            onKeyDown={(e) => e.key === "Enter" && handleLoadMore()}
                            style={{ display: "block", cursor: "pointer" }}>
                            <span>{isLoading ? t.loading : t.loadMore}</span>
                        </p>
                    </div>
                )}
            </div>
        </section>
    );
}

function TimelineCard({ item, readMoreLabel }: TimelineCardProps) {
    const { formatDate } = useFormatDate();
    const dateFmt = formatDate(item.date);
    const btnLabel = item.cta_label || readMoreLabel;
    const btnUrl = item.cta_url || item.link;

    return (
        <div className={`item ${item.iconClass}`}>
            <p className="date">
                <span>{dateFmt}</span>
            </p>
            <div className="cnt">
                <p className="img">
                    <Link href={item.link}>
                        <picture>
                            <source media="(max-width: 767px)" srcSet={item.thumb_mobile} />
                            <img loading="lazy" src={item.thumb} width="490" height="267" alt={item.title} />
                        </picture>
                    </Link>
                </p>
                <div className="desc">
                    <h3>
                        <Link href={item.link} dangerouslySetInnerHTML={{ __html: item.title }} />
                    </h3>
                    <div className="txt" dangerouslySetInnerHTML={{ __html: item.excerpt_html }} />
                    <div className="link">
                        <p>
                            <Link href={btnUrl}>{btnLabel}</Link>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    );
}
