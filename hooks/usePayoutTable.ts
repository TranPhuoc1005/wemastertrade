"use client";

import { useState, useCallback, useRef, useEffect } from "react";
import { formatTimestamp, observeOnce } from "../lib/utils";
import { getDailyPayoutTable, type PayoutTableRow } from "../services/wordpress/payout";

interface PagingInfo {
    totalPage: number;
    maxPerPage: number;
    totalItem: number;
}
export function usePayoutTable() {
    const [rows, setRows] = useState<PayoutTableRow[]>([]);
    const [paging, setPaging] = useState<PagingInfo | null>(null);
    const [currentPage, setCurrentPage] = useState(1);
    const [loading, setLoading] = useState(false);
    const [search, setSearch] = useState("");
    const sectionRef = useRef<HTMLElement>(null);
    const pageCacheRef = useRef<Record<string, PayoutTableRow[]>>({});
    const debounceRef = useRef<ReturnType<typeof setTimeout> | undefined>(undefined);

    const loadPage = useCallback(
        async (page: number, keyword: string) => {
            setLoading(true);
            setCurrentPage(page);

            const cacheKey = `${page}_${keyword}`;
            if (pageCacheRef.current[cacheKey]) {
                setRows(pageCacheRef.current[cacheKey]);
                setLoading(false);
                return;
            }

            try {
                const json = await getDailyPayoutTable(page, keyword);
                const list = json.data ?? [];
                
                const pagingData: PagingInfo = {
                    totalPage: json.paging?.totalPage || 0,
                    maxPerPage: json.paging?.limit || 10,
                    totalItem: json.paging?.totalItem || 0
                };

                if (!Array.isArray(list)) throw new Error("Invalid response");

                pageCacheRef.current[cacheKey] = list;
                setPaging(pagingData);
                setRows(list);
            } catch {
                setRows([]);
            } finally {
                setLoading(false);
            }
        },
        []
    );

    useEffect(() => {
        const cleanup = observeOnce(sectionRef.current, () => loadPage(1, ""));
        return cleanup;
    }, [loadPage]);

    const goToPage = useCallback(
        (page: number) => {
            if (paging && (page < 1 || page > paging.totalPage)) return;
            loadPage(page, search);
        },
        [loadPage, search, paging]
    );

    // Debounced search
    const handleSearchChange = useCallback(
        (value: string) => {
            setSearch(value);
            clearTimeout(debounceRef.current);
            debounceRef.current = setTimeout(() => {
                pageCacheRef.current = {};
                loadPage(1, value);
            }, 400);
        },
        [loadPage]
    );

    /**
     * Generate pagination items for rendering.
     */
    function getPaginationItems() {
        if (!paging) return [];

        const { totalPage } = paging;
        const cur = currentPage;
        const W = 2;

        let start = Math.max(1, cur - W);
        let end = Math.min(totalPage, cur + W);
        if (end - start < W * 2) {
            if (start === 1) {
                end = Math.min(totalPage, start + W * 2);
            } else {
                start = Math.max(1, end - W * 2);
            }
        }

        const pages: Array<{
            label: string;
            page: number;
            active?: boolean;
            disabled?: boolean;
        }> = [
            { label: "«", page: 1, disabled: cur === 1 },
            { label: "‹", page: cur - 1, disabled: cur === 1 },
        ];

        if (start > 1) {
            pages.push({ label: "1", page: 1 });
            if (start > 2) pages.push({ label: "...", page: 0, disabled: true });
        }

        for (let i = start; i <= end; i++) {
            pages.push({ label: String(i), page: i, active: i === cur });
        }

        if (end < totalPage) {
            if (end < totalPage - 1)
                pages.push({ label: "...", page: 0, disabled: true });
            pages.push({ label: String(totalPage), page: totalPage });
        }

        pages.push({ label: "›", page: cur + 1, disabled: cur === totalPage });
        pages.push({ label: "»", page: totalPage, disabled: cur === totalPage });

        return pages;
    }

    return {
        rows,
        paging,
        currentPage,
        loading,
        search,
        setSearch: handleSearchChange,
        goToPage,
        sectionRef,
        formatTimestamp,
        getPaginationItems,
    };
}
