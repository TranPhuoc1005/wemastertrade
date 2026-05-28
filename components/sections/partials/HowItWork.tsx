import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function HowItWork({lang}: LangProps) {
    return (
        <section className="hiw">
            <div className="container">
                <div className="hiw__content">
                    <div className="title">
                        <p className="title__sub">How it work</p>
                        <h3>How <span>the Challenge <br />Package </span>Works</h3>
                    </div>
                    <div className="desc">
                        <p>WeMasterTrade introduces the Challenge Package, specifically designed for traders seeking a structured and beginner-friendly way to enter the funded trading world. Here\'s how it works:</p>
                        <div className="btn__watch">
                            <p className="lightbox-item" data-youtube-id="VF6Oqy7i0PA"><a><span>Watch video</span></a></p>
                        </div>
                    </div>
                </div>
                <div className="hiw__step">
                    <div className="item">
                        <p className="icon"><Image loading="lazy" src="/images/hiw_step_dc.png" width={168} height={194} alt="Step" /></p>
                        <div className="title">
                            <p className="title__sub">Step 1</p>
                        </div>
                        <div className="cnt">
                            <h4>Trading Skill Assessment</h4>
                            <ul>
                                <li>You need to achieve a 8% performance-based rewards during this challenge phase while maintaining proper risk management.</li>
                                <li>We will evaluate your trading performance and ability to protect your capital in a real market environment.</li>
                                <li>If you pass, you'll move on to the next stage.</li>
                            </ul>
                        </div>
                    </div>
                    <div className="item">
                        <p className="icon"><Image loading="lazy" src="/images/hiw_step_dc.png" width={168} height={194} alt="Step" /></p>
                        <div className="title">
                            <p className="title__sub">Step 2</p>
                        </div>
                        <div className="cnt">
                            <h4>Stability Assessment</h4>
                            <ul>
                                <li>In this phase, you need to achieve a 6% performance-based rewards.</li>
                                <li>This step evaluates your ability to sustain performance-based rewards and manage risk over the long term.</li>
                                <li>You’ll start earning performance-based rewards from your trades during this phase, even before receiving full evaluation.</li>
                            </ul>
                        </div>
                    </div>
                    <div className="item">
                        <p className="icon"><Image loading="lazy" src="/images/hiw_step_dc.png" width={168} height={194} alt="Step" /></p>
                        <div className="title">
                            <p className="title__sub">Step 3</p>
                        </div>
                        <div className="cnt">
                            <h4>Evaluation Stage</h4>
                            <ul>
                                <li>Once you’ve successfully completed both evaluation stages, you will receive trading capital from WeMasterTrade.</li>
                                <li>The company will copy your trades directly.</li>
                                <li>You will earn up to 90% of the performance-based rewards from the trades you make.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
