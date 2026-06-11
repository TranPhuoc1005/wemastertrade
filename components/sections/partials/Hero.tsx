import React from 'react';
import Image from 'next/image';
import type { Locale } from "../../../lib/i18n/config";
import { localizedPath } from "../../../lib/i18n/routing";

interface Props {
  dict?: Record<string, string>;
  lang: Locale;
}

export default function Hero({ dict, lang }: Props) {
  // Title HTML fallback
  const titleHtml = dict?.hero_block_0 || `<h2><span>Trade Virtually</span><br><span>Earn Real Rewards</span></h2>`;
  
  // Point 1 fallback
  const point1 = dict?.hero_block_1 || "We train and evaluate your trading skills.";
  
  // Point 2 HTML fallback (contains the <i hover-tooltip="...">capital</i>)
  const point2Html = dict?.hero_block_2 || `You gain access to our virtual <i hover-tooltip="Clients are provided a simulated trading account with virtual funds. Based on demonstrated trading performance, WeMasterTrade may, at its sole discretion, utilize selected trading strategies in its proprietary live trading operations, where the Company generates its own revenue." tooltip-position="bottom">capital</i> for trading.`;
  
  // Point 3 fallback
  const point3 = dict?.hero_block_3 || "We copy your valuable trades and share the rewards.";
  
  // CTA fallbacks
  const primaryCta = dict?.hero_block_4 || "Free To Use";
  const promotionsCta = dict?.hero_block_5 || "Our Promotions";

  return (
    <div className="mainvisual instant__page mainvs__football">
        <div className="container">
            <div className="mainvisual__img">
                <a href={localizedPath(lang, "/vfc-partnership/")}>
                    <Image
                        src="/images/mainvs_element_football3-op.webp"
                        width={962}
                        height={951}
                        alt="Trade Virtually Earn real Rewards" />
                </a>
            </div>
            <div className="mainvisual__content">
                <div dangerouslySetInnerHTML={{ __html: titleHtml }} />
                
                <div className="desc">
                    <p>
                        <Image
                            src="/images/mainvs_icon_football.png"
                            width={80}
                            height={22}
                            alt="" />
                    </p>
                    <ul className="mainvisual__list">
                        <li>{point1}</li>
                        <li dangerouslySetInnerHTML={{ __html: point2Html }} />
                        <li>{point3}</li>
                    </ul>
                </div>
                <div className="btn">
                    <p>
                        <a href="https://my.wemastertrade.com/" target="_blank"><span>{primaryCta}</span></a>
                    </p>
                    <p>
                        <a href={localizedPath(lang, "/promotions/")} className="btn_w"><span>{promotionsCta}</span></a>
                    </p>
                </div>
                <div className="btn btn-app">
                    <p>
                        <a href="https://apps.apple.com/us/app/wemastertrade/id6739526191" target="_blank">
                            <img
                                width={120}
                                height={40}
                                src="/images/WMTapp-head.png"
                                alt="App Store" />
                        </a>
                    </p>
                    <p>
                        <a href="https://play.google.com/store/apps/details?id=com.wemastertrade.wmt" target="_blank">
                            <img
                                width={120}
                                height={40}
                                src="/images/WMTstore-head.png"
                                alt="Google Play" />
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
  )
}
