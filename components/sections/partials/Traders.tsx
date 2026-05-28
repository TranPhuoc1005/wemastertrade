import React from 'react'
import Image from 'next/image'
import Link from 'next/link'
import { LangProps } from '../../../types/common'

export default function Traders({lang}: LangProps) {
    return (
        <section className="traders">
            <p className="traders__dc"><Image loading="lazy" src="/images/traders_dc.png" width={792} height={1628} alt="WeMasterTrade Interviews" /></p>
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Traders Stories</p>
                    <h3>WeMasterTrade <span>Interviews</span></h3>
                </div>
                <p className="txt center">Every month, we interview successful traders to share the latest insights, trends, and strategies in the industry — helping our clients gain valuable experience and improve their earnings. Check out our latest videos here!</p>
                <div className="traders__content">
                    <p className="item lightbox-item" data-youtube-id="rRZtlSS2jxg"><Image loading="lazy" src="/images/Arabia-po1.png" width={434} height={244} alt="WeMasterTrade Interviews" /></p>
                    <p className="item lightbox-item" data-youtube-id="XCkI6wOtxu0"><Image loading="lazy" src="/images/colom-1.png" width={434} height={244} alt="WeMasterTrade Interviews" /></p>
                    <p className="item lightbox-item" data-youtube-id="LLKkxlq59Bk"><Image loading="lazy" src="/images/po-32k.png" width={434} height={244} alt="WeMasterTrade Interviews" /></p>
                </div>
                <div className="btn center">
                    <p><Link href="https://www.youtube.com/@wemastertrade_official/" target="_blank"><span>View more</span></Link></p>
                    <p><Link href={`/${lang}/testimonials/`} className="btn_w"><span>Testimonials</span></Link></p>
                </div>
            </div>
        </section>
    )
}
