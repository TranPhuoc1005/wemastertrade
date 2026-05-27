"use client";

import React, { useState } from "react";
import { LangProps } from "../../../types/common";

const items = [
    {
        number: "1st",
        title: "Weekend / Overnight",
        description:
            "Hold trades overnight and over the weekend with no restrictions, enjoying low swap fees ideal for all trading strategies. Alternatively, you can pay a small additional fee to enjoy completely swap-free trading.",
    },
    {
        number: "2nd",
        title: "News Trading Allowed",
        description: "At WMT, we believe in empowering traders. Trade the news freely and execute your strategy without any restrictions.",
    },
    {
        number: "3rd",
        title: "Wide Range of Simulated Symbols",
        description: "Explore a rich portfolio of assets.",
    },
    {
        number: "4th",
        title: "30% Reward Share in Challenge Phase",
        description:
            "WeMasterTrade stands out as a trading evaluation platform offering a 30% reward share based on performance achieved during the Challenge Phase.",
    },
];

export default function WhyChoose({lang}: LangProps) {
    const [activeIndex, setActiveIndex] = useState(0);

    return (
        <section className="wchoose">
            <div className="container">
                <div className="title">
                    <p className="title__sub">Why choose?</p>
                    <h3>Why choose<br /><span>The Challenge Package</span></h3>
                </div>
                <div className="wchoose__content" onMouseLeave={() => setActiveIndex(0)}>
                    {items.map((item, index) => (
                        <div
                            className={`item${activeIndex === index ? " active" : ""}`}
                            key={item.number}
                            onMouseEnter={() => setActiveIndex(index)}
                        >
                            <p className="item__no">{item.number}</p>
                            <div className="cnt">
                                <h4>{item.title}</h4>
                                <div className="desc">
                                    <p>{item.description}</p>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
}
