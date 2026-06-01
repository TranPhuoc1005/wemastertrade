"use client";

import React from "react";
import Image from "next/image";
import type { PayoutDictionary } from "../../../lib/i18n/payoutTranslations";

interface HeroProps {
    dict: PayoutDictionary["hero"];
}

export default function Hero({ dict }: HeroProps) {
    return (
        <div className="payout__page mainvisual mainvisual__custombg">
            <div className="mainvisual__img">
                <Image
                    src="/images/mainvs_img_payout.png"
                    width={1612}
                    height={1123}
                    alt="Payouts"
                    priority
                />
            </div>
            <div className="container">
                <div className="mainvisual__content">
                    <h1 className="h2">
                        <span>{dict.title}</span>
                    </h1>
                    <div className="mainvisual__desc">
                        <p dangerouslySetInnerHTML={{ __html: dict.desc }} />
                    </div>
                    <div className="btn not_icon">
                        <p>
                            <a href="#meet">
                                <span>{dict.btnInterviews}</span>
                            </a>
                        </p>
                        <p>
                            <a href="#payout-table-section" className="btn_w">
                                <span>{dict.btnDailyPayout}</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    );
}
