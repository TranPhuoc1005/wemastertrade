"use client";

import Image from "next/image";
import React from "react";
import { useAccordion } from "../../../hooks/useAccordion";

const uniqueItems = [
    {
        id: "unique1",
        title: "Instant Funding",
        description: "No more evaluation processes or challenges, you only need to pay a small fee and then get instant access to our capital.",
        youtubeId: "o9pXnQ210KI",
    },
    {
        id: "unique2",
        title: "Signal Followers",
        description: "Utilize the WMT fund account to follow and replicate trades from top traders, aiming to enhance your trading strategy.",
        youtubeId: "Yb5SnhJ3OnU",
    },
    {
        id: "unique3",
        title: "Signal Providers",
        description: "Become a signal provider through the WMT fund account and share your trading strategies with others.",
        youtubeId: "baNaZ4pQBfw",
    },
    {
        id: "unique4",
        title: "Trial",
        description:
            "Our Trial is intended to help prospective customers understand how it operates and evaluate their trading abilities to determine whether they have what it takes to become expert traders at WeMasterTrade.",
        youtubeId: "G_Nzfp8H6fE",
    },
    {
        id: "unique5",
        title: "Academy",
        description:
            "Our courses are designed to give the fundamental knowledge and technical skills required to comprehend the financial markets and the traded instruments to all traders who are interested in gaining more experience and mastering their trades.",
        youtubeId: "n11cIqVws88",
    },
    {
        id: "unique6",
        title: "Symbols",
        description: "Direct Market Access (DMA) offers thousands of symbols with low spreads and commission fees.",
        youtubeId: "eWtn8s4WnZ8",
    },
];

export default function Unique() {
    const accordion = useAccordion({ defaultOpenIds: ["unique1"] });

    return (
        <section className="unique">
            <div className="container">
                <div className="unique__title">
                    <div className="title">
                        <p className="title__sub">Why choose?</p>
                        <h3>
                            Why we are <span>Unique</span>
                        </h3>
                    </div>
                    <div className="desc">
                        <p>
                            We are focused on developing a long-term relationship with our traders by providing them with the best environment to
                            prosper and perform.
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
                                                    <a>Watch video</a>
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
