import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Hero({lang}: LangProps) {
    return (
        <div className="certification__page mainvisual__custombg mainvisual">
            <div className="mainvisual__img"><Image src="/images/mainvs_img_certification.png" width="1861" height="1163" alt="Awards & Recognition" />
            </div>
            <div className="container">
                <div className="mainvisual__content">
                    <h2>Awards &<br /><span>Recognition</span></h2>
                    <div className="mainvisual__desc">
                        <p>Our endless efforts in improving the trading experience has resulted in recognition from both customers and the industry. Trade with an award-winning platform today.</p>
                    </div>
                </div>
            </div>
        </div>
    )
}
