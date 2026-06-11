"use client";

import React from "react";
import { LangProps } from "../../../types/common";
import Link from "next/link";
import { useTabs } from "../../../hooks/useTabs";

interface FeaturesProps extends LangProps {
    dict?: Record<string, string>;
}

export default function Features({lang, dict}: FeaturesProps) {
    const t = dict || {};
    const featureTabs = useTabs({
        defaultTab: "features1",
        group: "2",
    });

    return (
        <section className="features">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">{t.features_block_0 || "The Features"}</p>
                    {t.features_block_1 ? (
                        <div dangerouslySetInnerHTML={{ __html: t.features_block_1 }} />
                    ) : (
                        <h3>Why choose <span>WeMasterTrade</span></h3>
                    )}
                </div>
                <p className="txt center">{t.features_block_3 || "Explore the features that make WeMasterTrade stand out."}</p>
                <div className="features__content">
                    <div className="features__pc pc">
                        <table>
                            <thead>
                                {t.features_block_4 ? (
                                    <tr dangerouslySetInnerHTML={{ __html: t.features_block_4 }} />
                                ) : (
                                    <tr>
                                        <th><p>Criteria</p></th>
                                        <th><p className="clr">Challenge Package</p></th>
                                        <th><p className="clr">Instant Package</p></th>
                                    </tr>
                                )}
                            </thead>
                            <tbody>
                                {t.features_block_5 ? (
                                    <tr dangerouslySetInnerHTML={{ __html: t.features_block_5 }} />
                                ) : (
                                    <tr>
                                        <td>Target Audience</td>
                                        <td>New clients entering proprietary trading environments or derivative markets</td>
                                        <td>Experienced traders looking for a quick solution</td>
                                    </tr>
                                )}
                                {t.features_block_6 ? (
                                    <tr dangerouslySetInnerHTML={{ __html: t.features_block_6 }} />
                                ) : (
                                    <tr>
                                        <td>Process</td>
                                        <td>Simple 2-phase process, easy for customers to get familiar</td>
                                        <td>Immediate evaluating, no need for challenge phase</td>
                                    </tr>
                                )}
                                {t.features_block_7 ? (
                                    <tr dangerouslySetInnerHTML={{ __html: t.features_block_7 }} />
                                ) : (
                                    <tr>
                                        <td>Account Type</td>
                                        <td>Accounts for all asset types</td>
                                        <td>Focused on one specific asset type to optimize profit</td>
                                    </tr>
                                )}
                                {t.features_block_8 ? (
                                    <tr dangerouslySetInnerHTML={{ __html: t.features_block_8 }} />
                                ) : (
                                    <tr>
                                        <td>Trading Flexibility</td>
                                        <td>No limit on news, swing, or scalp trading, no contract size limits</td>
                                        <td>No limit on news, swing, or scalp trading, no contract size limits</td>
                                    </tr>
                                )}
                                {t.features_block_9 ? (
                                    <tr dangerouslySetInnerHTML={{ __html: t.features_block_9 }} />
                                ) : (
                                    <tr>
                                        <td>Performance-based Rewards Sharing</td>
                                        <td>Reward sharing from the challenge phase and 90% rate after evaluating</td>
                                        <td>Reward sharing up to 90% as soon as the account meets conditions</td>
                                    </tr>
                                )}
                                {t.features_block_10 ? (
                                    <tr dangerouslySetInnerHTML={{ __html: t.features_block_10 }} />
                                ) : (
                                    <tr>
                                        <td>Retry Option</td>
                                        <td>Reset discount program for retake the challenge phase at a lower cost</td>
                                        <td>N/A</td>
                                    </tr>
                                )}
                                {t.features_block_11 ? (
                                    <tr dangerouslySetInnerHTML={{ __html: t.features_block_11 }} />
                                ) : (
                                    <tr>
                                        <td>Best Option For</td>
                                        <td>Beginners, to get familiar and develop trading skills at the lowest cost</td>
                                        <td>Experienced traders seeking flexibility and performance-based rewards</td>
                                    </tr>
                                )}
                            </tbody>
                        </table>
                    </div>
                    <div className="features__sp sp">
                        <div className="features__sp--tabs" role="tablist">
                            <p {...featureTabs.getTabProps("features1")}>{t.features_block_13 || "Challenge"}</p>
                            <p {...featureTabs.getTabProps("features2")}>{t.features_block_14 || "Instant"}</p>
                        </div>
                        <div className="features__sp--contents">
                            <div {...featureTabs.getTabPanelProps("features1")}>
                                <div className="row">
                                    {t.features_block_15 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_15 }} />
                                    ) : (
                                        <dl>
                                            <dt>Target Audience</dt>
                                            <dd>Customers new to Prop Firms or Derivatives Markets</dd>
                                        </dl>
                                    )}
                                    {t.features_block_16 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_16 }} />
                                    ) : (
                                        <dl>
                                            <dt>Fee Structure</dt>
                                            <dd>Low fees, perfect for beginners and suitable for all levels</dd>
                                        </dl>
                                    )}
                                    {t.features_block_17 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_17 }} />
                                    ) : (
                                        <dl>
                                            <dt>Process</dt>
                                            <dd>Simple 2-phase process, easy for customers to get familiar</dd>
                                        </dl>
                                    )}
                                    {t.features_block_18 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_18 }} />
                                    ) : (
                                        <dl>
                                            <dt>Account Type</dt>
                                            <dd>Accounts for all asset types</dd>
                                        </dl>
                                    )}
                                    {t.features_block_19 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_19 }} />
                                    ) : (
                                        <dl>
                                            <dt>Trading Flexibility</dt>
                                            <dd>No limit on news, swing, or scalp trading, no contract size limits</dd>
                                        </dl>
                                    )}
                                    {t.features_block_20 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_20 }} />
                                    ) : (
                                        <dl>
                                            <dt>Performance-based Rewards Sharing</dt>
                                            <dd>Reward sharing from the challenge phase and 90% rate after funding</dd>
                                        </dl>
                                    )}
                                    {t.features_block_21 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_21 }} />
                                    ) : (
                                        <dl>
                                            <dt>Retry Option</dt>
                                            <dd>Reset discount program for retake the challenge phase at a lower cost</dd>
                                        </dl>
                                    )}
                                    {t.features_block_22 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_22 }} />
                                    ) : (
                                        <dl>
                                            <dt>Best Option For</dt>
                                            <dd>Beginners, to get familiar and develop trading skills at the lowest cost</dd>
                                        </dl>
                                    )}
                                </div>
                            </div>
                            <div {...featureTabs.getTabPanelProps("features2")}>
                                <div className="row">
                                    {t.features_block_23 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_23 }} />
                                    ) : (
                                        <dl>
                                            <dt>Target Audience</dt>
                                            <dd>Experienced traders looking for a quick solution</dd>
                                        </dl>
                                    )}
                                    {t.features_block_24 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_24 }} />
                                    ) : (
                                        <dl>
                                            <dt>Fee Structure</dt>
                                            <dd>Reasonable fees, suitable for professional traders</dd>
                                        </dl>
                                    )}
                                    {t.features_block_25 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_25 }} />
                                    ) : (
                                        <dl>
                                            <dt>Process</dt><dd>Immediate funding, no need for challenge phase</dd>
                                        </dl>
                                    )}
                                    {t.features_block_26 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_26 }} />
                                    ) : (
                                        <dl>
                                            <dt>Account Type</dt>
                                            <dd>Focused on one specific asset type to optimize performance-based rewards</dd>
                                        </dl>
                                    )}
                                    {t.features_block_27 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_27 }} />
                                    ) : (
                                        <dl>
                                            <dt>Trading Flexibility</dt>
                                            <dd>No limit on news, swing, or scalp trading, no contract size limits</dd>
                                        </dl>
                                    )}
                                    {t.features_block_28 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_28 }} />
                                    ) : (
                                        <dl>
                                            <dt>Performance-based Rewards Sharing</dt>
                                            <dd>Reward sharing up to 90% as soon as the account meets conditions</dd>
                                        </dl>
                                    )}
                                    {t.features_block_29 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_29 }} />
                                    ) : (
                                        <dl>
                                            <dt>Retry Option</dt>
                                            <dd>N/A</dd>
                                        </dl>
                                    )}
                                    {t.features_block_30 ? (
                                        <dl dangerouslySetInnerHTML={{ __html: t.features_block_30 }} />
                                    ) : (
                                        <dl>
                                            <dt>Best Option For</dt>
                                            <dd>Experienced traders seeking flexibility and performance-based rewards</dd>
                                        </dl>
                                    )}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="btn center">
                    <p><Link href={`/${lang}/instant/`}><span>{t.features_block_31 || "Explore Instant Package"}</span></Link></p>
                </div>
            </div>
        </section>
    )
}
