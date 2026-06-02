import type { AnnouncementCategory, AnnouncementItem, AnnouncementResult } from "../../types/announcement";
import { rewriteWpUrl } from "../../lib/url/rewriteWpUrl";

export type { AnnouncementCategory, AnnouncementItem, AnnouncementResult };

const wpBaseUrl = "https://wemastertrade.com";

// Map locales to category configuration matching announcement.php
export const categoryConfigByLocale: Record<string, AnnouncementCategory[]> = {
    en:      [{ label: "Announcement", cats: "13,307" }],
    id:      [{ label: "Blog", cats: "677" }],
    sg:      [{ label: "Blog", cats: "675" }],
    km:      [{ label: "Blog", cats: "577" }],
    ph:      [{ label: "Blog", cats: "573" }],
    bn:      [{ label: "ব্লগ", cats: "593" }],
    au:      [{ label: "Blog", cats: "673" }],
    es:      [{ label: "Blog", cats: "711" }],
    "es-pe": [{ label: "Blog", cats: "662" }],
    "es-mx": [{ label: "Blog", cats: "617" }],
    in:      [{ label: "Blog", cats: "619" }],
    th:      [{ label: "Blog", cats: "523" }],
};

// Map Next.js locale slugs to WordPress Polylang slugs
const slugMap: Record<string, string> = {
    "es-pe": "pe",
    "es-mx": "mx",
    bn: "bn",
    au: "au",
    es: "es",
};

export function getAnnouncementCategories(locale: string): AnnouncementCategory[] {
    return categoryConfigByLocale[locale] || categoryConfigByLocale["en"];
}

export function getWpQueryLang(locale: string): string {
    return slugMap[locale] || locale;
}

export async function getAnnouncementItems(
    type: string,
    page: number,
    locale: string
): Promise<AnnouncementResult> {
    const categories = getAnnouncementCategories(locale);
    const lang = getWpQueryLang(locale);

    const catsParam = type === "all"
        ? categories.map(c => c.cats).join(",")
        : (type === "blog" ? categories[0]?.cats || "" : "");

    const query = new URLSearchParams({
        type,
        page: String(Math.max(1, page)),
        lang,
        cats: catsParam,
        output: "json",
        get_data: "1",
    });

    const url = `${wpBaseUrl}/wp-content/themes/flatsome/uk-template/ajax/timeline-proxy.php?${query.toString()}`;

    try {
        const response = await fetch(url, { next: { revalidate: 60 } });

        if (!response.ok) {
            return { success: false, items: [], hasMore: false };
        }

        const data = await response.json();
        if (!data.success || !Array.isArray(data.items)) {
            return { success: false, items: [], hasMore: false };
        }

        const catIds = catsParam ? catsParam.split(",").map(Number).filter(id => id > 0) : [];
        const catCount = catIds.length || 1;

        const items: AnnouncementItem[] = data.items.map((item: any) => {
            const title: string = item.title || "";
            const link: string = item.link || "";
            let thumb: string = item.thumb || "";
            let thumbMobile: string = item.thumb_mobile || "";

            if (thumb && !thumb.startsWith("http") && !thumb.startsWith("data:")) {
                thumb = `${wpBaseUrl}${thumb.startsWith("/") ? "" : "/"}${thumb}`;
            }
            if (thumbMobile && !thumbMobile.startsWith("http") && !thumbMobile.startsWith("data:")) {
                thumbMobile = `${wpBaseUrl}${thumbMobile.startsWith("/") ? "" : "/"}${thumbMobile}`;
            }

            let iconClass = "icon1";
            if (link.includes("/promotions/") || link.includes("#promo-")) {
                iconClass = `icon${catCount + 1}`;
            } else if (link.includes("/seminar/") || link.includes("#seminar-") || title.toLowerCase().includes("seminar")) {
                iconClass = `icon${catCount + 2}`;
            } else if (locale === "en" && (title.toLowerCase().includes("holiday") || link.toLowerCase().includes("holiday") || title.toLowerCase().includes("schedule"))) {
                iconClass = "icon2";
            }

            return {
                title,
                excerpt_html: item.excerpt_html || "",
                thumb: thumb || "/images/timeline_default.jpg",
                thumb_mobile: thumbMobile || thumb || "/images/timeline_default.jpg",
                date: item.date || "",
                link: rewriteWpUrl(link, locale),
                cta_label: item.cta_label || "",
                cta_url: item.cta_url ? rewriteWpUrl(item.cta_url, locale) : "",
                iconClass,
            };
        });

        return { success: true, items, hasMore: data.has_more ?? false };
    } catch (error) {
        console.error("Error in getAnnouncementItems:", error);
        return { success: false, items: [], hasMore: false };
    }
}
