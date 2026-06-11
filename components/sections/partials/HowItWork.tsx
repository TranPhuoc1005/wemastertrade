import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

interface HowItWorkProps extends LangProps {
    dict?: Record<string, string>;
    isInstant?: boolean;
}

export default function HowItWork({lang, dict, isInstant}: HowItWorkProps) {
    const t = dict || {};
    const getTranslation = (num: number) => {
        const key = isInstant ? `instant_page_block_${num}` : `home_block_${num}`;
        return t[key];
    };

    return (
        <section className="hiw">
            <div className="container">
                <div className="hiw__content">
                    <div className="title">
                        <p className="title__sub">{getTranslation(0) || "How it work"}</p>
                        {getTranslation(1) ? (
                            <div dangerouslySetInnerHTML={{ __html: getTranslation(1) }} />
                        ) : isInstant ? (
                            <h3>How <span>Instant Funding </span>Works</h3>
                        ) : (
                            <h3>How <span>the Challenge <br />Package </span>Works</h3>
                        )}
                    </div>
                    <div className="desc">
                        <p>
                            {getTranslation(2) || (isInstant 
                                ? "WeMasterTrade is designed to support people who do not have big money to create a large day trading account, lack trading experience, and have limited trading tools and resources."
                                : "WeMasterTrade introduces the Challenge Package, specifically designed for traders seeking a structured and beginner-friendly way to enter the funded trading world. Here's how it works:"
                            )}
                        </p>
                        <div className="btn__watch">
                            <p className="lightbox-item" data-youtube-id="VF6Oqy7i0PA"><a><span>{getTranslation(3) || "Watch video"}</span></a></p>
                        </div>
                    </div>
                </div>
                <div className="hiw__step">
                    <div className="item">
                        <p className="icon"><Image loading="lazy" src="/images/hiw_step_dc.png" width={168} height={194} alt="Step" /></p>
                        <div className="title">
                            <p className="title__sub">{getTranslation(4) || "Step 1"}</p>
                        </div>
                        {getTranslation(5) ? (
                            <div className="cnt" dangerouslySetInnerHTML={{ __html: getTranslation(5) }} />
                        ) : isInstant ? (
                            <div className="cnt">
                                <h4>Fill the discovery form</h4>
                                <ul>
                                    <li>Check the Instant package and choose your appropriate capital package.</li>
                                    <li>Fill the form with correct info.</li>
                                    <li>Pay one-time fee and get your account details immediately.</li>
                                </ul>
                            </div>
                        ) : (
                            <div className="cnt">
                                <h4>Trading Skill Assessment</h4>
                                <ul>
                                    <li>You need to achieve a 8% performance-based rewards during this challenge phase while maintaining proper risk management.</li>
                                    <li>We will evaluate your trading performance and ability to protect your capital in a real market environment.</li>
                                    <li>If you pass, you'll move on to the next stage.</li>
                                </ul>
                            </div>
                        )}
                    </div>
                    <div className="item">
                        <p className="icon"><Image loading="lazy" src="/images/hiw_step_dc.png" width={168} height={194} alt="Step" /></p>
                        <div className="title">
                            <p className="title__sub">{getTranslation(6) || "Step 2"}</p>
                        </div>
                        {getTranslation(7) ? (
                            <div className="cnt" dangerouslySetInnerHTML={{ __html: getTranslation(7) }} />
                        ) : isInstant ? (
                            <div className="cnt">
                                <h4>Select the packages</h4>
                                <ul>
                                    <li>We offer 3 packages: 51010, 510Zero, and Customize.</li>
                                    <li>Select account size from $5,000 to $400,000.</li>
                                    <li>Read trading rules.</li>
                                </ul>
                            </div>
                        ) : (
                            <div className="cnt">
                                <h4>Stability Assessment</h4>
                                <ul>
                                    <li>In this phase, you need to achieve a 6% performance-based rewards.</li>
                                    <li>This step evaluates your ability to sustain performance-based rewards and manage risk over the long term.</li>
                                    <li>You’ll start earning performance-based rewards from your trades during this phase, even before receiving full evaluation.</li>
                                </ul>
                            </div>
                        )}
                    </div>
                    <div className="item">
                        <p className="icon"><Image loading="lazy" src="/images/hiw_step_dc.png" width={168} height={194} alt="Step" /></p>
                        <div className="title">
                            <p className="title__sub">{getTranslation(8) || "Step 3"}</p>
                        </div>
                        {getTranslation(9) ? (
                            <div className="cnt" dangerouslySetInnerHTML={{ __html: getTranslation(9) }} />
                        ) : isInstant ? (
                            <div className="cnt">
                                <h4>Trading and Withdrawal</h4>
                                <ul>
                                    <li>We copy your trades and share profits with you.</li>
                                    <li>No minimum trading days, profit target to withdraw is 10%.</li>
                                    <li>Withdraw your profit daily, 24/7.</li>
                                </ul>
                            </div>
                        ) : (
                            <div className="cnt">
                                <h4>Evaluation Stage</h4>
                                <ul>
                                    <li>Once you’ve successfully completed both evaluation stages, you will receive trading capital from WeMasterTrade.</li>
                                    <li>The company will copy your trades directly.</li>
                                    <li>You will earn up to 90% of the performance-based rewards from the trades you make.</li>
                                </ul>
                            </div>
                        )}
                    </div>
                </div>
            </div>
        </section>
    )
}
