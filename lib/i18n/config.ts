export const defaultLocale = "en";

export const languages = [
    { code: "afr", slug: "afr", label: "Africa", flag: "/images/local_flag_africa.png", htmlLang: "en" },
    { code: "es-ar", slug: "es-ar", label: "Argentina", flag: "/images/local_flag_argentina.png", htmlLang: "es-AR" },
    { code: "au", slug: "au", label: "Australia", flag: "/images/local_flag_australia.png", htmlLang: "en-AU" },
    { code: "bn", slug: "bn", label: "Bangladesh", flag: "/images/local_flag_bangladesh.png", htmlLang: "bn" },
    { code: "km", slug: "km", label: "Cambodia", flag: "/images/local_flag_cambodia.png", htmlLang: "km" },
    { code: "en-ca", slug: "en-ca", label: "Canada", flag: "/images/local_flag_canada.png", htmlLang: "en-CA" },
    { code: "co", slug: "co", label: "Colombia", flag: "/images/local_flag_colombia.png", htmlLang: "es-CO" },
    { code: "en", slug: "en", label: "English", flag: "/images/flag_english.png", htmlLang: "en" },
    { code: "es", slug: "es", label: "Espanol", flag: "/images/flag_english.png", htmlLang: "es" },
    { code: "fr", slug: "fr", label: "Francais", flag: "/images/flag_english.png", htmlLang: "fr" },
    { code: "hk", slug: "hk", label: "Hong Kong", flag: "/images/local_flag_hongkong.png", htmlLang: "zh-HK" },
    { code: "in", slug: "in", label: "India", flag: "/images/local_flag_india.png", htmlLang: "en-IN" },
    { code: "id", slug: "id", label: "Indonesian", flag: "/images/local_flag_indonesia.png", htmlLang: "id" },
    { code: "ja", slug: "ja", label: "Japan", flag: "/images/local_flag_japan.png", htmlLang: "ja" },
    { code: "en-my", slug: "en-my", label: "Malay", flag: "/images/local_flag_malaysia.png", htmlLang: "en-MY" },
    { code: "es-mx", slug: "es-mx", label: "Mexico", flag: "/images/local_flag_mexico.png", htmlLang: "es-MX" },
    { code: "es-pe", slug: "es-pe", label: "Peru", flag: "/images/flag_peru.png", htmlLang: "es-PE" },
    { code: "ur", slug: "ur", label: "Pakistan", flag: "/images/local_flag_pakistan.png", htmlLang: "ur" },
    { code: "ph", slug: "ph", label: "Philippines", flag: "/images/local_flag_philippines.png", htmlLang: "en-PH" },
    { code: "pt", slug: "pt", label: "Portugues", flag: "/images/flag_english.png", htmlLang: "pt" },
    { code: "sg", slug: "sg", label: "Singapore", flag: "/images/local_flag_sing.png", htmlLang: "en-SG" },
    { code: "th", slug: "th", label: "Thai", flag: "/images/local_flag_thailand.png", htmlLang: "th" },
    { code: "tr", slug: "tr", label: "Turkiye", flag: "/images/local_flag_turkiye.png", htmlLang: "tr" },
    { code: "vi", slug: "vi", label: "Vietnam", flag: "/images/local_flag_vietnam.png", htmlLang: "vi" },
    { code: "zh", slug: "zh", label: "Chinese", flag: "/images/local_flag_china.png", htmlLang: "zh" },
    { code: "ar", slug: "ar", label: "Arabic", flag: "/images/flag_arabic.png", htmlLang: "ar" },
    { code: "ir", slug: "ir", label: "Persian", flag: "/images/local_flag_persian.png", htmlLang: "fa" },
    { code: "ru", slug: "ru", label: "Russian", flag: "/images/local_flag_pynccknn.png", htmlLang: "ru" },
    { code: "ko", slug: "ko", label: "Korean", flag: "/images/local_flag_korea.png", htmlLang: "ko" },
] as const;

export type Locale = (typeof languages)[number]["slug"];

export const locales = languages.map((language) => language.slug) as Locale[];

export function isLocale(value: string): value is Locale {
    return locales.includes(value as Locale);
}

export function getLocaleMeta(locale: Locale) {
    return languages.find((language) => language.slug === locale) ?? languages.find((language) => language.slug === defaultLocale)!;
}
