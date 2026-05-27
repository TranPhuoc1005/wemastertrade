"use client";

import { useState, useCallback, useRef, useEffect } from "react";
import { fetchData, observeOnce } from "../lib/utils";

interface PayoutItem {
    certificateUrl: string;
    fullName: string;
    payout: number;
    countryName: string;
}

const FIRST_LOAD = 9;
const LOAD_MORE_STEP = 3;
const MAX_CLICKS = 3;

/**
 * Fetch and manage Daily Payout data with load-more functionality.
 * Migrated from: common.js L673-750 (Daily Payout) + L752-784 (Proof Images)
 *
 * Usage:
 * ```tsx
 * const { items, loading, hasMore, loadMore, allDone, sectionRef } = useDailyPayout();
 * ```
 */
export function useDailyPayout() {
    const [items, setItems] = useState<PayoutItem[]>([]);
    const [loading, setLoading] = useState(false);
    const [displayCount, setDisplayCount] = useState(FIRST_LOAD);
    const [loadMoreClicks, setLoadMoreClicks] = useState(0);
    const allDataRef = useRef<PayoutItem[]>([]);
    const sectionRef = useRef<HTMLElement>(null);

    const fetchPayouts = useCallback(async () => {
        setLoading(true);
        const { data } = await fetchData<PayoutItem[]>("/wp-json/custom/v1/daily-payout");

        if (data) {
            allDataRef.current = data;
            setItems(data.slice(0, FIRST_LOAD));
            setDisplayCount(FIRST_LOAD);
        }
        setLoading(false);
    }, []);

    // Lazy-load when section scrolls into view
    useEffect(() => {
        const cleanup = observeOnce(sectionRef.current, fetchPayouts);
        return cleanup;
    }, [fetchPayouts]);

    const loadMore = useCallback(() => {
        const nextCount = displayCount + LOAD_MORE_STEP;
        setItems(allDataRef.current.slice(0, nextCount));
        setDisplayCount(nextCount);
        setLoadMoreClicks((prev) => prev + 1);
    }, [displayCount]);

    const hasMore =
        displayCount < allDataRef.current.length && loadMoreClicks < MAX_CLICKS;
    const allDone =
        displayCount >= allDataRef.current.length || loadMoreClicks >= MAX_CLICKS;

    return {
        items,
        loading,
        hasMore,
        allDone,
        loadMore,
        sectionRef,
        allData: allDataRef.current,
    };
}
