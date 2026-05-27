"use client";

import React from "react";
import { LangProps } from "../../../types/common";
import Link from "next/link";
import { useTabs } from "../../../hooks/useTabs";

export default function Features({lang}: LangProps) {
    const featureTabs = useTabs({
        defaultTab: "features1",
        group: "2",
    });

    return (
        <section className="features">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">The Features</p>
                    <h3>Why choose <span>WeMasterTrade</span></h3>
                </div>
                <p className="txt center">Explore the features that make WeMasterTrade stand out.</p>
                <div className="features__content">
                    <div className="features__pc pc">
                        <table>
                            <thead>
                                <tr>
                                    <th><p>Criteria</p></th>
                                    <th><p className="clr">Challenge Package</p></th>
                                    <th><p className="clr">Instant Package</p></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                </tr>
                                <tr>
                                    <td>Target Audience</td>
                                    <td>New clients entering proprietary trading environments or derivative markets</td>
                                    <td>Experienced traders looking for a quick solution</td>
                                </tr>
                                <tr>
                                    <td>Process</td>
                                    <td>Simple 2-phase process, easy for customers to get familiar</td>
                                    <td>Immediate evaluating, no need for challenge phase</td>
                                </tr>
                                <tr>
                                    <td>Account Type</td>
                                    <td>Accounts for all asset types</td>
                                    <td>Focused on one specific asset type to optimize profit</td>
                                </tr>
                                <tr>
                                    <td>Trading Flexibility</td>
                                    <td>No limit on news, swing, or scalp trading, no contract size limits</td>
                                    <td>No limit on news, swing, or scalp trading, no contract size limits</td>
                                </tr>
                                <tr>
                                    <td>Performance-based Rewards Sharing</td>
                                    <td>Reward sharing from the challenge phase and 90% rate after evaluating</td>
                                    <td>Reward sharing up to 90% as soon as the account meets conditions</td>
                                </tr>
                                <tr>
                                    <td>Retry Option</td>
                                    <td>Reset discount program for retake the challenge phase at a lower cost</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <td>Best Option For</td>
                                    <td>Beginners, to get familiar and develop trading skills at the lowest cost</td>
                                    <td>Experienced traders seeking flexibility and performance-based rewards</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div className="features__sp sp">
                        <div className="features__sp--tabs" role="tablist">
                            <p {...featureTabs.getTabProps("features1")}>Challenge</p>
                            <p {...featureTabs.getTabProps("features2")}>Instant</p>
                        </div>
                        <div className="features__sp--contents">
                            <div {...featureTabs.getTabPanelProps("features1")}>
                                <div className="row">
                                    <dl>
                                        <dt>Target Audience</dt>
                                        <dd>Customers new to Prop Firms or Derivatives Markets</dd>
                                    </dl>
                                    <dl>
                                        <dt>Fee Structure</dt>
                                        <dd>Low fees, perfect for beginners and suitable for all levels</dd>
                                    </dl>
                                    <dl>
                                        <dt>Process</dt>
                                        <dd>Simple 2-phase process, easy for customers to get familiar</dd>
                                    </dl>
                                    <dl>
                                        <dt>Account Type</dt>
                                        <dd>Accounts for all asset types</dd>
                                    </dl>
                                    <dl>
                                        <dt>Trading Flexibility</dt>
                                        <dd>No limit on news, swing, or scalp trading, no contract size limits</dd>
                                    </dl>
                                    <dl>
                                        <dt>Performance-based Rewards Sharing</dt>
                                        <dd>Reward sharing from the challenge phase and 90% rate after funding</dd>
                                    </dl>
                                    <dl>
                                        <dt>Retry Option</dt>
                                        <dd>Reset discount program for retake the challenge phase at a lower cost</dd>
                                    </dl>
                                    <dl>
                                        <dt>Best Option For</dt>
                                        <dd>Beginners, to get familiar and develop trading skills at the lowest cost</dd>
                                    </dl>
                                </div>
                            </div>
                            <div {...featureTabs.getTabPanelProps("features2")}>
                                <div className="row">
                                    <dl>
                                        <dt>Target Audience</dt>
                                        <dd>Experienced traders looking for a quick solution</dd>
                                    </dl>
                                    <dl>
                                        <dt>Fee Structure</dt>
                                        <dd>Reasonable fees, suitable for professional traders</dd>
                                    </dl>
                                    <dl>
                                        <dt>Process</dt><dd>Immediate funding, no need for challenge phase</dd>
                                    </dl>
                                    <dl>
                                        <dt>Account Type</dt>
                                        <dd>Focused on one specific asset type to optimize performance-based rewards</dd>
                                    </dl>
                                    <dl>
                                        <dt>Trading Flexibility</dt>
                                        <dd>No limit on news, swing, or scalp trading, no contract size limits</dd>
                                    </dl>
                                    <dl>
                                        <dt>Performance-based Rewards Sharing</dt>
                                        <dd>Reward sharing up to 90% as soon as the account meets conditions</dd>
                                    </dl>
                                    <dl>
                                        <dt>Retry Option</dt>
                                        <dd>N/A</dd>
                                    </dl>
                                    <dl>
                                        <dt>Best Option For</dt>
                                        <dd>Experienced traders seeking flexibility and performance-based rewards</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="btn center">
                    <p><Link href={`/${lang}/instant/`}><span>Explore Instant Package</span></Link></p>
                </div>
            </div>
        </section>
    )
}
