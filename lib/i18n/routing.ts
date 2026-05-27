import { defaultLocale, isLocale, type Locale } from "./config";

export function localizedPath(locale: Locale, path = "") {
    if (!path || path === "/") return `/${locale}`;
    if (path.startsWith("#")) return `/${locale}${path}`;
    return `/${locale}${path.startsWith("/") ? path : `/${path}`}`;
}

export function switchLocaleInPath(pathname: string, nextLocale: Locale) {
    const parts = pathname.split("/");
    const currentLocale = parts[1];

    if (currentLocale && isLocale(currentLocale)) {
        parts[1] = nextLocale;
        return parts.join("/") || `/${nextLocale}`;
    }

    return localizedPath(nextLocale, pathname);
}

export function getSafeLocale(value: string): Locale {
    return isLocale(value) ? value : defaultLocale;
}
