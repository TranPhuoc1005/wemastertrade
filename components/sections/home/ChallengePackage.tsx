"use client";

import Image from "next/image";
import { useEffect, useState } from "react";
import type { Locale } from "../../../lib/i18n/config";
import { localizedPath } from "../../../lib/i18n/routing";
import type { Dictionary } from "../../../lib/i18n/types";

interface Props {
    dict: Dictionary["home"]["package"];
    lang: Locale;
}

interface PackagePlan {
    id: string;
    accountSize: string;
    phase1Fee: string;
    dailyLoss: string;
    overallLoss: string;
    phase1Target: string;
    phase2Target: string;
}

const packages: PackagePlan[] = [
    {
        id: "package1",
        accountSize: "$10,000",
        phase1Fee: "$45",
        dailyLoss: "5% ($500)",
        overallLoss: "10% ($1,000)",
        phase1Target: "8% ($800)",
        phase2Target: "6% ($600)",
    },
    {
        id: "package2",
        accountSize: "$25,000",
        phase1Fee: "$100",
        dailyLoss: "5% ($1,250)",
        overallLoss: "10% ($2,500)",
        phase1Target: "8% ($2,000)",
        phase2Target: "6% ($1,500)",
    },
    {
        id: "package3",
        accountSize: "$50,000",
        phase1Fee: "$175",
        dailyLoss: "5% ($2,500)",
        overallLoss: "10% ($5,000)",
        phase1Target: "8% ($4,000)",
        phase2Target: "6% ($3,000)",
    },
    {
        id: "package4",
        accountSize: "$100,000",
        phase1Fee: "$320",
        dailyLoss: "5% ($5,000)",
        overallLoss: "10% ($10,000)",
        phase1Target: "8% ($8,000)",
        phase2Target: "6% ($6,000)",
    },
];

const slideCount = 8;

function CheckIcon() {
    return (
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
            <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z" />
        </svg>
    );
}

function FeatureIcon({ index, alt }: { index: number; alt: string }) {
    return (
        <Image
            loading="lazy"
            src={`/images/package_ic${index}.png`}
            width={30}
            height={30}
            alt={alt}
        />
    );
}

function labelWithIcon(index: number, label: string, alt: string, wrapWithSpan = false) {
    return (
        <>
            <FeatureIcon alt={alt} index={index} />
            {wrapWithSpan ? <span>{label}</span> : label}
        </>
    );
}

