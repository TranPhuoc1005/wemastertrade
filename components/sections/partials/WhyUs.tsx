import React from 'react'
import Image from 'next/image'
import { LangProps } from '../../../types/common'

export default function WhyUs({lang}: LangProps) {
    return (
        <section className="whyus">
            <div className="container">
                <div className="title">
                    <p className="title__sub">Why Us</p>
                    <h3><span>Why Use WMT Capital </span><br className="pc" />Instead of Your Own Money</h3>
                </div>
                <div className="whyus__content">
                    <div className="whyus__list">
                        <div className="whyus__item">
                            <p className="icon"><Image loading="lazy" src="/images/whyus_ic1.png" width="90" height="91" alt="Save" /></p>
                            <div className="cnt">
                                <h4>Save</h4>
                                <div className="desc">
                                    <p>If it takes at least 12 months to save $10,000 for a trading account, why not join WMT where we fund you instantly from $10,000 up to $200,000?</p>
                                </div>
                            </div>
                        </div>
                        <div className="whyus__item border__glassed">
                            <p className="icon"><Image loading="lazy" src="/images/whyus_ic2.png" width="90" height="91" alt="Capital" /></p>
                            <div className="cnt">
                                <h4>Capital</h4>
                                <div className="desc">
                                    <p>We remove this concern by allowing you to have a customization trading account size for a better returns. Thanks to our liquidity providers, we can leverage you with buying power from $1 million USD to $100 million USD.</p>
                                </div>
                            </div>
                        </div>
                        <div className="whyus__item">
                            <p className="icon"><Image loading="lazy" src="/images/whyus_ic3.png" width="90" height="91" alt="Risk of Loss" /></p>
                            <div className="cnt">
                                <h4>Risk of Loss</h4>
                                <div className="desc">
                                    <p>A lot of traders save a lot of money in a long period, trading with own fund can potentially lead to huge loss and un-recover. With WeMasterTrade, your potential losses are covered by us so you can have peace in mind while trading.</p>
                                </div>
                            </div>
                        </div>
                        <div className="whyus__item">
                            <p className="icon"><Image loading="lazy" src="/images/whyus_ic4.png" width="90" height="91" alt="Account Setup" /></p>
                            <div className="cnt">
                                <h4>Account Setup</h4>
                                <div className="desc">
                                    <p>We handle all the technology and account setup for you. All you need is to pay a set up fee, one click for online contract and then start trade right away.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p className="whyus__img"><Image loading="lazy" src="/images/whyus_imgn1.png" width="932" height="731" alt="Why Use WMT Capital Instead of Your Own Money" /></p>
                </div>
            </div>
        </section>
    )
}
