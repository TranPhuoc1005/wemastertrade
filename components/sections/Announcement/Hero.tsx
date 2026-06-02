import React from 'react'
import { LangProps } from '../../../types/common'
import Image from 'next/image'

export default function Hero({lang}: LangProps) {
    return (
        <div className="platform__page mainvisual mainvisual__custombg">
            <div className="mainvisual__img"><Image src="/images/mainvs_img_platform.png" width="1469" height="550" alt="Platforms" />
            </div>
            <div className="container">
                <div className="mainvisual__content center">
                    <h2><span>Announcement</span></h2>
                    <div className="mainvisual__desc">
                        <p>Stay updated with the latest promotions, important announcements, and upcoming seminars, all organized in one convenient place.</p>
                    </div>
                </div>
            </div>
        </div>
    )
}
