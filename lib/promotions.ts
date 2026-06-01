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
    const response = await fetch(`${wpPromotionsBaseUrl}/${locale}/promotions/`, {
        next: {
            revalidate: 300,
        },
    });

    if (!response.ok) {
        throw new Error("Failed to load promotions");
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

    return items;
}
