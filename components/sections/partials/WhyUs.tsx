import React from 'react'
import Image from 'next/image'
import { LangProps } from '../../../types/common'

interface WhyUsProps extends LangProps {
    dict?: Record<string, string>;
}

export default function WhyUs({lang, dict}: WhyUsProps) {
    const t = dict || {};
    return (
        <section className="whyus">
            <div className="container">
                <div className="title">
                    <p className="title__sub">{t.whyus_block_0 || "Why Us"}</p>
                    {t.whyus_block_1 ? (
                        <div dangerouslySetInnerHTML={{ __html: t.whyus_block_1 }} />
                    ) : (
                        <h3><span>Why Use WMT Capital </span><br className="pc" />Instead of Your Own Money</h3>
                    )}
                </div>
                <div className="whyus__content">
                    <div className="whyus__list">
                        <div className="whyus__item">
                            <p className="icon"><Image loading="lazy" src="/images/whyus_ic1.png" width="90" height="91" alt={t.whyus_block_2 || "Save"} /></p>
                            <div className="cnt">
                                <h4>{t.whyus_block_2 || "Save"}</h4>
                                <div className="desc">
                                    <p>{t.whyus_block_3 || "If it takes at least 12 months to save $10,000 for a trading account, why not join WMT where we fund you instantly from $10,000 up to $200,000?"}</p>
                                </div>
                            </div>
                        </div>
                        <div className="whyus__item border__glassed">
                            <p className="icon"><Image loading="lazy" src="/images/whyus_ic2.png" width="90" height="91" alt={t.whyus_block_4 || "Capital"} /></p>
                            <div className="cnt">
                                <h4>{t.whyus_block_4 || "Capital"}</h4>
                                <div className="desc">
                                    <p>{t.whyus_block_5 || "We remove this concern by allowing you to have a customization trading account size for a better returns. Thanks to our liquidity providers, we can leverage you with buying power from $1 million USD to $100 million USD."}</p>
                                </div>
                            </div>
                        </div>
                        <div className="whyus__item">
                            <p className="icon"><Image loading="lazy" src="/images/whyus_ic3.png" width="90" height="91" alt={t.whyus_block_6 || "Risk of Loss"} /></p>
                            <div className="cnt">
                                <h4>{t.whyus_block_6 || "Risk of Loss"}</h4>
                                <div className="desc">
                                    <p>{t.whyus_block_7 || "A lot of traders save a lot of money in a long period, trading with own fund can potentially lead to huge loss and un-recover. With WeMasterTrade, your potential losses are covered by us so you can have peace in mind while trading."}</p>
                                </div>
                            </div>
                        </div>
                        <div className="whyus__item">
                            <p className="icon"><Image loading="lazy" src="/images/whyus_ic4.png" width="90" height="91" alt={t.whyus_block_8 || "Account Setup"} /></p>
                            <div className="cnt">
                                <h4>{t.whyus_block_8 || "Account Setup"}</h4>
                                <div className="desc">
                                    <p>{t.whyus_block_9 || "We handle all the technology and account setup for you. All you need is to pay a set up fee, one click for online contract and then start trade right away."}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p className="whyus__img"><Image loading="lazy" src="/images/whyus_imgn1.png" width="932" height="731" alt={t.whyus_block_1 ? t.whyus_block_1.replace(/<[^>]*>/g, '') : "Why Use WMT Capital Instead of Your Own Money"} /></p>
                </div>
            </div>
        </section>
    )
}
