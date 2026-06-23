import { defaultLocale, type Locale } from "./config";
import en from "./dictionaries/en";
import { instantFundingTranslations } from "./instantFundingTranslations";
import { packageTranslations } from "./packageTranslations";
import { payoutTranslations } from "./payoutTranslations";
import type { Dictionary, PartialDictionary } from "./types";

const dictionaries: Partial<Record<Locale, () => Promise<PartialDictionary>>> = {
    en: () => import("./dictionaries/en").then((module) => module.default),
    ar: () => import("./dictionaries/ar").then((module) => module.default),
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

export const dictionaryAliases: Partial<Record<Locale, Locale>> = {
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
    uz: "en",
};

export async function getDictionary(locale: Locale): Promise<Dictionary> {
    const dictionaryLocale = dictionaryAliases[locale] ?? locale;
    const loadDictionary = dictionaries[dictionaryLocale] ?? dictionaries[defaultLocale];
    const partial = await loadDictionary!();

    let extractedEn: Record<string, string> = {};
    try {
        extractedEn = await import(`./extracted/en.json`).then((m) => m.default);
    } catch (e) {}

    let extractedLocale: Record<string, string> = {};
    const targetLocale = locale === "ir" ? "fa" : locale;
    const targetDictLocale = dictionaryLocale === "ir" ? "fa" : dictionaryLocale;
    try {
        extractedLocale = await import(`./extracted/${targetLocale}.json`).then((m) => m.default);
    } catch (e) {
        try {
            extractedLocale = await import(`./extracted/${targetDictLocale}.json`).then((m) => m.default);
        } catch (e2) {}
    }

    return {
        ...en,
        ...partial,
        extracted: {
            ...extractedEn,
            ...extractedLocale,
        },
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
                package: extractedLocale.instant_funding_package || extractedEn.instant_funding_package || en.instant.funding.package,
                titlePrefix: extractedLocale.instant_funding_titlePrefix || extractedEn.instant_funding_titlePrefix || en.instant.funding.titlePrefix,
                titleSuffix: extractedLocale.instant_funding_titleSuffix || extractedEn.instant_funding_titleSuffix || en.instant.funding.titleSuffix,
                capitalPackage: extractedLocale.instant_funding_capitalPackage || extractedEn.instant_funding_capitalPackage || en.instant.funding.capitalPackage,
                comparison: extractedLocale.instant_funding_comparison || extractedEn.instant_funding_comparison || en.instant.funding.comparison,
                accountSize: extractedLocale.instant_funding_accountSize || extractedEn.instant_funding_accountSize || en.instant.funding.accountSize,
                tryNow: extractedLocale.instant_funding_tryNow || extractedEn.instant_funding_tryNow || en.instant.funding.tryNow,
                scaleUp: extractedLocale.instant_funding_scaleUp || extractedEn.instant_funding_scaleUp || en.instant.funding.scaleUp,
                faq: extractedLocale.instant_funding_faq || extractedEn.instant_funding_faq || en.instant.funding.faq,
                freeTrial: extractedLocale.instant_funding_freeTrial || extractedEn.instant_funding_freeTrial || en.instant.funding.freeTrial,
                weFundYou: extractedLocale.instant_funding_weFundYou || extractedEn.instant_funding_weFundYou || en.instant.funding.weFundYou,
                oneTimeFee: extractedLocale.instant_funding_oneTimeFee || extractedEn.instant_funding_oneTimeFee || en.instant.funding.oneTimeFee,
                profitTargetToWithdraw: extractedLocale.instant_funding_profitTargetToWithdraw || extractedEn.instant_funding_profitTargetToWithdraw || en.instant.funding.profitTargetToWithdraw,
                dailyLoss: extractedLocale.instant_funding_dailyLoss || extractedEn.instant_funding_dailyLoss || en.instant.funding.dailyLoss,
                maxLoss: extractedLocale.instant_funding_maxLoss || extractedEn.instant_funding_maxLoss || en.instant.funding.maxLoss,
                freeSwap: extractedLocale.instant_funding_freeSwap || extractedEn.instant_funding_freeSwap || en.instant.funding.freeSwap,
                swapFee: extractedLocale.instant_funding_swapFee || extractedEn.instant_funding_swapFee || en.instant.funding.swapFee,
                buyingPower: extractedLocale.instant_funding_buyingPower || extractedEn.instant_funding_buyingPower || en.instant.funding.buyingPower,
            },
        },
        payout: {
            hero: {
                ...payoutTranslations.en.hero,
                ...payoutTranslations[dictionaryLocale]?.hero,
                ...payoutTranslations[locale]?.hero,
                ...partial.payout?.hero,
            },
            meet: {
                ...payoutTranslations.en.meet,
                ...payoutTranslations[dictionaryLocale]?.meet,
                ...payoutTranslations[locale]?.meet,
                ...partial.payout?.meet,
            },
            daily: {
                ...payoutTranslations.en.daily,
                ...payoutTranslations[dictionaryLocale]?.daily,
                ...payoutTranslations[locale]?.daily,
                ...partial.payout?.daily,
                chartColumns: {
                    ...payoutTranslations.en.daily.chartColumns,
                    ...payoutTranslations[dictionaryLocale]?.daily?.chartColumns,
                    ...payoutTranslations[locale]?.daily?.chartColumns,
                    ...partial.payout?.daily?.chartColumns,
                },
                columns: {
                    ...payoutTranslations.en.daily.columns,
                    ...payoutTranslations[dictionaryLocale]?.daily?.columns,
                    ...payoutTranslations[locale]?.daily?.columns,
                    ...partial.payout?.daily?.columns,
                },
            },
        },
    };
}
