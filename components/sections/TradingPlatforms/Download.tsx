import Image from 'next/image'
import Link from 'next/link'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Download({ lang }: LangProps) {
    return (
        <section className="download">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Member Company</p>
                    <h3><span>Download</span> Platforms</h3>
                </div>
                <div className="download__content">
                    <div className="item">
                        <Link href="https://download.terminal.free/cdn/web/wemastertrade.ltd/mt5/wemastertrade5setup.exe" target="_blank"><Image loading="lazy" src="/images/download_bnr1.png" width="332" height="228" alt="MT5 for windows" />
                        </Link>
                    </div>
                    <div className="item">
                        <Link href="https://download.mql5.com/cdn/web/metaquotes.ltd/mt5/MetaTrader5.pkg.zip?utm_source=support.metaquotes.net&amp;utm_campaign=download.mt5.macos/" target="_blank"><Image loading="lazy" src="/images/download_bnr2.png" width="332" height="228" alt="MT5 for MacOS" />
                        </Link>
                    </div>
                    <div className="item">
                        <Link href="https://download.terminal.free/cdn/mobile/mt5/android?server=WeMasterTrade-Virtual" target="_blank"><Image loading="lazy" src="/images/download_bnr3.png" width="332" height="228" alt="MT5 for Android" />
                        </Link>
                    </div>
                    <div className="item">
                        <Link href="https://download.terminal.free/cdn/mobile/mt5/ios?server=WeMasterTrade-Virtual" target="_blank"><Image loading="lazy" src="/images/download_bnr4.png" width="332" height="228" alt="MT5 for IOS" />
                        </Link>
                    </div>
                    <div className="item">
                        <Link href="https://online.ugfx.com/"><Image loading="lazy" src="/images/download_bnr6.png" width="332" height="228" alt="MT5 Web Trading" />
                        </Link>
                    </div>
                    <div className="item">
                        <Link href="https://play.google.com/store/apps/details?id=com.match_trader.mt.android.twa/" target="_blank"><Image loading="lazy" src="/images/download_bnr7.png" width="332" height="228" alt="Android Match Trader" />
                        </Link>
                    </div>
                    <div className="item">
                        <Link href="https://apps.apple.com/vn/app/match-trader/id1542334322/" target="_blank"><Image loading="lazy" src="/images/download_bnr8.png" width="332" height="228" alt="IOS Match Trader" />
                        </Link>
                    </div>
                    <div className="item">
                        <Link href="https://mtr.wemastertrade.com/?_gl=1*1hvyad0*_gcl_au*MTAxMTA5NDk5My4xNzY4MTg4NDk3/" target="_blank"><Image loading="lazy" src="/images/download_bnr9.png" width="332" height="228" alt="Web Traing Match Trader" />
                        </Link>
                    </div>
                    <div className="item">
                        <Link href="https://getctrader.spotware.com/wemastertrade/ctrader-wemastertrade-setup.exe" target="_blank"><Image loading="lazy" src="/images/ctrader-desktop.png" width="332" height="228" alt="ctrader Desktop" />
                        </Link>
                    </div>
                    <div className="item">
                        <Link href="https://getctrader.spotware.com/wemastertrade/ctrader-wemastertrade-setup.dmg" target="_blank"><Image loading="lazy" src="/images/ctrader-mac.png" width="332" height="228" alt="ctrader Mac" />
                        </Link>
                    </div>
                    <div className="item">
                        <Link href="https://ctr.wemastertrade.com/" target="_blank"><Image loading="lazy" src="/images/ctrader-web.png" width="332" height="228" alt="ctrader Web" />
                        </Link>
                    </div>
                    <div className="item">
                        <Link href="https://id-ctr.wemastertrade.com/" target="_blank"><Image loading="lazy" src="/images/ctrader-id.png" width="332" height="228" alt="ctrader ID Site" />
                        </Link>
                    </div>
                </div>
            </div>
        </section>
    )
}
