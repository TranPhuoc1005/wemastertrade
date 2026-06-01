import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Hero({lang}: LangProps) {
    return (
        <div className="capital_profit__page mainvisual mainvisual__custombg">
            <div className="mainvisual__img"><Image loading="lazy" src="/images/mainvs_img_capital_profit.png" width="1471" height="1622" alt="Capital and Profit" /></div>
            <div className="container">
                <div className="mainvisual__content center">
                    <h2><span>Rewards & Profit Sharing</span></h2>
                    <div className="mainvisual__desc">
                        <p>Clients are provided with a simulated trading account operating within a virtual trading environment. All trading activities are conducted for evaluation purposes only.</p>
                    </div>
                    <div className="btn not_icon center">
                        <p><a href="#cap-main"><span>Get Started</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    )
}
