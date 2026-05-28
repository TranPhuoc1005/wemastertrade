import React from 'react'
import Image from 'next/image'
import { LangProps } from '../../../types/common'

export default function Stories({lang}: LangProps) {
    return (
        <section className="stories">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Traders Stories</p>
                    <h3>Hear from Traders stories with<br /><span>WeMasterTrade</span></h3>
                    <div className="desc">
                        <p>Watch the success stories of customers. Live from our studio!</p>
                    </div>
                </div>
                <div className="stories__content">
                    <div className="item">
                        <div className="cnt">
                            <h4>We <strong>share the stories</strong> of our Funded Traders</h4>
                            <div className="desc">
                                <p>Your Story. Our Story.</p>
                            </div>
                            <div className="btn center">
                                <p><a href="<?php echo pll_home_url(); ?>payout/#meet"><span>View more</span></a></p>
                            </div>
                        </div>
                        <div className="stories__img lightbox-item" data-youtube-id="LLKkxlq59Bk"><Image loading="lazy" src="/images/thai-30kpo.png" width={835} height={468} alt="Watch the success stories of customers" /></div>
                    </div>
                    <div className="item">
                        <div className="cnt">
                            <h4>Watch the <strong>success<br />stories</strong> of customers</h4>
                            <div className="desc">
                                <p>To <strong>inspire and encourage</strong> the next generation</p>
                            </div>
                            <div className="btn center">
                                <p><a href="<?php echo pll_home_url(); ?>payout/#payout-main"><span>View more</span></a></p>
                            </div>
                        </div>
                        <div className="stories__img lightbox-item" data-youtube-id="XCkI6wOtxu0"><Image loading="lazy" src="/images/colom-tes.png" width={835} height={468} alt="Watch the success stories of customers" /></div>
                    </div>
                    <div className="item">
                        <div className="cnt">
                            <h4>Of <strong>successful traders</strong></h4>
                            <div className="desc">
                                <p>Payout from WeMastertrade</p>
                            </div>
                            <div className="btn center">
                                <p><a href="<?php echo pll_home_url(); ?>payout/#payout-main"><span>View more</span></a></p>
                            </div>
                        </div>
                        <div className="stories__img lightbox-item" data-youtube-id="rRZtlSS2jxg"><Image loading="lazy" src="/images/stories_img4.jpg" width={835} height={468} alt="Watch the success stories of customers" /></div>
                    </div>
                </div>
            </div>
            <div className="txt__marquee">
                <p data-text="We share the stories of our Funded Traders To inspire and encourage the next generation successful traders">We share the stories of our Funded Traders to inspire and encourage the next generation of successful traders.</p>
                <p data-text="We share the stories of our Funded Traders To inspire and encourage the next generation successful traders">We share the stories of our Funded Traders to inspire and encourage the next generation of successful traders.</p>
            </div>
        </section>
    )
}
