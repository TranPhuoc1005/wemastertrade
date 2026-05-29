import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Multilevel({lang}: LangProps) {
    return (
        <section className="multilevel">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">How it works</p>
                    <h3>Your Path to Growing <br /><span>Commissions</span></h3>
                </div>
                <div className="multilevel__content">
                    <div className="whyus__list">
                        <div className="whyus__item">
                            <p className="icon"><Image loading="lazy" src="/images/multilevel_level1.png" width="90" height="90" alt="Become a Main Introducing Partner" />
                            </p>
                            <div className="cnt">
                                <h4>Become a Main Introducing Partner</h4>
                                <div className="desc">
                                    <p>Sign up for Our Introducing Partners Program and receive your unique referral link.</p>
                                </div>
                            </div>
                        </div>
                        <div className="whyus__item border__glassed">
                            <p className="icon"><Image loading="lazy" src="/images/multilevel_level2.png" width="90" height="90" alt="Get Your Link" />
                            </p>
                            <div className="cnt">
                                <h4>Get Your Link</h4>
                                <div className="desc">
                                    <p>Access your unique referral link from your dashboard.</p>
                                </div>
                            </div>
                        </div>
                        <div className="whyus__item">
                            <p className="icon"><Image loading="lazy" src="/images/multilevel_level3.png" width="90" height="90" alt="Build your network" />
                            </p>
                            <div className="cnt">
                                <h4>Build your network</h4>
                                <div className="desc">
                                    <p>Share your link with your community. When someone signs up through your link, they become your direct Clients and Sub-Partners.</p>
                                </div>
                            </div>
                        </div>
                        <div className="whyus__item">
                            <p className="icon"><Image loading="lazy" src="/images/multilevel_level4.png" width="90" height="90" alt="Earn Commissions" />
                            </p>
                            <div className="cnt">
                                <h4>Earn Commissions</h4>
                                <div className="desc">
                                    <p>Once someone becomes your Clients and Sub-Partners, you receive a commission for the lifetime. Also, every time your Sub-Partners (up to three levels deep) earn commissions, you earn, too. The more active your network, the more benefit you get from it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="multilevel__img"><Image loading="lazy" src="/images/multilevel_img11.png" width="1050" height="772" alt="Your Path to Multi-Level Commissions" />
                    </div>
                </div>
            </div>
        </section>
    )
}
