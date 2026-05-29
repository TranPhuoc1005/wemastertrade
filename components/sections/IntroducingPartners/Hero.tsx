"use client";

import React, { useState } from "react";
import Image from "next/image";

const minSliderValue = 10;
const maxSliderValue = 200000;
const defaultSliderValue = 159920;
const commissionRate = 0.25;

function formatCurrency(value: number) {
    return `$${value.toLocaleString()}`;
}

export default function Hero() {
    const [sliderValue, setSliderValue] = useState(defaultSliderValue);
    const progressPercent = (sliderValue / maxSliderValue) * 100;
    const commission = Math.floor(sliderValue * commissionRate);

    return (
        <div className="mainvisual affiliate__page mainvisual__custombg">
            <div className="mainvisual__img"><Image src="/images/mainvs_img_affiliate.png" width={1920} height={1146} alt="Welcome to Our Introducing Partner Program" /></div>
            <div className="container">
                <div className="mainvisual__content">
                    <h2>Welcome to Our <br /><span>Introducing Partner</span> Program</h2>
                    <div className="mainvisual__desc">
                        <p><strong>Earn recurring commissions for the lifetime with three deep levels.</strong><br />Refer your unique Introducing Partners link, build your partner network, and commission for the lifetime from direct<br />referrals and sub-partners activities up to three levels deep.</p>
                    </div>
                    <div className="affiliate__main">
                        <div className="affiliate__range">
                            <div className="affiliate__range--value" id="sliderVal" style={{ left: `${progressPercent}%` }}>
                                {formatCurrency(sliderValue)}
                            </div>
                            <div className="affiliate__range--progress" id="progress" style={{ width: `${progressPercent}%` }}></div>
                            <input
                                type="range"
                                min={minSliderValue}
                                max={maxSliderValue}
                                value={sliderValue}
                                className="range"
                                id="slider"
                                onChange={(event) => setSliderValue(Number(event.target.value))}
                            />
                        </div>
                        <div className="affiliate__earned">
                            <p className="txt">Commission Earned</p>
                            <p className="num">{formatCurrency(commission)}</p>
                        </div>
                        <div className="btn center">
                            <p>
                                <a href="https://my.wemastertrade.com/" target="_blank" style={{ width: "100%" }}>
                                    <span>Become an Introducing Partner</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}
