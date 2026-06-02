import * as cheerio from "cheerio";
import type { Locale } from "./i18n/config";

export interface PromotionItem {
    id: string;
    title: string;
    desktopImage: string;
    mobileImage?: string;
    contentHtml: string;
}

const wpPromotionsBaseUrl = "https://wemastertrade.com";

export async function getPromotionItems(locale: Locale): Promise<PromotionItem[]> {
    const urlsToTry = [
        `${wpPromotionsBaseUrl}/${locale}/promotions/`,
        `${wpPromotionsBaseUrl}/promotions/`
    ];

    for (const url of urlsToTry) {
        try {
            const response = await fetch(url, {
                headers: {
                    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36",
                    "Cookie": `pll_language=${locale}`,
                    "Accept-Language": `${locale},en;q=0.9`
                },
                next: {
                    revalidate: 300,
                },
            });

            if (!response.ok) {
                console.warn(`Fetch returned status ${response.status} for ${url}`);
                continue;
            }

            const html = await response.text();
            const $ = cheerio.load(html);
            const items: PromotionItem[] = [];

            $(".promotions__content > .item").each((index, element) => {
                const item = $(element);
                const banner = item.find(".item__bnr").first();
                const content = item.find(".item__cnt").first();
                const desktopImage = banner.find("picture img").attr("src")?.trim() ?? "";

                if (!desktopImage) return;

                const id = banner.attr("id") || `promo-${index}`;
                const title = banner.find("picture img").attr("alt")?.trim() || "Promotion";
                const mobileImage = banner.find("picture source").attr("srcset")?.trim();

                items.push({
                    contentHtml: content.html()?.trim() ?? "",
                    desktopImage,
                    id,
                    mobileImage,
                    title,
                });
            });

            if (items.length > 0) {
                return items;
            }
        } catch (error) {
            console.error(`Failed to load promotions from ${url}:`, error);
        }
    }

    // Return empty array instead of throwing to prevent Next.js prerender/build failures
    return [];
}

