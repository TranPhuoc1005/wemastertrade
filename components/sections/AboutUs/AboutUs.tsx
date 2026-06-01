import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function AboutUs({lang}: LangProps) {
    return (
        <section className="aboutus">
            <div className="container">
                <div className="aboutus__frame">
                    <div className="aboutus__content">
                        <div className="title">
                            <p className="title__sub">About Us</p>
                            <h3><span>WeMasterTrade</span></h3>
                            <div className="cnt">
                                <p className="txt">WeMasterTrade provides a simulated trading environment where traders can demonstrate their skills through structured evaluation programs.<br /><br />Our risk management team monitors all simulated trading activities to ensure a fair and transparent evaluation process. Traders who meet our performance criteria may qualify for rewards through our profit-sharing program.<br /><br />We believe that talent should not be limited by capital. Our mission is to identify skilled traders and provide them with the tools and environment they need to succeed.</p>
                            </div>
                        </div>
                    </div>
                    <div className="aboutus__img"><Image loading="lazy" src="/images/aboutus_img1nn.png" width="1062" height="1154" alt="WeMasterTrade LTD" /></div>
                </div>
            </div>
        </section>
    )
}
