const WP_DOMAIN = "https://wemastertrade.com";

export function rewriteWpUrl(wpUrl: string, lang: string): string {
    if (!wpUrl || wpUrl === "#") {
        return `/${lang}/announcement`;
    }

    if (!wpUrl.startsWith(WP_DOMAIN)) {
        return wpUrl;
    }

    try {
        const url = new URL(wpUrl);
        const pathname = url.pathname.replace(/\/+$/, "");
        const hash = url.hash;

        if (pathname === "/promotions" || pathname.startsWith("/promotions/")) {
            return `/${lang}/promotions${hash}`;
        }

        if (pathname === "/seminar" || pathname.startsWith("/seminar/")) {
            return wpUrl;
        }

        return `/${lang}/announcement`;
    } catch {
        return wpUrl;
    }
}
