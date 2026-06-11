"use client";

import Image from "next/image";
import React from "react";
import { useAccordion } from "../../../hooks/useAccordion";

interface UniqueProps {
    dict?: Record<string, string>;
}

export default function Unique({ dict }: UniqueProps) {
    const t = dict || {};
    const accordion = useAccordion({ defaultOpenIds: ["unique1"] });

    const uniqueItems = [
        {
            id: "unique1",
            title: t.instant_unique_block_3 || "Instant Funding",
            description: t.instant_unique_block_4 || "No more evaluation processes or challenges, you only need to pay a small fee and then get instant access to our capital.",
            watchVideoText: t.instant_unique_block_5 || "Watch video",
            youtubeId: "o9pXnQ210KI",
        },
        {
            id: "unique2",
            title: t.instant_unique_block_6 || "Signal Followers",
            description: t.instant_unique_block_7 || "Utilize the WMT fund account to follow and replicate trades from top traders, aiming to enhance your trading strategy.",
            watchVideoText: t.instant_unique_block_8 || "Watch video",
            youtubeId: "Yb5SnhJ3OnU",
        },
        {
            id: "unique3",
            title: t.instant_unique_block_9 || "Signal Providers",
            description: t.instant_unique_block_10 || "Become a signal provider through the WMT fund account and share your trading strategies with others.",
            watchVideoText: t.instant_unique_block_11 || "Watch video",
            youtubeId: "baNaZ4pQBfw",
        },
        {
            id: "unique4",
            title: t.instant_unique_block_12 || "Trial",
            description: t.instant_unique_block_13 || "Our Trial is intended to help prospective customers understand how it operates and evaluate their trading abilities to determine whether they have what it takes to become expert traders at WeMasterTrade.",
            watchVideoText: t.instant_unique_block_14 || "Watch video",
            youtubeId: "G_Nzfp8H6fE",
        },
        {
            id: "unique5",
            title: t.instant_unique_block_15 || "Academy",
            description: t.instant_unique_block_16 || "Our courses are designed to give the fundamental knowledge and technical skills required to comprehend the financial markets and the traded instruments to all traders who are interested in gaining more experience and mastering their trades.",
            watchVideoText: t.instant_unique_block_17 || "Watch video",
            youtubeId: "n11cIqVws88",
        },
        {
            id: "unique6",
            title: t.instant_unique_block_18 || "Symbols",
            description: t.instant_unique_block_19 || "Direct Market Access (DMA) offers thousands of simulated symbols with low spreads and commission fees.",
            watchVideoText: t.instant_unique_block_20 || "Watch video",
            youtubeId: "eWtn8s4WnZ8",
        },
    ];

    return (
        <section className="unique">
            <div className="container">
                <div className="unique__title">
                    <div className="title">
                        <p className="title__sub">{t.instant_unique_block_0 || "Why choose?"}</p>
                        {t.instant_unique_block_1 ? (
                            <div dangerouslySetInnerHTML={{ __html: t.instant_unique_block_1 }} />
                        ) : (
                            <h3>
                                Why we are <span>Unique</span>
                            </h3>
                        )}
                    </div>
                    <div className="desc">
                        <p>
                            {t.instant_unique_block_2 || "We are focused on developing a long-term relationship with our traders by providing them with the best environment to prosper and perform."}
                        </p>
                    </div>
                </div>

                <div className="unique__content">
                    <div className="container">
                        <div className="unique__frame">
                            <div className="unique__list ancordion__content">
                                {uniqueItems.map((item) => (
                                    <div className={`item${accordion.isOpen(item.id) ? " active" : ""}`} key={item.id}>
                                        <h4 {...accordion.getButtonProps(item.id)}>{item.title}</h4>
                                        <div className="desc" {...accordion.getContentProps(item.id)}>
                                            <p>{item.description}</p>
                                            <div className="link">
                                                <p className="lightbox-item" data-youtube-id={item.youtubeId}>
                                                    <a>{item.watchVideoText}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                ))}
                            </div>
                            <div className="unique__img none992">
                                <Image loading="lazy" src="/images/unique_img.png" width={1149} height={1012} alt="Why we are Unique" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
