import Image from "next/image";
import React from "react";
import { LangProps } from "../../../types/common";

interface LogoItem {
    href: string;
    image: string;
    width: number;
    height: number;
}

const firstRowLogos: LogoItem[] = [
    logo("https://www.livehindustan.com/brand-post/wemaster-trade-your-partner-on-your-way-to-success-in-the-world-of-trading-201733320847003.html", "/images/testimonials_logo1.png", 96, 96),
    logo("https://uk.investing.com/studios/article-300814", "/images/testimonials_logo2.png", 95, 95),
    logo("https://www.newindianexpress.com/express-connect/archives/2024/Oct/09/wecopytrades-wemastertrade-platform-emerges-as-leading-prop-trading-player", "/images/testimonials_logo4.png", 96, 96),
    logo("https://finance.yahoo.com/news/finance-innovator-wemastertrade-wins-awards-162000102.html", "/images/testimonials_logo6.png", 95, 95),
    logo("https://wecopytrade.com/", "/images/testimonials_logo7.png", 96, 96),
    logo("https://vancouversun.com/newsfile/204848-finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities", "/images/testimonials_logo8.png", 97, 97),
    logo("https://www.digitaljournal.com/pr/news/introducing-the-future-of-trading-wecopytrade", "/images/testimonials_logo9.png", 95, 95),
    logo("https://www.streetinsider.com/Newsfile/Finance+Innovator+WeMasterTrade+Wins+Awards+for+Educational+Resources+and+Virtual+Trading+Capabilities/23056289.html", "/images/testimonials_logo10.png", 96, 96),
    logo("https://markets.financialcontent.com/wss/article/newsfile-2024-4-11-finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities", "/images/testimonials_logo11.png", 96, 96),
    logo("https://vietstock.vn/2025/03/wemastertrade-prop-firm-hang-dau-duoc-vinh-danh-voi-nhieu-giai-thuong-4645-1281232.htm", "/images/testimonials_logo12.png", 95, 95),
];

const secondRowLogos: LogoItem[] = [
    logo("https://coinopening.com/introducing-the-future-of-trading-wecopytrade/", "/images/testimonials_logo13.png", 96, 96),
    logo("https://www.theglobeandmail.com/investing/markets/markets-news/NewsFile/25422056/finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities/", "/images/testimonials_logo14.png", 95, 95),
    logo("https://o.canada.com/newsfile/204848-finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities", "/images/testimonials_logo15.png", 96, 96),
    logo("https://www.benzinga.com/pressreleases/23/04/g31919075/introducing-the-future-of-trading-wecopytrade", "/images/testimonials_logo16.png", 96, 96),
    logo("https://torontosun.com/newsfile/204848-finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities", "/images/testimonials_logo17.png", 95, 95),
    logo("https://ottawacitizen.com/newsfile/204848-finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities", "/images/testimonials_logo18.png", 95, 95),
    logo("https://nationalpost.com/newsfile/204848-finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities", "/images/testimonials_logo19.png", 96, 96),
    logo("https://markets.businessinsider.com/news/stocks/finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities-1033242063", "/images/testimonials_logo20.png", 97, 97),
    logo("https://financialpost.com/newsfile/204848-finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities", "/images/testimonials_logo21.png", 95, 95),
    logo("https://www.barchart.com/story/news/25422055/finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities", "/images/testimonials_logo22.png", 96, 96),
    logo("https://www.finanznachrichten.de/nachrichten-2024-04/61924047-wecopy-fintech-inc-finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities-296.html", "/images/testimonials_logo23.png", 96, 96),
    logo("https://torontosun.com/newsfile/204848-finance-innovator-wemastertrade-wins-awards-for-educational-resources-and-virtual-trading-capabilities", "/images/testimonials_logo24.png", 95, 95),
];

function logo(href: string, image: string, width: number, height: number): LogoItem {
    return {
        height,
        href,
        image,
        width,
    };
}

export default function TestimonialsBenefit({lang}: LangProps) {
    return (
        <section className="testimonials__benefit">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Press</p>
                    <h2>
                        <span>Featured by</span>
                    </h2>
                    <div className="desc center">
                        <p>
                            Learn more about WeMasterTrade and our team from
                            <br />
                            media coverage and newest interviews.
                        </p>
                    </div>
                </div>
            </div>
            <div className="testimonials__benefit--content">
                <EndlessRiver logos={firstRowLogos} />
                <EndlessRiver logos={secondRowLogos} reverse />
            </div>
        </section>
    );
}

function EndlessRiver({ logos, reverse = false }: { logos: LogoItem[]; reverse?: boolean }) {
    return (
        <div className={`endless-river${reverse ? " endless-river--reverse" : ""}`}>
            <div className="endless-river__track">
                <LogoList logos={logos} />
                <LogoList logos={logos} ariaHidden />
            </div>
        </div>
    );
}

function LogoList({ ariaHidden = false, logos }: { ariaHidden?: boolean; logos: LogoItem[] }) {
    return (
        <ul className="testimonials__benefit--list endless__river" aria-hidden={ariaHidden}>
            {logos.map((item, index) => (
                <li key={`${item.image}-${index}`}>
                    <a href={item.href} target="_blank" rel="noreferrer">
                        <Image loading="lazy" src={item.image} width={item.width} height={item.height} alt="Featured by" />
                    </a>
                </li>
            ))}
        </ul>
    );
}
