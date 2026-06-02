import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Hero({lang}: LangProps) {
    return (
        <div className="platform__page mainvisual mainvisual__custombg">
            <div className="mainvisual__img"><Image loading='lazy' src="/images/mainvs_img_platform.png" width="1469" height="550" alt="Platforms" />
            </div>
            <div className="container">
                <div className="mainvisual__content center">
                    <h2><span>Platforms</span></h2>
                    <div className="mainvisual__desc">
                        <p>No matter if you\'re a beginner or an experienced trader, our<br />platforms are designed to make trading simple for you.</p>
                    </div>
                    <div className="btn not_icon center">
                        <p><a href="#content"><span>Get Started</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    )
}
