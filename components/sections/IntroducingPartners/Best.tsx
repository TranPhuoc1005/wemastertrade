import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Best({lang}: LangProps) {
    return (
        <section className="best">
            <div className="best__bg"><Image loading="lazy" src="/images/best_bg.png" width="1920" height="987" alt="Why is this your best job?" />
            </div>
            <div className="container">
                <div className="best__frame">
                    <div className="title center">
                        <p className="title__sub">Why Us</p>
                        <h3>Why is this your <br className="sp" /><span>best job?</span></h3>
                        <p className="txt">Earn lifetime income with WeMasterTrade – enjoy up to 25% commission and 3-level<br />passive earnings from your growing partner network.</p>
                    </div>
                    <div className="best__content">
                        <div className="item">
                            <h4>As an Introducing <br className="pc" />Partner</h4>
                            <div className="cnt">
                                <p>At WeMasterTrade, when you introduce someone to our platforms through your unique referral link—be it from your website, email, or social media—and your referrals make a purchase, you\'ll secure lifetime credit for those customers. To further boost your sales and conversion rates, we encourage you to request and share a custom Introducing Partners coupon through our help desk. This not only tracks customers directly to you but also enhances engagement levels. Moreover, if an existing customer utilizes your coupon code, you\'ll receive credit for that transaction as well as any subsequent account resets.<br /><br />As an Introducing Partners, you\'ll benefit from:</p>
                                <ul>
                                    <li>Commission Rate: Earn a generous 25% commission on your referrals.</li>
                                    <li>Recurring Commissions: Enjoy ongoing commissions for the lifetime of each customer you refer.</li>
                                    <li>We will pay 10% of the traders\' profits to the Introducing Partners.</li>
                                </ul>
                            </div>
                        </div>
                        <div className="item">
                            <h4>Introducing Partner Benefits</h4>
                            <div className="cnt">
                                <p>Our excellent conversion rates are among the best in the industry, as our plans are cheaper, rules are easier, and payouts are higher, so the people you refer are more likely to buy. We also provide statistics and conversion tracking tools in your back office.</p>
                            </div>
                        </div>
                        <div className="item">
                            <h4>Multi-Tier Referral Rewards</h4>
                            <div className="cnt">
                                <p>Our partner program includes multi-tier referral rewards. In addition to direct referral commissions, eligible partners may receive additional commission from referral activity across supporting tiers, in accordance with the program rules.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
