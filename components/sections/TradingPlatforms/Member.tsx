import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Member({lang}: LangProps) {
    return (
        <section className="member">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Member Company</p>
                    <h3>We Master Trade <br /></h3>
                    <p className="txt">Everything you need to trade. invest. and check your accounts is available on all-in-one trading platforms. <br />In search or more sophisticated trading? View the cutting-edge trading platforms</p>
                </div>
                <ul className="member__btn">
                    <li>
                        <a href="#member1"><Image loading="lazy" src="/images/member_btn1.png" width="203" height="367" alt="All in on Platforms" />
                        </a>
                    </li>
                    <li>
                        <a href="#member2"><Image loading="lazy" src="/images/member_btn2.png" width="203" height="367" alt="All in on Platforms" />
                        </a>
                    </li>
                    <li>
                        <a href="#member3"><Image loading="lazy" src="/images/member_btn3.png" width="203" height="367" alt="All in on Platforms" />
                        </a>
                    </li>
                </ul>
                <div className="member__content">
                    <div id="member1" className="item">
                        <div className="img"><Image loading="lazy" src="/images/member_img1.png" width="713" height="587" alt="" />
                        </div>
                        <div className="cnt">
                            <div className="title">
                                <h3><span>All-In-One</span> Platforms</h3>
                                <p className="txt">Everything you need to trade is available on one or our user-friendly, simple, all-in-one platforms</p>
                            </div>
                            <h4>WeMasterTrade Trading</h4>
                            <div className="desc">
                                <p>Your primary web-based system. You can manage your accounts, place trades, check performance. and do instrument research quickly and securely</p>
                            </div>
                            <ul className="list">
                                <li>Learn more about trading as vou go with the built- in WeTraders</li>
                                <li>View the status of each of your accounts and your portfolios at a glance using a single, straightforward graph</li>
                                <li>Research, trade, and monitor your investments with a few clicks</li>
                            </ul>
                            <div className="btn">
                                <p><a href="https://online.ugfx.com/terminal/" target="_blank"><span>Access Now</span></a></p>
                            </div>
                        </div>
                    </div>
                    <div id="member2" className="item">
                        <div className="img"><Image loading="lazy" src="/images/member_img2.png" width="721" height="573" alt="Metatrader5 Platforms" />
                        </div>
                        <div className="cnt">
                            <div className="title">
                                <h3><span>Metatrader5</span> Platforms</h3>
                                <p className="txt">The advanced MT5 trading platforms are made for our project so you can take advantage of the opportunites you see in the market. These powerful and fully customizable platform are built for active and experienced traders.</p>
                            </div>
                            <h4>WeMasterTrade Advaced Trading</h4>
                            <div className="desc">
                                <p>Designed for active and professional traders, the MT5 puts the power of an advanced platform in the palm of your hand</p>
                            </div>
                            <ul className="list">
                                <li>Multiple trading tools and indicators to trade</li><li>Trade on the go because you can download MT5 to your phone and start trading</li><li>Gives you more control over stop loss orders and Multi-leg option orders</li>
                            </ul>
                            <div className="btn">
                                <p><a href="https://download.terminal.free/cdn/web/wemastertrade.ltd/mt5/wemastertrade5setup.exe" target="_blank"><span>Download Now</span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="member3" className="item">
                        <div className="img"><Image loading="lazy" src="/images/member_img3.png" width="639" height="640" alt="Match-Trader Trading" />
                        </div>
                        <div className="cnt">
                            <div className="title">
                                <h3><span>Match-Trader</span> Trading</h3>
                                <p className="txt">A powerful, globally recognized trading platform - now integrated into WeMasterTrade. Match-Trader delivers a next-gen trading experience with real-time execution, seamless device syncing, and intuitive design. No downloads, no delays - just smart, fast, cloud-based trading.</p>
                            </div>
                            <h4>WeMasterTrade Match-Trader</h4>
                            <div className="desc">
                                <p>Your advanced, multi-device trading platform. Manage your accounts, execute trades, and monitor markets effortlessly, whether on web or mobile.</p>
                            </div>
                            <ul className="list">
                                <li>A high-performance trading platform delivering ultra-low latency, real-time analytics, and seamless access to global markets.</li>
                                <li>Trade instantly via browser or app, no installation needed, fully synced across devices Monitor live trades and portfolio performance with advanced interactive charts. Access built-in analysis, news, and market data for smarter decisions</li>
                                <li>Multi-language, scalable, and compliant — built for global traders</li></ul>
                            <div className="btn">
                                <p><a href="https://match-trader.com/" target="_blank"><span>Learn More</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
