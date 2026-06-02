import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function HeroSimulated({lang}: LangProps) {
    return (
        <div className="overview__page mainvisual mainvisual__custombg">
            <div className="mainvisual__img"><Image loading="lazy" src="/images/mainvs_img_overview.png" width="1469" height="656" alt="Platforms" />
            </div>
            <div className="container">
                <div className="mainvisual__content center">
                    <h2><span>Simulated Financial<br />Instruments List</span></h2>
                    <div className="btn not_icon center">
                        <p><a href="https://my.wemastertrade.com/" target="_blank"><span>Trade Now</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    )
}
