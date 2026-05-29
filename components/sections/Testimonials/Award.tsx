"use client";

import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'
import Link from 'next/link'
import { Swiper, SwiperSlide } from "swiper/react";
import { Pagination, Autoplay } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";

export default function Award({lang}: LangProps) {
    return (
        <section className="award">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Award & Certificate</p>
                    <h3><span>WeMasterTrade</span> <br className="sp" />and its awards</h3><p className="txt">Our endless efforts in improving the trading experience has resulted in recognition from both<br />customers and the industry. Trade with an award-winning platform today.</p>
                </div>
                <Swiper 
                    className="award__content swiper"
                    modules={[Pagination, Autoplay]}
                    slidesPerView={1}
                    spaceBetween={120}
                    loop={true}
                    centeredSlides={true}
                    autoplay={{ 
                        delay: 2500,
                        disableOnInteraction: false, 
                    }}
                    pagination={{
                        clickable: true
                    }}
                >
                    <SwiperSlide className="item">
                        <div className="item__logo"><Image loading="lazy" src="/images/award_item_logo1.png" width="166" height="165" alt="Smart Financial Education Platform" /></div>
                        <h4>Smart Financial<br />Education Platform</h4>
                        <div className="desc">
                            <p>Award 2025, Forexdailyinfo.com</p>
                        </div>
                        <div className="link center">
                            <p><Link href={`/${lang}/certification/`}>View Award</Link></p>
                        </div>
                    </SwiperSlide>
                    <SwiperSlide className="item">
                        <div className="item__logo"><Image loading="lazy" src="/images/award_item_logo2.png" width="169" height="165" alt="International Accreditation Council" /></div>
                        <h4>International<br />Accreditation Council</h4>
                        <div className="desc">
                            <p>ISO 21001:2018, iacouncil.org</p>
                        </div>
                        <div className="link center">
                            <p><Link href={`/${lang}/certification/`}>View Certificate</Link></p>
                        </div>
                    </SwiperSlide>
                    <SwiperSlide className="item">
                        <div className="item__logo"><Image loading="lazy" src="/images/award_item_logo3.png" width="165" height="165" alt="Smart Financial Education Platform" /></div>
                        <h4>Financial Crimes<br />Enforcement Network</h4>
                        <div className="desc">
                            <p>ISO 21001:2018, iacouncil.org</p>
                        </div>
                        <div className="link center">
                            <p><Link href={`/${lang}/certification/`}>View Certificate</Link></p>
                        </div>
                    </SwiperSlide>
                    <SwiperSlide className="item">
                        <div className="item__logo"><Image loading="lazy" src="/images/award_item_logo4.png" width="165" height="165" alt="International Accreditation Council" /></div>
                        <h4>International<br />Accreditation Council</h4>
                        <div className="desc">
                            <p>ISO 9001:2015, iacouncil.org</p>
                        </div>
                        <div className="link center">
                            <p><Link href={`/${lang}/certification/`}>View Certificate</Link></p>
                        </div>
                    </SwiperSlide>
                    <SwiperSlide className="item">
                        <div className="item__logo"><Image loading="lazy" src="/images/award_item_logo5.png" width="165" height="165" alt="Best InstantFunding Prop Firm" /></div>
                        <h4>Best Instant<br />Funding Prop Firm</h4>
                        <div className="desc">
                            <p>Award 2025, Forexdailyinfo.com</p>
                        </div>
                        <div className="link center">
                            <p><a href="certification/">View Award</a></p>
                        </div>
                    </SwiperSlide>
                </Swiper>
            </div>
        </section>
    )
}
