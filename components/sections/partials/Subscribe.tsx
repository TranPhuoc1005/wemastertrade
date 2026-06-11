import React from "react";
import { LangProps } from "../../../types/common";
import Image from "next/image";

interface SubscribeProps extends LangProps {
    dict?: Record<string, string>;
}

export default function Subscribe({ lang, dict }: SubscribeProps) {
    const t = dict || {};
    return (
        <section style={{ paddingTop: 60 }}>
            <div className="container">
                <div className="subscribe__content">
                    <div className="cnt">
                        {t.subscribe_block_0 ? (
                            <div dangerouslySetInnerHTML={{ __html: t.subscribe_block_0 }} />
                        ) : (
                            <h3>
                                Subscribe to <span>Stay Ahead in Trading!</span>
                            </h3>
                        )}
                        <div className="desc">
                            <p>
                                {t.subscribe_block_1 ||
                                    "Don't miss out on real stories, proven strategies, and big payouts from top traders."}
                            </p>
                        </div>
                        <div className="btn btn__subscribe">
                            <p>
                                <a href="https://www.youtube.com/@wemastertrade_official/" target="_blank">
                                    <span>{t.subscribe_block_2 || "Subscribe Channel"}</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <p className="subscribe__img">
                        <Image
                            loading="lazy"
                            src="/images/subscribe_WMTT.png"
                            width={906}
                            height={711}
                            alt={
                                t.subscribe_block_0
                                    ? t.subscribe_block_0.replace(/<[^>]*>/g, "")
                                    : "Subscribe to Stay Ahead in Trading!"
                            }
                        />
                    </p>
                </div>
            </div>
        </section>
    );
}
