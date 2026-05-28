"use client";

import Image from "next/image";
import Link from "next/link";
import { useMemo, useState } from "react";
import { getSafeLocale, localizedPath } from "../../../lib/i18n/routing";
import type { Dictionary } from "../../../lib/i18n/types";
import { LangProps } from "../../../types/common";

type CapitalPackageId = "51010" | "510 Zero" | "Customize";

interface MarketOption {
    id: string;
    label: string;
    buyingPower: string;
    dailyLoss: string;
    fee: string;
    maxLoss: string;
    profitTarget: string;
}

interface CapitalPackage {
    id: CapitalPackageId;
    label: string;
    options: MarketOption[];
}

const capitalPackages: CapitalPackage[] = [
    {
        id: "51010",
        label: "51010",
        options: [
            option("5k", "$5,000", "$44", "$500,000", "$250 (5%)", "$500 (10%)", "10%"),
            option("10k", "$10,000", "$76", "$1,000,000", "$500 (5%)", "$1,000 (10%)", "10%"),
            option("25k", "$25,000", "$196", "$2,500,000", "$1,250 (5%)", "$2,500 (10%)", "10%"),
            option("50k", "$50,000", "$288", "$5,000,000", "$2,500 (5%)", "$5,000 (10%)", "10%"),
            option("100k", "$100,000", "$552", "$10,000,000", "$5,000 (5%)", "$10,000 (10%)", "10%"),
            option("200k", "$200,000", "$1,072", "$20,000,000", "$10,000 (5%)", "$20,000 (10%)", "10%"),
        ],
    },
    {
        id: "510 Zero",
        label: "510Zero",
        options: [
            option("5k", "$5,000", "$52", "$500,000", "$250 (5%)", "$500 (10%)", "N/A"),
            option("10k", "$10,000", "$84", "$1,000,000", "$500 (5%)", "$1,000 (10%)", "N/A"),
            option("25k", "$25,000", "$220", "$2,500,000", "$1,250 (5%)", "$2,500 (10%)", "N/A"),
            option("50k", "$50,000", "$328", "$5,000,000", "$2,500 (5%)", "$5,000 (10%)", "N/A"),
            option("100k", "$100,000", "$640", "$10,000,000", "$5,000 (5%)", "$10,000 (10%)", "N/A"),
            option("200k", "$200,000", "$1,248", "$20,000,000", "$10,000 (5%)", "$20,000 (10%)", "N/A"),
        ],
    },
    {
        id: "Customize",
        label: "Customize",
        options: [
            option("10k", "$10,000", "$35", "$1,000,000", "$200 (2%)", "$400 (4%)", "6%"),
            option("25k", "$25,000", "$88", "$2,500,000", "$500 (2%)", "$1,000(4%)", "6%"),
            option("50k", "$50,000", "$175", "$5,000,000", "$1,000 (2%)", "$2,000 (4%)", "6%"),
            option("100k", "$100,000", "$345", "$10,000,000", "$2,000 (2%)", "$4,000 (4%)", "6%"),
            option("200k", "$200,000", "$690", "$20,000,000", "$4,000 (2%)", "$8,000 (4%)", "6%"),
            option("400k", "$400,000", "$1,380", "$40,000,000", "$8,000 (2%)", "$16,000 (4%)", "6%"),
        ],
    },
];

function option(
    id: string,
    label: string,
    fee: string,
    buyingPower: string,
    dailyLoss: string,
    maxLoss: string,
    profitTarget: string
): MarketOption {
    return {
        buyingPower,
        dailyLoss,
        fee,
        id,
        label,
        maxLoss,
        profitTarget,
    };
}

interface Props extends LangProps {
    dict: Dictionary["instant"]["funding"];
}

