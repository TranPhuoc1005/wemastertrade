import React from 'react'
import { LangProps } from '../../../types/common'
import Image from 'next/image'

export default function Subscribe({lang}: LangProps) {
    return (
        <section style={{ paddingTop: 60 }}>
            <div className="container">
                <div className="subscribe__content">
                    <div className="cnt">
                        <h3>Subscribe to <span>Stay <br />Ahead in Trading!</span></h3>
                        <div className="desc"><p>Don't miss out on real stories, proven strategies, and big payouts from top traders.</p></div>
                        <div className="btn btn__subscribe">
                            <p><a href="https://www.youtube.com/@wemastertrade_official/" target="_blank"><span>Subscribe Channel</span></a></p>
                        </div>
                    </div>
                    <p className="subscribe__img"><Image loading="lazy" src="/images/subscribe_WMTT.png" width={906} height={711} alt="Subscribe to Stay Ahead in Trading!" /></p>
                </div>
            </div>
        </section>
    )
}
