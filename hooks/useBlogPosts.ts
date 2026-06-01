"use client";

import { useState, useCallback, useRef } from "react";

interface BlogCache {
    html: string;
    page: number;
    has_more: boolean;
}

interface BlogConfig {
    proxy: string;
    lang: string;
}

export function useBlogPosts(config: BlogConfig) {
    const [activeTab, setActiveTab] = useState<string>("");
    const [content, setContent] = useState<string>("");
    const [loading, setLoading] = useState(false);
    const [hasMore, setHasMore] = useState(false);
    const currentPageRef = useRef(1);
    const cacheRef = useRef<Record<string, BlogCache>>({});

    const getCacheKey = useCallback(
        (baseCat: string) => `${baseCat}_${config.lang}`,
        [config.lang]
    );

    const loadPosts = useCallback(
        async (baseCat: string, page = 1, append = false) => {
            const cacheKey = getCacheKey(baseCat);

            if (!append && page === 1 && cacheRef.current[cacheKey]) {
                const cached = cacheRef.current[cacheKey];
                setContent(cached.html);
                currentPageRef.current = cached.page;
                setHasMore(cached.has_more);
                return;
            }

            const url = `${config.proxy}?cat=${baseCat}&page=${page}&lang=${config.lang}`;

            if (!append) {
                setLoading(true);
                setHasMore(false);

                try {
                    const res = await fetch(url);
                    const json = await res.json();

                    if (!json.success) {
                        setContent("<p>Failed to load posts</p>");
                        return;
                    }

                    setContent(json.html);
                    currentPageRef.current = page;
                    setHasMore(json.has_more ?? false);

                    cacheRef.current[cacheKey] = {
                        html: json.html,
                        page,
                        has_more: json.has_more,
                    };
                } catch (e) {
                    console.error(e);
                    setContent("<p>Error loading data</p>");
                } finally {
                    setLoading(false);
                }
                return;
            }

            try {
                const res = await fetch(url);
                const json = await res.json();

                if (!json.success) return;

                setContent((prev) => prev + json.html);
                currentPageRef.current = page;
                setHasMore(json.has_more ?? false);

                if (cacheRef.current[cacheKey]) {
                    cacheRef.current[cacheKey].html += json.html;
                    cacheRef.current[cacheKey].page = page;
                    cacheRef.current[cacheKey].has_more = json.has_more;
                }
            } catch (e) {
                console.error("Load more error:", e);
            }
        },
        [config, getCacheKey]
    );

    const switchTab = useCallback(
        (baseCat: string, tabKey: string) => {
            setActiveTab(tabKey);
            loadPosts(baseCat, 1, false);
        },
        [loadPosts]
    );

    const loadMore = useCallback(
        (baseCat: string) => {
            const nextPage = currentPageRef.current + 1;
            loadPosts(baseCat, nextPage, true);
        },
        [loadPosts]
    );

    return {
        activeTab,
        content,
        loading,
        hasMore,
        loadPosts,
        loadMore,
        switchTab,
    };
}
