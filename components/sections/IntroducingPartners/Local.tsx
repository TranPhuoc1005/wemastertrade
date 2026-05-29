import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Local({lang}: LangProps) {
    return (
        <section className="local">
            <div className="container">
                <div className="local__content">
                    <div className="local__main">
                        <div className="local__name">
                            <div className="title">
                                <p className="title__sub">Commission Structure</p>
                                <h3>How You Earn <br /><span>as an Introducing Partners</span></h3>
                                <p className="txt">Your monthly performance determines your commission for the next payout period</p>
                            </div>
                        </div>
                        <p className="local__main--img"><Image loading="lazy" src="/images/local_name_dc.png" width="1562" height="1263" alt="How You Earn as an Introducing Partners" /></p>
                    </div>
                    <div className="local__method">
                        <div className="item">
                            <p className="item__method">Silver</p>
                            <div className="desc">
                                <p style={{marginBottom: "8px"}}>Total Purchase from 0 USD to 5,000 USD</p>
                                <ol>
                                    <li>First Sale Commission Rate: 25%</li>
                                    <li>Up Sale Commission Rate: 5%</li>
                                </ol>
                            </div>
                        </div>
                        <div className="item">
                            <p className="item__method">Gold</p>
                            <div className="desc">
                                <p style={{marginBottom: "8px"}}>Total Purchase from 5,000 USD to 15,000 USD</p>
                                <ol>
                                    <li>First Sale Commission Rate: 25%</li>
                                    <li>Up Sale Commission Rate: 7.5%</li>
                                </ol>
                            </div>
                        </div>
                        <div className="item">
                            <p className="item__method">Platinum</p>
                            <div className="desc">
                                <p style={{marginBottom: "8px"}}>Total Purchase from 15,000 USD to 10,000,000 USD</p>
                                <ol>
                                    <li>First Sale Commission Rate: 25%</li>
                                    <li>Up Sale Commission Rate: 10%</li>
                                </ol>
                            </div>
                        </div>
                        <div className="payment__content" style={{width:"100%"}}>
                            <div className="cnt">
                                <div className="note">
                                    <ul>
                                        <li>In addition to direct referrals, eligible partners may earn additional commission through extended referral tiers under the program rules</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