export default function InstantFunding({ dict, lang }: Props) {
    const locale = getSafeLocale(lang);
    const [activeCapitalId, setActiveCapitalId] = useState<CapitalPackageId>("51010");
    const activeCapital = useMemo(
        () => capitalPackages.find((item) => item.id === activeCapitalId) ?? capitalPackages[0],
        [activeCapitalId]
    );
    const [activeMarketId, setActiveMarketId] = useState(activeCapital.options[0].id);
    const activeMarket = activeCapital.options.find((item) => item.id === activeMarketId) ?? activeCapital.options[0];

    function selectCapital(nextCapitalId: CapitalPackageId) {
        const nextCapital = capitalPackages.find((item) => item.id === nextCapitalId) ?? capitalPackages[0];

        setActiveCapitalId(nextCapital.id);
        setActiveMarketId(nextCapital.options[0].id);
    }

    return (
        <section id="instant-funding" className="trading">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">{dict.package}</p>
                    <h3>
                        {dict.titlePrefix} <span>{dict.titleSuffix}</span>
                    </h3>
                </div>

                <div className="trading__content">
                    <div className="trading__capital">
                        <h4>{dict.capitalPackage}</h4>
                        <div className="trading__capital--tabs">
                            {capitalPackages.map((item) => (
                                <p
                                    className={`item${activeCapitalId === item.id ? " active" : ""}`}
                                    data-tab={item.id}
                                    data-tab-group="trading_capital"
                                    key={item.id}
                                    onClick={() => selectCapital(item.id)}
                                    onKeyDown={(event) => {
                                        if (event.key === "Enter" || event.key === " ") {
                                            event.preventDefault();
                                            selectCapital(item.id);
                                        }
                                    }}
                                    role="button"
                                    tabIndex={0}>
                                    {item.label}
                                </p>
                            ))}
                            <Link className="item" href={localizedPath(locale, "/package-comparison")}>
                                {dict.comparison}
                            </Link>
                        </div>
                    </div>

                    <div className="trading__market">
                        <div className="trading__market--size">
                            <p className="label">{dict.accountSize}</p>
                            {capitalPackages.map((capitalPackage) => (
                                <div
                                    className={`trading__market--price${activeCapitalId === capitalPackage.id ? " active" : ""}`}
                                    data-tab-content={capitalPackage.id}
                                    data-tab-group="trading_capital"
                                    key={capitalPackage.id}>
                                    {capitalPackage.options.map((item) => (
                                        <p
                                            className={activeCapitalId === capitalPackage.id && activeMarketId === item.id ? "active" : ""}
                                            data-tab={item.id}
                                            data-tab-group="trading_market"
                                            key={item.id}
                                            onClick={() => setActiveMarketId(item.id)}
                                            onKeyDown={(event) => {
                                                if (event.key === "Enter" || event.key === " ") {
                                                    event.preventDefault();
                                                    setActiveMarketId(item.id);
                                                }
                                            }}
                                            role="button"
                                            tabIndex={activeCapitalId === capitalPackage.id ? 0 : -1}>
                                            {item.label}
                                        </p>
                                    ))}
                                </div>
                            ))}
                        </div>

                        <p className="trading__market--badge">
                            <Image loading="lazy" src="/images/ic_badge.png" width={22} height={25} alt="Account" />
                            {activeCapital.label} Account {activeMarket.label}
                        </p>

                        {capitalPackages.map((capitalPackage) => (
                            <div
                                className={`trading__market--content${activeCapitalId === capitalPackage.id ? " active" : ""}`}
                                data-tab-content={capitalPackage.id}
                                data-tab-group="trading_capital"
                                key={capitalPackage.id}>
                                {capitalPackage.options.map((item) => (
                                    <MarketDetails
                                        dict={dict}
                                        item={item}
                                        key={item.id}
                                        active={activeCapitalId === capitalPackage.id && activeMarketId === item.id}
                                    />
                                ))}
                            </div>
                        ))}

                        <div className="trading__market--btn">
                            <div className="btn">
                                <p>
                                    <a href="https://my.wemastertrade.com/en/register/" target="_blank" rel="noreferrer">
                                        <span>{dict.tryNow}</span>
                                    </a>
                                </p>
                                <p>
                                    <Link href={localizedPath(locale, "/scale-up-plan")} className="btn_w">
                                        <span>{dict.scaleUp}</span>
                                    </Link>
                                </p>
                            </div>
                            <div className="link">
                                <p>
                                    <a href="https://faq.wemastertrade.com/" target="_blank" rel="noreferrer">
                                        {dict.faq}
                                    </a>
                                </p>
                                <p>
                                    <a href="https://my.wemastertrade.com/" target="_blank" rel="noreferrer">
                                        {dict.freeTrial}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}

function MarketDetails({
    active,
    dict,
    item,
}: {
    active: boolean;
    dict: Dictionary["instant"]["funding"];
    item: MarketOption;
}) {
    return (
        <div className={`item${active ? " active" : ""}`} data-tab-content={item.id} data-tab-group="trading_market">
            <dl className="total">
                <dt>
                    {dict.weFundYou}
                    <span className="clr">{item.label}</span>
                </dt>
            </dl>
            <dl>
                <dt>{dict.oneTimeFee}</dt>
                <dd>
                    <span className="red">{item.fee}</span>
                </dd>
            </dl>
            <dl>
                <dt>{dict.swapFee}</dt>
                <dd>{dict.freeSwap}</dd>
            </dl>
            <dl>
                <dt>{dict.buyingPower}</dt>
                <dd>{item.buyingPower}</dd>
            </dl>
            <dl>
                <dt>{dict.dailyLoss}</dt>
                <dd>{item.dailyLoss}</dd>
            </dl>
            <dl>
                <dt>{dict.maxLoss}</dt>
                <dd>{item.maxLoss}</dd>
            </dl>
            <dl>
                <dt>{dict.profitTargetToWithdraw}</dt>
                <dd>{item.profitTarget}</dd>
            </dl>
        </div>
    );
}
