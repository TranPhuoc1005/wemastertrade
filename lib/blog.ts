import type { Locale } from "./i18n/config";

export interface BlogCategory {
    id: number;
    label: string;
}

export interface BlogPost {
    excerpt: string;
    id: number;
    link: string;
    readMore: string;
    thumb: string;
    title: string;
}

export interface BlogPostsResult {
    hasMore: boolean;
    posts: BlogPost[];
}

interface WpPost {
    content?: {
        rendered?: string;
    };
    excerpt?: {
        rendered?: string;
    };
    id: number;
    link?: string;
    title?: {
        rendered?: string;
    };
    _embedded?: {
        "wp:featuredmedia"?: Array<{
            source_url?: string;
        }>;
    };
}

const wpBaseUrl = "https://wemastertrade.com";
const defaultCategoryConfig: BlogCategory[] = [
    { label: "The Masters' Guide", id: 47 },
    { label: "Important Announcement", id: 13 },
    { label: "Holidays Schedule", id: 307 },
    { label: "Blogs", id: 316 },
];

const categoryConfigByLocale: Partial<Record<Locale, BlogCategory[]>> = {
    au: [{ label: "Blog", id: 673 }],
    bn: [{ label: "ব্লগ", id: 593 }],
    es: [{ label: "Blog", id: 711 }],
    "es-mx": [{ label: "Blog", id: 617 }],
    "es-pe": [{ label: "Blog", id: 662 }],
    id: [{ label: "Blog", id: 677 }],
    in: [{ label: "Blog", id: 619 }],
    ja: [{ label: "Blog", id: 762 }],
    km: [{ label: "Blog", id: 577 }],
    ph: [{ label: "Blog", id: 573 }],
    sg: [{ label: "Blog", id: 675 }],
    th: [{ label: "Blog", id: 523 }],
};

const readMoreTextByLocale: Partial<Record<Locale, string>> = {
    bn: "আরও পড়ুন",
    es: "Leer más",
    "es-mx": "Leer más",
    "es-pe": "Leer más",
    fr: "Lire la suite",
    hk: "閱讀更多",
    id: "Baca selengkapnya",
    ir: "بیشتر بخوانید",
    ja: "続きを読む",
    km: "អានបន្ថែម",
    ko: "더 읽기",
    ph: "Magbasa pa",
    pt: "Leia mais",
    ru: "Читать далее",
    th: "อ่านเพิ่มเติม",
    tr: "Devamını oku",
    ur: "مزید پڑھیں",
    zh: "阅读更多",
};

export function getBlogCategories(locale: Locale) {
    return categoryConfigByLocale[locale] ?? defaultCategoryConfig;
}

export function getBlogQueryLang(locale: Locale) {
    return categoryConfigByLocale[locale] ? locale : "en";
}

export function getReadMoreText(locale: Locale) {
    return readMoreTextByLocale[locale] ?? "Read more";
}

export async function getBlogPosts(categoryId: number, page: number, locale: Locale | string): Promise<BlogPostsResult> {
    const safePage = Math.max(1, page);
    const perPage = safePage === 1 ? 9 : 6;
    const offset = safePage === 1 ? 0 : 9 + (safePage - 2) * 6;
    const query = new URLSearchParams({
        _embed: "true",
        categories: String(categoryId),
        lang: locale,
        offset: String(offset),
        order: "desc",
        orderby: "date",
        per_page: String(perPage),
    });

    const response = await fetch(`${wpBaseUrl}/wp-json/wp/v2/posts?${query.toString()}`, {
        next: {
            revalidate: 60,
        },
    });

    if (!response.ok) {
        return {
            hasMore: false,
            posts: [],
        };
    }

    const posts = (await response.json()) as WpPost[];
    const readMore = getReadMoreText(locale as Locale);

    return {
        hasMore: posts.length === perPage,
        posts: posts.map((post) => mapWpPost(post, readMore)),
    };
}

function mapWpPost(post: WpPost, readMore: string): BlogPost {
    const title = stripHtml(post.title?.rendered ?? "");
    const excerpt = trimWords(stripHtml(post.excerpt?.rendered ?? ""), 22);
    const content = post.content?.rendered ?? "";
    const embeddedThumb = post._embedded?.["wp:featuredmedia"]?.[0]?.source_url ?? "";
    const contentThumb = content.match(/<img.*?src=["'](.*?)["']/)?.[1] ?? "";

    return {
        excerpt,
        id: post.id,
        link: post.link ?? "#",
        readMore,
        thumb: embeddedThumb || contentThumb || "/images/default-blog.jpg",
        title,
    };
}

function stripHtml(value: string) {
    return value
        .replace(/<[^>]*>/g, "")
        .replace(/&nbsp;/g, " ")
        .replace(/&amp;/g, "&")
        .replace(/&#8217;/g, "'")
        .replace(/&#8211;/g, "-")
        .replace(/&quot;/g, '"')
        .trim();
}

function trimWords(value: string, limit: number) {
    const words = value.split(/\s+/).filter(Boolean);

    if (words.length <= limit) return value;

    return `${words.slice(0, limit).join(" ")}...`;
}
