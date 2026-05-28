import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Hero({lang}: LangProps) {
    return (
        <div className="testimonials__page mainvisual mainvisual__custombg">
            <div className="mainvisual__img"><Image src="/images/mainvs_img_testimonials.png" width={1098} height={723} alt="Client Testimonials" /></div>
            <div className="container">
                <div className="mainvisual__content">
                    <h2>Client<br /><span>Testimonials</span></h2>
                    <div className="mainvisual__desc">
                        <p>We are dedicated to understanding our <br />customers’ journey and helping them succeed. <br />Your feedback helps us become better and <br />provide more valuable services.</p>
                    </div>
                </div>
            </div>
        </div>
    )
}