export default function ChallengePackage({ dict, lang }: Props) {
    const defaultPlan = packages[2];
    const [activePackageId, setActivePackageId] = useState(defaultPlan.id);
    const [activeSlide, setActiveSlide] = useState(0);
    const [isPackageSwiperEnabled, setIsPackageSwiperEnabled] = useState(false);
    const activePackage = packages.find((item) => item.id === activePackageId) ?? defaultPlan;
    const leverage = lang === "es-pe" ? "2:40" : "1:100";
    const package2Label = lang === "es-pe" ? "$20,000" : packages[1].accountSize;

    useEffect(() => {
        function syncPackageSwiper() {
            const shouldEnable = window.innerWidth <= 768;
            setIsPackageSwiperEnabled(shouldEnable);

            if (!shouldEnable) {
                setActiveSlide(0);
            }
        }

        syncPackageSwiper();
        window.addEventListener("resize", syncPackageSwiper);

        return () => {
            window.removeEventListener("resize", syncPackageSwiper);
        };
    }, []);

    function selectPackage(packageId: string) {
        setActivePackageId(packageId);
        setActiveSlide(0);
    }

    function goToPrevSlide() {
        setActiveSlide((current) => Math.max(current - 1, 0));
    }

    function goToNextSlide() {
        setActiveSlide((current) => Math.min(current + 1, slideCount - 1));
    }

    const swiperWrapperStyle = isPackageSwiperEnabled
        ? {
              display: "flex",
              flexDirection: "row" as const,
              transform: `translate3d(-${activeSlide * 100}%, 0, 0)`,
              transition: "transform 300ms ease",
          }
        : undefined;

    const swiperSlideStyle = isPackageSwiperEnabled
        ? {
              flex: "0 0 100%",
          }
        : undefined;

    return (
        <section id="challenge_package" className="package">
            <p className="package__dc1">
                <Image
                    loading="lazy"
                    src="/images/package_dc1.png"
                    width={792}
                    height={1628}
                    alt={`${dict.titlePrefix} ${dict.titleSuffix}`}
                />
            </p>
            <p className="package__dc2">
                <Image
                    loading="lazy"
                    src="/images/package_dc2.png"
                    width={831}
                    height={1306}
                    alt={`${dict.titlePrefix} ${dict.titleSuffix}`}
                />
            </p>

            <div className="container">
                <div className="title">
                    <p className="title__sub">{dict.subtitle}</p>
                    <h3>
                        <span>{dict.titlePrefix}</span> {dict.titleSuffix}
                    </h3>
                </div>

                <div className="package__tabs">
                    {packages.map((item, index) => (
                        <p
                            key={item.id}
                            className={`item ${activePackageId === item.id ? "active" : ""}`}
                            data-tab={item.id}
                            data-tab-group="1"
                            onKeyDown={(event) => {
                                if (event.key === "Enter" || event.key === " ") {
                                    event.preventDefault();
                                    selectPackage(item.id);
                                }
                            }}
                            onClick={() => selectPackage(item.id)}
                            role="button"
                            tabIndex={0}>
                            {index === 1 ? package2Label : item.accountSize}
                        </p>
                    ))}
                    <p className="item">
                        <a href={`${localizedPath(lang, "/instant")}?from=instantbtn`} id="url-instant">
                            {dict.noChallenge}
                        </a>
                    </p>
                </div>

                <div className="package__scroll">
                    <div className="package__content border__glassed active" data-tab-content={activePackage.id} data-tab-group="1">
                        <div className="package__content--title">
                            <div className="item" />
                            <div className="item">
                                <p className="phase">{dict.phase1}</p>
                                <p className="price">
                                    <span>{activePackage.phase1Fee}</span>
                                    {dict.perTime}
                                </p>
                            </div>
                            <div className="item">
                                <p className="phase">{dict.phase2}</p>
                                <p className="price">
                                    <span>{dict.notApplicable}</span>
                                    {dict.perTime}
                                </p>
                            </div>
                            <div className="item">
                                <p className="phase">{dict.funded}</p>
                                <p className="price">
                                    <span>{dict.refund}</span>
                                    {dict.perTime}
                                </p>
                            </div>
                        </div>

                        <div
                            className="package__content--option swiper"
                            style={isPackageSwiperEnabled ? { overflow: "hidden", position: "relative" } : undefined}>
                            <div className="swiper-wrapper" style={swiperWrapperStyle}>
                                <div className="item swiper-slide sp" style={swiperSlideStyle}>
                                    <p className="row">{labelWithIcon(0, dict.oneTimeFee, dict.oneTimeFee)}</p>
                                    <p className="row">{activePackage.phase1Fee}</p>
                                    <p className="row">{dict.notApplicable}</p>
                                    <p className="row">{dict.refund}</p>
                                </div>

                                <div className="item swiper-slide" style={swiperSlideStyle}>
                                    <p className="row">{labelWithIcon(1, dict.freeSwap, dict.freeSwap)}</p>
                                    <p className="row"><CheckIcon /></p>
                                    <p className="row"><CheckIcon /></p>
                                    <p className="row"><CheckIcon /></p>
                                </div>

                                <div className="item swiper-slide" style={swiperSlideStyle}>
                                    <p className="row">{labelWithIcon(2, dict.maximumDailyLoss, dict.maximumDailyLoss, true)}</p>
                                    <p className="row">{activePackage.dailyLoss}</p>
                                    <p className="row">{activePackage.dailyLoss}</p>
                                    <p className="row">{activePackage.dailyLoss}</p>
                                </div>

                                <div className="item swiper-slide" style={swiperSlideStyle}>
                                    <p className="row">{labelWithIcon(3, dict.maximumOverallLoss, dict.maximumOverallLoss, true)}</p>
                                    <p className="row">{activePackage.overallLoss}</p>
                                    <p className="row">{activePackage.overallLoss}</p>
                                    <p className="row">{activePackage.overallLoss}</p>
                                </div>

                                <div className="item swiper-slide" style={swiperSlideStyle}>
                                    <p className="row">{labelWithIcon(4, dict.profitTarget, dict.profitTarget, true)}</p>
                                    <p className="row">{activePackage.phase1Target}</p>
                                    <p className="row">{activePackage.phase2Target}</p>
                                    <p className="row"><span className="clr">{dict.notApplicable}</span></p>
                                </div>

                                <div className="item swiper-slide" style={swiperSlideStyle}>
                                    <p className="row">{labelWithIcon(5, dict.rewardShare, dict.rewardShare)}</p>
                                    <p className="row">{dict.notApplicable}</p>
                                    <p className="row"><span className="clr">30%</span></p>
                                    <p className="row"><span className="clr">90%</span></p>
                                </div>

                                <div className="item swiper-slide" style={swiperSlideStyle}>
                                    <p className="row">{labelWithIcon(6, dict.leverage, dict.leverage)}</p>
                                    <p className="row">{leverage}</p>
                                    <p className="row">{leverage}</p>
                                    <p className="row">{dict.upTo100}</p>
                                </div>

                                <div className="item swiper-slide" style={swiperSlideStyle}>
                                    <p className="row">{labelWithIcon(7, dict.resetDiscount, dict.resetDiscount)}</p>
                                    <p className="row">30%</p>
                                    <p className="row">30%</p>
                                    <p className="row">{dict.notApplicable}</p>
                                </div>
                            </div>

                            {isPackageSwiperEnabled ? (
                                <>
                                    <button
                                        aria-label="Previous package option"
                                        className="swiper-button swiper-button-prev"
                                        disabled={activeSlide === 0}
                                        onClick={goToPrevSlide}
                                        type="button">
                                        <svg viewBox="0 0 10 16" aria-hidden="true">
                                            <path
                                                d="M8 14L2 8L8 2"
                                                fill="none"
                                                stroke="currentColor"
                                                strokeLinecap="round"
                                                strokeLinejoin="round"
                                                strokeWidth="2"
                                            />
                                        </svg>
                                    </button>
                                    <button
                                        aria-label="Next package option"
                                        className="swiper-button swiper-button-next"
                                        disabled={activeSlide === slideCount - 1}
                                        onClick={goToNextSlide}
                                        type="button">
                                        <svg viewBox="0 0 10 16" aria-hidden="true">
                                            <path
                                                d="M2 14L8 8L2 2"
                                                fill="none"
                                                stroke="currentColor"
                                                strokeLinecap="round"
                                                strokeLinejoin="round"
                                                strokeWidth="2"
                                            />
                                        </svg>
                                    </button>
                                </>
                            ) : null}
                        </div>
                    </div>
                </div>

                <div className="btn center">
                    <p>
                        <a href="https://my.wemastertrade.com/" target="_blank">
                            <span>{dict.startChallenge}</span>
                        </a>
                    </p>
                </div>
            </div>
        </section>
    );
}
