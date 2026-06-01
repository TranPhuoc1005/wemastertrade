import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Hero({lang}: LangProps) {
    return (
        <div className="academy__page mainvisual mainvisual__custombg">
            <div className="mainvisual__img"><Image src="/images/mainvs_img_academy.png" width="1276" height="665" alt="Capital and Profit" loading="lazy" />
            </div>  
            <div className="container">
                <div className="mainvisual__content">
                    <h1 className="h2"><span>Academy</span></h1>
                    <div className="mainvisual__desc">
                        <p>Improve your trading knowledge with our unique<br />educational resources, including trading videos.</p>
                    </div>
                    <div className="btn not_icon">
                        <p><a href="#firstsec"><span>Get Started</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    )
}
