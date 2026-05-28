import { defaultLocale, type Locale } from "./config";
import en from "./dictionaries/en";
import { instantFundingTranslations } from "./instantFundingTranslations";
import { packageTranslations } from "./packageTranslations";
import type { Dictionary, PartialDictionary } from "./types";

const dictionaries: Partial<Record<Locale, () => Promise<PartialDictionary>>> = {
    en: () => import("./dictionaries/en").then((module) => module.default),
    bn: () => import("./dictionaries/bn").then((module) => module.default),
    es: () => import("./dictionaries/es").then((module) => module.default),
    fr: () => import("./dictionaries/fr").then((module) => module.default),
    hk: () => import("./dictionaries/hk").then((module) => module.default),
    id: () => import("./dictionaries/id").then((module) => module.default),
    ir: () => import("./dictionaries/ir").then((module) => module.default),
    ja: () => import("./dictionaries/ja").then((module) => module.default),
    km: () => import("./dictionaries/km").then((module) => module.default),
    ko: () => import("./dictionaries/ko").then((module) => module.default),
    pt: () => import("./dictionaries/pt").then((module) => module.default),
    ru: () => import("./dictionaries/ru").then((module) => module.default),
    th: () => import("./dictionaries/th").then((module) => module.default),
    tr: () => import("./dictionaries/tr").then((module) => module.default),
    ur: () => import("./dictionaries/ur").then((module) => module.default),
    vi: () => import("./dictionaries/vi").then((module) => module.default),
    zh: () => import("./dictionaries/zh").then((module) => module.default),
};

const dictionaryAliases: Partial<Record<Locale, Locale>> = {
    afr: "en",
    au: "en",
    co: "es",
    "en-ca": "en",
    "en-my": "en",
    "es-ar": "es",
    "es-mx": "es",
    "es-pe": "es",
    in: "en",
    ph: "en",
    sg: "en",
};

export async function getDictionary(locale: Locale): Promise<Dictionary> {
    const dictionaryLocale = dictionaryAliases[locale] ?? locale;
    const loadDictionary = dictionaries[dictionaryLocale] ?? dictionaries[defaultLocale];
    const partial = await loadDictionary!();

    return {
        ...en,
        ...partial,
        common: {
            ...en.common,
            ...partial.common,
            header: {
                ...en.common.header,
                ...partial.common?.header,
            },
        },
        home: {
            ...en.home,
            ...partial.home,
            hero: {
                ...en.home.hero,
                ...partial.home?.hero,
            },
            package: {
                ...en.home.package,
                ...packageTranslations[dictionaryLocale],
                ...partial.home?.package,
            },
        },
        instant: {
            ...en.instant,
            ...partial.instant,
            funding: {
                ...en.instant.funding,
                ...instantFundingTranslations[dictionaryLocale],
                ...instantFundingTranslations[locale],
                ...partial.instant?.funding,
            },
        },
    };
}
