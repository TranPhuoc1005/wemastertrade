"use client";

import React, { useState } from "react";
import { LangProps } from "../../../types/common";

interface WhyChooseProps extends LangProps {
    dict?: Record<string, string>;
}

export default function WhyChoose({lang, dict}: WhyChooseProps) {
    const t = dict || {};
    const [activeIndex, setActiveIndex] = useState(0);

    const items = [
        {
            number: t.wchoose_block_2 || "1st",
            contentHtml: t.wchoose_block_3,
            title: "Weekend / Overnight",
            description:
                "Hold trades overnight and over the weekend with no restrictions, enjoying low swap fees ideal for all trading strategies. Alternatively, you can pay a small additional fee to enjoy completely swap-free trading.",
        },
        {
            number: t.wchoose_block_4 || "2nd",
            contentHtml: t.wchoose_block_5,
            title: "News Trading Allowed",
            description: "At WMT, we believe in empowering traders. Trade the news freely and execute your strategy without any restrictions.",
        },
        {
            number: t.wchoose_block_6 || "3rd",
            contentHtml: t.wchoose_block_7,
            title: "Wide Range of Simulated Symbols",
            description: "Explore a rich portfolio of assets.",
        },
        {
            number: t.wchoose_block_8 || "4th",
            contentHtml: t.wchoose_block_9,
            title: "30% Reward Share in Challenge Phase",
            description:
                "WeMasterTrade stands out as a trading evaluation platform offering a 30% reward share based on performance achieved during the Challenge Phase.",
        },
    ];

    return (
        <section className="wchoose">
            <div className="container">
                <div className="title">
                    <p className="title__sub">{t.wchoose_block_0 || "Why choose?"}</p>
                    {t.wchoose_block_1 ? (
                        <div dangerouslySetInnerHTML={{ __html: t.wchoose_block_1 }} />
                    ) : (
                        <h3>Why choose<br /><span>The Challenge Package</span></h3>
                    )}
                </div>
                <div className="wchoose__content" onMouseLeave={() => setActiveIndex(0)}>
                    {items.map((item, index) => (
                        <div
                            className={`item${activeIndex === index ? " active" : ""}`}
                            key={item.number}
                            onMouseEnter={() => setActiveIndex(index)}
                        >
                            <p className="item__no">{item.number}</p>
                            {item.contentHtml ? (
                                <div className="cnt" dangerouslySetInnerHTML={{ __html: item.contentHtml }} />
                            ) : (
                                <div className="cnt">
                                    <h4>{item.title}</h4>
                                    <div className="desc">
                                        <p>{item.description}</p>
                                    </div>
                                </div>
                            )}
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
}
