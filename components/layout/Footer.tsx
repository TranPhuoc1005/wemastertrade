import React from 'react'
import Image from 'next/image'
import { LangProps } from '../../types/common'
import Link from 'next/link'

export default function Footer({lang}: LangProps) {
    return (
        <>
            <section className="join">
                <div className="join__bg"><Image loading="lazy" src="/images/join_team.png" width={1920} height={1054} alt="Join Team" /></div>
                <div className="join__title">
                    <div className="container">
                        <div className="title center">
                            <h3><span>Join Our</span><br />Trading Team!</h3>
                        </div>

                        <div className="btn center">
                            <p><Link href="https://my.wemastertrade.com/" target="_blank"><span>Start Your Challenge</span></Link></p>
                        </div>
                        <div className="fxwidget">
                            <Link href="https://fxverify.com/prop-firms/wemastertrade-review-4594" target="_blank" className="link_full"></Link>
                            <p className="txt1">
                                <span className="txt1_bg">
                                    <span className="star">
                                        <Image src="/images/star.png" width={15} height={15} alt="Star" />
                                        <Image src="/images/star.png" width={15} height={15} alt="Star" />
                                        <Image src="/images/star.png" width={15} height={15} alt="Star" />
                                        <Image src="/images/star.png" width={15} height={15} alt="Star" />
                                        <Image src="/images/star.png" width={15} height={15} alt="Star" />
                                    </span>
                                    <span className="txt_partner">Transparency Partner</span>
                                    <Image src="/images/FXVERIFY_widgets_white_logo.svg" width={100} height={25} alt="FXVERIFY" />
                                </span>
                            </p>
                            <p className="txt2">WeMasterTrade Reviews Verified by FXVerify</p>
                        </div>
                    </div>
                </div>
            </section>
            <section className="wmtinfo">
                <div className="container">
                    <div className="wmtinfo__content">
                        <div className="wmtinfo__left">
                            <div className="wmtinfo__head">
                                <p className="wmtinfo__logo"><Image loading="lazy" src="/images/wmt_left_logo.png" width={233} height={50} alt="We Master Trade" /></p>
                                <div className="desc">
                                    <p>Clients are provided with an account containing virtual funds. Their trading activity on the virtual account is replicated in real-time by our exclusive algorithms to our live firm trading account, generating actual cash flow.</p>
                                </div>
                            </div>
                            <div className="wmtinfo__body">
                                <div className="item">
                                    <p className="ttl">Hypothetical Performance Closure</p>
                                    <div className="desc">
                                        <p>Hypothetical performance results have many inherent limitations, some of which are described below. No representation is made that any account will likely achieve performance-based rewards or losses similar to those shown. There are frequently sharp differences between hypothetical performance results and the actual results subsequently achieved by any particular trading program. One of the limitations of hypothetical performance results is that they are generally prepared with the benefit of hindsight. In addition, hypothetical trading does not involve financial risk, and no hypothetical trading record can completely account for the impact of financial risk on actual trading. For example, the ability to withstand losses or to adhere to a particular trading program despite trading losses is a material point, which can also adversely affect actual trading results. There are numerous other factors related to the markets in general or to the implementation of any specific trading program, which cannot be fully accounted for in the preparation of hypothetical performance results, and all of which can adversely affect trading results. Testimonials appearing on this website may not represent other clients or customers and are not a guarantee of future performance or success.</p>
                                    </div>
                                </div>
                                <div className="item">
                                    <p className="ttl">Hypothetical Performance Disclosure – CFTC Rule 4.41</p>
                                    <div className="desc">
                                        <p>Simulated or hypothetical trading results have inherent limitations. Unlike actual performance records, they do not represent real trading activity and may be designed with the benefit of hindsight. No representation is being made that any account will, or is likely to, achieve profits or losses similar to those shown or implied.</p>
                                    </div>
                                </div>
                                <div className="item">
                                    <p className="ttl">Risk Disclosure</p>
                                    <div className="desc">
                                        <p>This is not an investment opportunity. You do not deposit any funds for investment. We do not ask for any funds for investment. At no time do you risk your own capital. There are no promises of rewards or returns. Trading contains substantial risk and is not for every investor. An investor could lose all or more than the initial investment. Risk capital is money that can be lost without jeopardizing one\'s financial security or lifestyle. Only risk capital should be used for trading, and only those with sufficient risk capital should consider trading. Past performance is not necessarily indicative of future results.</p>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <div className="wmtinfo__right">
                            <div className="wmtinfo__body">
                                <div className="item">
                                    <p className="ttl">Customer Compensate Disclosure</p>
                                    <div className="desc">
                                        <p>All trades presented for customer compensation should be considered hypothetical and should not be expected to be replicated in a simulated trading environment. All accounts in the WeMasterTrade program may represent simulated trading accounts. Payments are collected and facilitated by Wecopy Fintech LTD (Company Number: 14905703), 71-75 Shelton Street, Covent Garden, London, United Kingdom, WC2H 9JQ, acting as a Payment Agent on behalf of WeMasterTrade, with the applicable entity determined based on the user’s location and selected payment method.</p>
                                    </div>
                                </div>
                                <div className="item">
                                    <p className="ttl">Complaint Resolution Process</p>
                                    <div className="desc">
                                        <p>If you believe you are entitled to compensation due to a platform error or system malfunction, please contact support@wemastertrade.com within 7 days of the incident. Our team will review and respond within 5 business days. If the complaint is valid, compensation will be processed within 14 business days.</p>
                                        <p>Compensation is limited to the value of the service fee paid for the affected account. WeMasterTrade is not liable for losses resulting from market conditions, user error, or third-party service interruptions.</p>
                                    </div>
                                </div>
                                <div className="item">
                                    <p className="ttl">Restricted Countries</p>
                                    <div className="desc">
                                        <p>WeMasterTrade does not provide trading accounts service to residents of the Vietnam, Israel, Russia, North Korea, Iran and some other countries.</p>
                                        <p>Metatrader 5 platform does not provide trading accounts service to residents of the Vietnam, USA, Canada, Israel, Russia, North Korea, Iran and some other countries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer id="footer">
                <div className="footer__frame">
                    <div className="container">
                        <div className="footer__content">
                            <div className="footer__social">
                                <div className="footer__social--logo">
                                    <Link href="/"><Image loading="lazy" src="/images/footer_logo.png" width={263} height={124} alt="We Master Trade" /></Link>
                                    <div className="btn btn-app">
                                        <p>
                                            <Link href="https://apps.apple.com/us/app/wemastertrade/id6739526191" target="_blank"><Image loading="lazy" width={120} height={40} src="/images/app-footer.png" alt="App Store" /></Link>
                                        </p>
                                        <p>
                                            <Link href="https://play.google.com/store/apps/details?id=com.wemastertrade.wmt" target="_blank"><Image loading="lazy" width={120} height={40} src="/images/store-footer.png" alt="Google Play" /></Link>
                                        </p>
                                    </div>
                                </div>
                                <div className="footer__social--follow">
                                    <p className="txt">Follow Us</p>
                                    <ul>
                                        <li><Link href="https://www.facebook.com/wemastertradeglobal" target="_blank"><Image loading="lazy" src="/images/ic_facebook.png" width={40} height={40} alt="Facebook" /></Link></li>
                                        <li><Link href="https://www.linkedin.com/company/WeMasterTradefintech/" target="_blank"><Image loading="lazy" src="/images/ic_in.png" width={40} height={40} alt="Linkedin" /></Link></li>
                                        <li><Link href="https://x.com/WeMasterTrade_" target="_blank"><Image loading="lazy" src="/images/ic_thread.png" width={40} height={40} alt="X" /></Link></li>
                                        <li><Link href="https://www.instagram.com/wemastertradeglobal/" target="_blank"><Image loading="lazy" src="/images/ic_instagram.png" width={40} height={40} alt="Instagram" /></Link></li>
                                        <li><Link href="https://t.me/lovewecopytrade/" target="_blank"><Image loading="lazy" src="/images/ic_telegram.png" width={40} height={40} alt="Telegram" /></Link></li>
                                        <li><Link href="https://discord.com/invite/5HQtMu24Uq" target="_blank"><Image loading="lazy" src="/images/ic_discord.png" width={40} height={40} alt="Discord" /></Link></li>
                                    </ul>
                                </div>
                                <address>Copyright ©2026 WeMasterTrade. All Rights Reserved.</address>
                            </div>
                            <div className="footer__info">
                                <div className="footer__info--box">
                                    <p className="sub__text">Dubai Office</p>
                                    <p className="name">WeCopy Consultant FZCO</p>
                                </div>  
                                <div className="footer__info--box">
                                    <p className="txt size16">Registered at IFZA Dubai Silicon Oasis - Dubai - UAE.</p>
                                </div>
                                <div className="footer__info--box">
                                    <p className="sub__text">License Number</p>
                                    <p className="txt">66242</p>
                                </div>
                                <div className="footer__info--box">
                                    <p className="sub__text">Email Address</p>
                                    <p className="txt">support@wemastertrade.com</p>
                                </div>
                                <div className="footer__info--box">
                                    <p className="sub__text">Partnerships</p>
                                    <p className="txt">partner@wemastertrade.com</p>
                                </div>
                                <div className="footer__info--box">
                                    <p className="sub__text">Phone Number</p>
                                    <p className="txt"><Link href="tel:+1 855-594-3886">+1 855-594-3886</Link></p>
                                </div> 
                                <div className="footer__info--box">
                                    <p className="sub__text">St. Lucia Office</p>
                                    <p className="name">WeMasterTrade LTD</p>
                                </div>                 
                                <div className="footer__info--box">
                                    <p className="sub__text">Registered Address</p>
                                    <p className="txt">Ground Floor, The Sotheby building, Rodney Village, Rodney Bay, Gros-Islet, Saint Lucia.</p>
                                </div>
                                <div className="footer__info--box">
                                    <p className="sub__text">Registration Number</p>
                                    <p className="txt">2025-00321</p>
                                </div>
                            </div>
                            <div className="footer__info">
                                <div className="footer__info--box">
                                    <p className="txt size16">Wecopy Fintech LTD, a company registered at 71–75 Shelton Street, Covent Garden, London, United Kingdom, WC2H 9JQ (No. 14905703), acts as a Payment Agent on behalf of WeMasterTrade in the specified countries, as permitted under applicable laws and regulations.</p>
                                </div>
                                <div className="footer__menu">
                                    <ul>                         
                                        <li><Link href="https://faq.wemastertrade.com/" target="_blank">FAQ</Link></li>
                                        <li><Link href="<?php echo pll_home_url(); ?>payout/">Payout</Link></li>
                                        <li><Link href="<?php echo pll_home_url(); ?>contact-us/">Contact Us</Link></li>
                                        <li><Link href="<?php echo pll_home_url(); ?>certification/">Certification</Link></li>
                                        <li><Link href="https://faq.wemastertrade.com/our-privacy-policy/" target="_blank">Privacy Policy</Link></li>
                                        <li><Link href="https://faq.wemastertrade.com/disclaimer/" target="_blank">Risk Disclosure</Link></li>
                                        <li><Link href="https://faq.wemastertrade.com/terms-and-conditions/" target="_blank">Terms & Conditions</Link></li>
                                        <li><Link href="https://faq.wemastertrade.com/refund-and-cancellation/" target="_blank">Refund and Cancellation</Link></li>
                                        <li><Link href="<?php echo pll_home_url(); ?>customer-compensation-disclosure/">Customer Compensation Disclosure</Link></li>
                                        <li><Link href="<?php echo pll_home_url(); ?>anti-money-laundering-aml-policy/">AML</Link></li>
                                        <li><Link href="<?php echo pll_home_url(); ?>know-your-customer-kyc-policy/">KYC</Link></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </>
    )
}
