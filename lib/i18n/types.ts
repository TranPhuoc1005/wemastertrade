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
    instant: {
        funding: {
            accountSize: string;
            buyingPower: string;
            capitalPackage: string;
            comparison: string;
            dailyLoss: string;
            faq: string;
            freeSwap: string;
            freeTrial: string;
            maxLoss: string;
            oneTimeFee: string;
            package: string;
            profitTargetToWithdraw: string;
            scaleUp: string;
            swapFee: string;
            titlePrefix: string;
            titleSuffix: string;
            tryNow: string;
            weFundYou: string;
        };
    };
    payout: {
        hero: {
            title: string;
            desc: string;
            btnInterviews: string;
            btnDailyPayout: string;
        };
        meet: {
            titleHtml: string;
            loadMore: string;
        };
        daily: {
            titleSub: string;
            titleMain: string;
            blockchainDesc: string;
            totalPayouts: string;
            tabAll: string;
            tab7d: string;
            tab30d: string;
            tab12m: string;
            tableTitle: string;
            searchPlaceholder: string;
            entriesDescription: string;
            chartColumns: {
                region: string;
                amount: string;
                share: string;
                count: string;
            };
            columns: {
                no: string;
                name: string;
                payout: string;
                accountSize: string;
                country: string;
                time: string;
                txHash: string;
                certificate: string;
            };
        };
    };
    extracted?: Record<string, string>;
}

type DeepPartial<T> = {
    [K in keyof T]?: T[K] extends object ? DeepPartial<T[K]> : T[K];
};

export type PartialDictionary = DeepPartial<Dictionary>;
