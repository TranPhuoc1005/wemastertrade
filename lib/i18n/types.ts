export interface Dictionary {
    common: {
        header: {
            instantEvaluation: string;
            challenge: string;
            instant: string;
            testimonials: string;
            introducingPartners: string;
            promotions: string;
            faq: string;
            aboutUs: string;
            weMasterTrade: string;
            announcement: string;
            academy: string;
            certification: string;
            contactUs: string;
            payout: string;
            rewardsProfitSharing: string;
            scaleUpPlan: string;
            simulatedSymbols: string;
            seminar: string;
            blog: string;
            tradingPlatforms: string;
            paymentMethods: string;
            login: string;
        };
    };
    home: {
        hero: {
            imageAlt: string;
            titleLine1: string;
            titleLine2: string;
            point1: string;
            point2Prefix: string;
            point2Term: string;
            point2Suffix: string;
            point2Tooltip: string;
            point3: string;
            primaryCta: string;
            promotionsCta: string;
            appStoreAlt: string;
            googlePlayAlt: string;
        };
        package: {
            subtitle: string;
            titlePrefix: string;
            titleSuffix: string;
            noChallenge: string;
            startChallenge: string;
            phase1: string;
            phase2: string;
            funded: string;
            perTime: string;
            oneTimeFee: string;
            maximumDailyLoss: string;
            maximumOverallLoss: string;
            profitTarget: string;
            rewardShare: string;
            resetDiscount: string;
            freeSwap: string;
            leverage: string;
            upTo100: string;
            refund: string;
            notApplicable: string;
        };
    };
}

type DeepPartial<T> = {
    [K in keyof T]?: T[K] extends object ? DeepPartial<T[K]> : T[K];
};

export type PartialDictionary = DeepPartial<Dictionary>;
