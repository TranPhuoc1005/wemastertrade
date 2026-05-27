import Image from 'next/image';
import React from 'react';
import type { Locale } from "../../../lib/i18n/config";
import { localizedPath } from "../../../lib/i18n/routing";
import type { Dictionary } from "../../../lib/i18n/types";

interface Props {
  dict: Dictionary["home"]["hero"];
  lang: Locale;
}

export default function Hero({ dict, lang }: Props) {
  return (
    <div className="mainvisual instant__page mainvs__football">
        <div className="container">
            <div className="mainvisual__img">
                <a href={localizedPath(lang, "/vfc-partnership/")}>
                    <Image
                        src="/images/mainvs_element_football3-op.webp"
                        width={962}
                        height={951}
                        alt={dict.imageAlt} />
                </a>
            </div>
            <div className="mainvisual__content">
                <h2>
                    <span>{dict.titleLine1}</span>
                    <br />
                    <span>{dict.titleLine2}</span>
                </h2>
                <div className="desc">
                    <p>
                        <Image
                            src="/images/mainvs_icon_football.png"
                            width={80}
                            height={22}
                            alt="" />
                    </p>
                    <ul className="mainvisual__list">
                        <li>{dict.point1}</li>
                        <li>
                            {dict.point2Prefix}{" "}
                            <i
                                hover-tooltip={dict.point2Tooltip}
                                tooltip-position="bottom">
                                {dict.point2Term}
                            </i>
                            {" "}{dict.point2Suffix}
                        </li>
                        <li>{dict.point3}</li>
                    </ul>
                </div>
                <div className="btn">
                    <p>
                        <a href="https://my.wemastertrade.com/" target="_blank"><span>{dict.primaryCta}</span></a>
                    </p>
                    <p>
                        <a href={localizedPath(lang, "/promotions/")} className="btn_w"><span>{dict.promotionsCta}</span></a>
                    </p>
                </div>
                <div className="btn btn-app">
                    <p>
                        <a href="https://apps.apple.com/us/app/wemastertrade/id6739526191" target="_blank">
                            <img
                                width={120}
                                height={40}
                                src="/images/WMTapp-head.png"
                                alt={dict.appStoreAlt} />
                        </a>
                    </p>
                    <p>
                        <a href="https://play.google.com/store/apps/details?id=com.wemastertrade.wmt" target="_blank">
                            <img
                                width={120}
                                height={40}
                                src="/images/WMTstore-head.png"
                                alt={dict.googlePlayAlt} />
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
  )
}
