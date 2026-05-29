import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function JoinUs({lang}: LangProps) {
    return (
        <section className="joinus">
            <div className="container">
                <div className="joinus__content">
                    <div className="title">
                        <p className="title__sub">Join Us</p>
                        <h3><span>Level Up. Daily.</span><br />Join Us on Facebook!</h3><p className="txt">To win the game, you need strong support and diligent preparation. Join WeMasterTrade - Trader\'s Community and increase your odds of success.</p>
                        <div className="btn__facebook">
                            <p><a href="https://www.facebook.com/groups/wecopytradetraderscommunity/" target="_blank"><span>Join for free</span></a></p>
                        </div>
                    </div>
                    <div className="joinus__img"><Image loading="lazy" src="/images/joinus_img1n.png" width={908} height={590} alt="Level Up. Daily.Join Us on Facebook!" /></div>
                </div>
            </div>
        </section>
    )
}
