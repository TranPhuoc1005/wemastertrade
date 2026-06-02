import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import { getBlogCategories, getBlogPosts, getBlogQueryLang } from "../../../lib/blog";
import Blog from "../../../components/sections/Blog/Blog";
import Hero from "../../../components/sections/Blog/Hero";

export default async function BlogPage({
    params,
}: {
    params: Promise<{
        lang: string;
    }>;
}) {
    const { lang: rawLang } = await params;
    if (!isLocale(rawLang)) notFound();

    const lang = rawLang;
    const categories = getBlogCategories(lang);
    const queryLang = getBlogQueryLang(lang);
    const initialResult = categories[0]
        ? await getBlogPosts(categories[0].id, 1, queryLang)
        : {
              hasMore: false,
              posts: [],
          };

    return (
        <main id="main">
            <Hero />
            <div id="content">
                <Blog categories={categories} initialHasMore={initialResult.hasMore} initialPosts={initialResult.posts} queryLang={queryLang} />
            </div>
        </main>
    );
}
