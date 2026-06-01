import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Traditional({lang}: LangProps) {
    return (
        <section className="traditional">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Why choose Us</p><h3><span>Why choose </span> WeMasterTrade?</h3><p className="txt">WeMasterTrade offers very unique competitive advantages to our traders</p>
                </div>
                <p className="scroll__txt sp">Swipe horizontally to see more columns</p>
                <div className="traditional__content">
                    <div className="table__scroll">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>traditional trading platforms</th>
                                    <th><span className="clr">WeMasterTrade</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Education</th>
                                    <td>
                                        <p className="icon"><Image loading="lazy" src="/images/ic_close.png" width="30" height="30" alt="Close" />Lets users to deposit money into trading accounts and trade immediately while they are lack of knowledge and no experience in trading</p>
                                    </td>
                                    <td>
                                        <p className="icon"><Image loading="lazy" src="/images/ic_check_bg.png" width="30" height="30" alt="Close" />Our courses are designed to provide traders with up-to-date knowledge and practical skills in trading and capital management.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Capital</th>
                                    <td>
                                        <p className="icon"><Image loading="lazy" src="/images/ic_close.png" width="30" height="30" alt="Close" />The more money traders have, the bigger the trading capital they can trade.</p>
                                    </td>
                                    <td>
                                        <p className="icon"><Image loading="lazy" src="/images/ic_check_bg.png" width="30" height="30" alt="Close" />Trade on simulated accounts with virtual capital and real-time market data - no personal financial risk.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Profit Sharing</th>
                                    <td>
                                        <p className="icon"><Image loading="lazy" src="/images/ic_close.png" width="30" height="30" alt="Close" />
                                            Traders must take full responsibility for the loss that they incurred with the traditional trading platforms.
                                        </p>
                                    </td>
                                    <td>
                                        <p className="icon"><Image loading="lazy" src="/images/ic_check_bg.png" width="30" height="30" alt="Close" />Traders who meet performance targets and maintain consistency can earn performance-based rewards of up to 90%.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    )
}
