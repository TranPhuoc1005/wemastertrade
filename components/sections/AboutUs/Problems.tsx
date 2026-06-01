import React from 'react'
import { LangProps } from '../../../types/common'

export default function Problems({lang}: LangProps) {
    return (
        <section className="problems">
            <div className="container">
                <div className="problems__frame">
                    <div className="title">
                        <p className="title__sub">Problems</p>
                        <h3>What is<br /><span>WeMasterTrade<br />Program?</span></h3>
                        <div className="cnt">
                            <p className="txt">WeMasterTrade program is an idea of trading with a company\'s funds and then taking a percentage of the profits that you make. We focus and develop on the 3 key element</p>
                        </div>
                    </div>
                    <div className="problems__content">
                        <div className="item">
                            <h4>Coach</h4>
                            <div className="desc">
                                <p>With a strong support of top master traders from WeMasterTrade, and practical trading courses, we empower you to become a professional trader who can actively make money from financial market.</p>
                            </div>
                        </div>
                        <div className="item">
                            <h4>Trade</h4>
                            <div className="desc">
                                <p>Unlike other providers that require lengthy evaluations with impractical challenges, WMT lets you start trading on a simulated account right after signing up with a simple registration fee.</p>
                            </div>
                        </div>
                        <div className="item">
                            <h4>Profit</h4>
                            <div className="desc">
                                <p>Traders who demonstrate consistent performance can earn performance-based rewards of up to 90% as they progress through each stage. All trading is conducted on simulated accounts, so there is no personal financial risk during the program.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
