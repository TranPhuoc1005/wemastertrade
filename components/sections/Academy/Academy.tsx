import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Academy({lang}: LangProps) {
    return (
        <section id="firstsec" className="academy">
            <div className="container">
                <div className="academy__frame border__glassed">
                    <div className="academy__content">
                        <div className="title center">
                            <p className="title__sub">Problems</p>
                            <h3>We Coach You to <br /><span>Become a Master Trader</span></h3>
                            <p className="txt">WeMasterTrade Education is proud to be a member of International Accreditation Council (IAC) and granted access to become a trusted financial educator with ISO 21001:2018 and ISO 9001:2015. We are here to get you covered with our WeMasterTrade education programs.</p>
                            <p className="txt">Our program is an exhaustive and complete financial course designed to accommodate traders of all levels. Our course covers all the first principles of financial trading and teaches you everything about our strategies to become a master trader.</p>
                            <p className="txt">Our Education center is a collection of our strategies from top master traders with years of experience in trading from WeMasterTrade, and they have a strong foundation in fundamental and sophisticated trading principles. By joining us, you will fully understand the financial markets, trading tools, platforms, trading strategy, risk management, trading analysis, and much more.</p>
                            <p className="txt">In addition, you give free access to our trading platform, where you can apply all theories into practice and start to simulate your future profit.</p>
                        </div>
                    </div>
                    <div className="academy__img">
                        <p className="lightbox-item" data-src="/images/academy_img1.jpg"><Image width={1000} height={1000} loading="lazy" src="/images/academy_img1.jpg" alt="Academy Image 1" /></p>
                        <p className="lightbox-item" data-src="/images/academy_img2.jpg"><Image width={1000} height={1000} loading="lazy" src="/images/academy_img2.jpg" alt="Academy Image 2" /></p>
                    </div>
                    <div className="academy__txt center">
                        <h3>We Have Achieved <strong className="clr">ISO 21001:2018</strong> and <strong className="clr">ISO 9001:2015</strong> About Education consulting. Training. financial management Financial markets management Education and training Financial market analysis</h3>
                    </div>
                    <div className="btn center">
                        <p><a href="https://my.wemastertrade.com/" target="_blank"><span>Register</span></a></p>
                    </div>
                </div>
            </div>
        </section>
    )
}
