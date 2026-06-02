import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Hero({lang}: LangProps) {
    return (
        <div className="scaleUpPlan__page mainvisual mainvisual__custombg reverse">
            <div className="mainvisual__img"><Image src="/images/mainvs_img_payout.png" width="1612" height="1123" alt="Contact Us" />
            </div>
            <div className="container">
                <div className="mainvisual__content">
                    <h2><span>Scale Up Plan</span></h2>
                    <div className="mainvisual__desc">
                        <p>Sets out a strategy for securing the benefits of greater openness for our customers.</p>
                    </div>
                    <div className="btn not_icon">
                        <p><a href="#content"><span>Get Started</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    )
}
