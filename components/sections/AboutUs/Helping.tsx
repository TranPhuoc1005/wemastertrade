import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Helping({lang}: LangProps) {
    return (
        <section className="helping">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Problems</p>
                    <h3>Helping You<br /><span>Leverage Your Returns</span></h3>
                </div>
                <div className="helping__frame">
                    <div className="helping__content">
                        <div className="item">
                            <p className="ttl">YOU WANT</p><p className="ttl">BUT YOU</p>
                        </div>
                        <div className="item">
                            <p className="txt">Become a professional trader with full knowledge of financial markets</p>
                            <div className="arrow"><Image loading="lazy" src="/images/ic_arrow_right.svg" width="34" height="34" alt="arrow" /></div>
                            <p className="txt">Do not know how to choose the right resources to enhance trading skills</p>
                        </div>
                        <div className="item">
                            <p className="txt">Want to have a large amount of capital to achieve the expected profit</p>
                            <div className="arrow"><Image loading="lazy" src="/images/ic_arrow_right.svg" width="34" height="34" alt="arrow" /></div>
                            <p className="txt">Do not have enough saving money to create a large trading account</p>
                        </div>
                        <div className="item">
                            <p className="txt">Want to trade many instruments and pay low transaction fees</p>
                            <div className="arrow"><Image loading="lazy" src="/images/ic_arrow_right.svg" width="34" height="34" alt="arrow" /></div>
                            <p className="txt">Have to pay high transaction fees and exchange rates from traditional trading platforms</p>
                        </div>
                        <div className="item">
                            <p className="txt">Want to be a full-time trader and get pay well without worrying about losing money</p>
                            <div className="arrow"><Image loading="lazy" src="/images/ic_arrow_right.svg" width="34" height="34" alt="arrow" /></div>
                            <p className="txt">Have to put own money into a brokerage account and 100% responsible for losses</p>
                        </div>
                    </div>
                    <div className="helping__img"><Image loading="lazy" src="/images/helping_img.png" width="1473" height="1027" alt="arrow" /></div>
                </div>
            </div>
        </section>
    )
}
