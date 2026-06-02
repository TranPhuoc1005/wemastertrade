"use client";

import { useEffect, useMemo, useState } from "react";
import type { BlogCategory, BlogPost } from "../../../lib/blog";

interface CategoryState {
    hasMore: boolean;
    isLoading: boolean;
    page: number;
    posts: BlogPost[];
}

interface BlogProps {
    categories: BlogCategory[];
    initialHasMore: boolean;
    initialPosts: BlogPost[];
    queryLang: string;
}

export default function Blog({ categories, initialHasMore, initialPosts, queryLang }: BlogProps) {
    const firstCategoryId = categories[0]?.id ?? 0;
    const [activeCategoryId, setActiveCategoryId] = useState(firstCategoryId);
    const [categoryData, setCategoryData] = useState<Record<number, CategoryState>>(() => ({
        [firstCategoryId]: {
            hasMore: initialHasMore,
            isLoading: false,
            page: 1,
            posts: initialPosts,
        },
    }));
    const activeData = categoryData[activeCategoryId];
    const showCategories = categories.length > 1;
    const activePosts = activeData?.posts ?? [];
    const hasMore = activeData?.hasMore ?? false;
    const isLoading = activeData?.isLoading ?? false;

    useEffect(() => {
        if (!activeCategoryId || categoryData[activeCategoryId]) return;

        void loadPosts(activeCategoryId, 1);
    }, [activeCategoryId, categoryData]);

    const activeContentKey = useMemo(() => `blog_tab_${activeCategoryId}`, [activeCategoryId]);

    async function loadPosts(categoryId: number, page: number) {
        setCategoryData((current) => ({
            ...current,
            [categoryId]: {
                hasMore: current[categoryId]?.hasMore ?? false,
                isLoading: true,
                page: current[categoryId]?.page ?? page,
                posts: current[categoryId]?.posts ?? [],
            },
        }));

        try {
            const response = await fetch(`/api/blog-posts?cat=${categoryId}&page=${page}&lang=${queryLang}`);
            const result = (await response.json()) as {
                hasMore: boolean;
                posts: BlogPost[];
            };

            setCategoryData((current) => ({
                ...current,
                [categoryId]: {
                    hasMore: result.hasMore,
                    isLoading: false,
                    page,
                    posts: page === 1 ? result.posts : [...(current[categoryId]?.posts ?? []), ...result.posts],
                },
            }));
        } catch {
            setCategoryData((current) => ({
                ...current,
                [categoryId]: {
                    hasMore: false,
                    isLoading: false,
                    page,
                    posts: current[categoryId]?.posts ?? [],
                },
            }));
        }
    }

    function handleLoadMore() {
        if (!activeData || isLoading || !hasMore) return;

        void loadPosts(activeCategoryId, activeData.page + 1);
    }

    return (
        <section className="blog">
            <div className="container">
                {showCategories ? (
                    <div className="blog__category">
                        {categories.map((category) => (
                            <p key={category.id}>
                                <a
                                    className={category.id === activeCategoryId ? "active" : ""}
                                    data-base-cat={category.id}
                                    data-tab={`blog_tab_${category.id}`}
                                    data-tab-group="blog_group1"
                                    onClick={() => setActiveCategoryId(category.id)}
                                    role="button"
                                    tabIndex={0}
                                    onKeyDown={(event) => {
                                        if (event.key === "Enter" || event.key === " ") setActiveCategoryId(category.id);
                                    }}
                                >
                                    {category.label}
                                </a>
                            </p>
                        ))}
                    </div>
                ) : null}
                <div className="blog__content_wrap">
                    <div className="blog__content active" data-tab-content={activeContentKey} data-tab-group="blog_group1">
                        {activePosts.length ? activePosts.map((post) => <BlogCard key={post.id} post={post} />) : <p>Not data</p>}
                    </div>
                </div>
                {hasMore ? (
                    <p className={`btn__viewmore${isLoading ? " loading" : ""}`} onClick={handleLoadMore} role="button" tabIndex={0}>
                        <span>{isLoading ? "Loading..." : "Load more"}</span>
                    </p>
                ) : null}
            </div>
        </section>
    );
}

function BlogCard({ post }: { post: BlogPost }) {
    return (
        <div className="item">
            <div className="img">
                <a href={post.link}>
                    <img loading="lazy" src={post.thumb} alt={post.title} />
                </a>
            </div>
            <h4>
                <a href={post.link}>{post.title}</a>
            </h4>
            <div className="desc">
                <p>{post.excerpt}</p>
            </div>
            <div className="link">
                <p>
                    <a href={post.link}>{post.readMore}</a>
                </p>
            </div>
        </div>
    );
}
