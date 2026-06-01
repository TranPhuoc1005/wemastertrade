import Image from 'next/image'
import Link from 'next/link'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Payment({lang}: LangProps) {
    return (
        <section className="payment">
            <div className="container">
                <div className="payment__frame">
                    <div className="payment__content">
                        <div className="title">
                            <p className="title__sub">Payment Method </p>
                            <h3><span>Payment Method <br />Available to Withdraw</span></h3>
                            <p className="txt">You can request a reward withdrawal from the client dashboard daily. WMT will only process the payout request from your accounts if you submit the request; otherwise, it will roll over the account balance.</p>
                        </div>
                        <div className="cnt">
                            <div className="note">
                                <p>The rewards from your accounts will be sent to you on a request basis using one of our payout methods.</p>
                                <ul>
                                    <li>Bank Transfer: Up to the bank</li>
                                    <li>Coinbase, PayPal, Wise, Deel Card and Stripe are free</li>
                                </ul>
                                <div className="title">
                                    <p className="txt">Please note that the amount received may be changed due to payment methods that may incur additional costs. <Link href="#" className="link_nomal">Click here</Link> to learn more about the additional costs associated with your chosen payment method.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="payment__img"><Image loading="lazy" src="/images/payment_img1.png" width={1308} height={1186} alt="Payment Method Available to Withdraw" />
                    </div>
                </div>
            </div>
        </section>
    )
}
