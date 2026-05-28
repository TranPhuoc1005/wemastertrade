"use client";

import { useQuery } from "@tanstack/react-query";
import { useCallback, useEffect, useMemo, useRef, useState } from "react";
import {
    FIRST_DAILY_PAYOUT_LOAD,
    MAX_DAILY_PAYOUT_LOAD_MORE_CLICKS,
    useDailyPayoutStore,
} from "../stores/dailyPayoutStore";
import { observeOnce } from "../lib/utils";

export interface PayoutItem {
    certificateUrl: string;
    fullName: string;
    payout: number;
    countryName: string;
}

async function fetchDailyPayouts(): Promise<PayoutItem[]> {
    const response = await fetch("https://wemastertrade.com/wp-json/custom/v1/daily-payout");

    if (!response.ok) {
        throw new Error("Failed to load daily payouts");
    }

    const json = await response.json();
    const data = json?.Data ?? json?.data ?? json;

    return Array.isArray(data) ? data : [];
}

export function useDailyPayout() {
    const sectionRef = useRef<HTMLDivElement>(null);
    const [isVisible, setIsVisible] = useState(false);
    const displayCount = useDailyPayoutStore((state) => state.displayCount);
    const expanded = useDailyPayoutStore((state) => state.expanded);
    const loadMoreClicks = useDailyPayoutStore((state) => state.loadMoreClicks);
    const loadMore = useDailyPayoutStore((state) => state.loadMore);
    const reset = useDailyPayoutStore((state) => state.reset);

    useEffect(() => {
        const cleanup = observeOnce(sectionRef.current, () => setIsVisible(true));
        return cleanup;
    }, []);

    const query = useQuery({
        enabled: isVisible,
        queryFn: fetchDailyPayouts,
        queryKey: ["daily-payout"],
    });

    useEffect(() => {
        if (query.isSuccess) {
            reset();
        }
    }, [query.isSuccess, reset]);

    const allData = useMemo(() => query.data ?? [], [query.data]);
    const items = useMemo(() => allData.slice(0, displayCount), [allData, displayCount]);
    const hasMore = displayCount < allData.length && loadMoreClicks < MAX_DAILY_PAYOUT_LOAD_MORE_CLICKS;
    const shouldShowViewAll =
        query.isSuccess &&
        (allData.length === 0 ||
            displayCount >= allData.length ||
            loadMoreClicks >= MAX_DAILY_PAYOUT_LOAD_MORE_CLICKS);
    const loading = isVisible && query.isLoading;

    const handleLoadMore = useCallback(() => {
        if (hasMore) {
            loadMore();
        }
    }, [hasMore, loadMore]);

    return {
        error: query.error,
        expanded,
        hasMore,
        items,
        loading,
        sectionRef,
        shouldShowViewAll,
        total: allData.length,
        visibleCount: Math.max(displayCount, FIRST_DAILY_PAYOUT_LOAD),
        loadMore: handleLoadMore,
    };
}
