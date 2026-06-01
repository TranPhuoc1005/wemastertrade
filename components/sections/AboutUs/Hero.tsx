import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Hero({lang}: LangProps) {
  return (
        <div className="mainvisual aboutus__page mainvisual__custombg">
            <div className="mainvisual__img"><Image loading='lazy' src="/images/mainvs_img_aboutus.jpg" width="1920" height="936" alt="About Us" /></div>
            <div className="container">
                <div className="mainvisual__content">
                    <h1 className="h2">WeMasterTrade<br /><span>Your Trading Evaluation Partner</span></h1>
                    <div className="mainvisual__desc">
                        <p>WeMasterTrade is a trading simulation and evaluation platform. We provide traders with a virtual environment to showcase their skills, access professional-grade tools, and earn performance-based rewards.</p>
                    </div>
                    <div className="btn center">
                        <p><a href="https://my.wemastertrade.com/" target="_blank"><span>Start Your Challenge</span></a></p>
                    </div>
                </div>
            </div>
        </div>
  )
}
