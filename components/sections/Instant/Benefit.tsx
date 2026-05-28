import React from 'react'
import Image from 'next/image'
import { LangProps } from '../../../types/common'

export default function Benefit({lang}: LangProps) {
    return (
        <section className="benefit">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Benefit</p>
                    <h3><span>The benefit of our project</span><br />WeMasterTrade</h3>
                </div>
                <ul className="benefit__list">
                    <li>
                        <span className="ic"><Image loading="lazy" src="/images/benefit_ic1.png" width={71} height={70} alt="Zero phase" /></span>
                        <span>Zero phase</span>
                    </li>
                    <li>
                        <span className="ic"><Image loading="lazy" src="/images/benefit_ic1.png" width={71} height={70} alt="We all share profits together" /></span>
                        <span>We all share profits together</span>
                    </li>
                    <li>
                        <span className="ic"><Image loading="lazy" src="/images/benefit_ic1.png" width={71} height={70} alt="No challenges" /></span>
                        <span>No challenges</span>
                    </li>
                </ul>
                <div className="benefit__content">
                    <div className="benefit__boxs">
                        <div className="item">
                            <div className="item__dc"><Image loading="lazy" src="/images/benefit_dc1.png" width={88} height={6} alt="For Newcomers" />
                            </div>
                            <div className="border__glassed">
                                <h4>For Newcomers</h4>
                                <div className="cnt">
                                    <p>This is an angel venture model, you are given virtual funds starting from $25,000 USD up to $1,000,000 USD. Buying Power up to $ 100 million USD. Your trading activity on this virtual account is replicated in real-time by our exclusive algorithms to our live firm trading account, generating actual cash flow. That\'s why we cover your losses and share profits with you.</p>
                                </div>
                            </div>
                        </div>
                        <div className="item">
                            <div className="item__dc"><Image loading="lazy" src="/images/benefit_dc2.png" width={182} height={6} alt="For Evaluating traders" />
                            </div>
                            <div className="border__glassed">
                                <h4>For Evaluating traders</h4>
                                <div className="cnt">
                                    <p>We believe we provide the best evaluation environment because we don\'t limit trading styles.</p>
                                    <ul>
                                        <li>Zero Phase - No Challenges.</li>
                                        <li>Allows news trading and unlimited <br />contract size.</li>
                                        <li>We allow all trading styles: EA trading, copy trading, scalp trading and day trading.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p className="benefit__img lightbox-item" data-video="/video/video_instant.mp4">
                        <Image loading="lazy" src="/images/benefit_img.png" width={635} height={740} alt="The benefit of our project WeMasterTrade" />
                    </p>
                </div>
            </div>
        </section>
    )
}
