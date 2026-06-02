"use client";

import Image from "next/image";
import { useMemo, useState } from "react";

interface Country {
    name: string;
    flag: string;
}

interface Logo {
    alt: string;
    src: string;
}

interface Method {
    description: React.ReactNode;
    logos?: Logo[];
    list?: React.ReactNode[];
    method: string;
    sideLogo?: Logo;
}

const countries: Country[] = [
    { name: "Singapore", flag: "/images/local_flag_sing.png" },
    { name: "Australia", flag: "/images/local_flag_australia.png" },
    { name: "USA", flag: "/images/local_flag_usa.png" },
    { name: "Canada", flag: "/images/local_flag_canada.png" },
    { name: "Hong Kong", flag: "/images/local_flag_hongkong.png" },
    { name: "Malaysia", flag: "/images/local_flag_malaysia.png" },
    { name: "Philippines", flag: "/images/local_flag_philippines.png" },
    { name: "New Zealand", flag: "/images/local_flag_newzealand.png" },
    { name: "Vietnam", flag: "/images/local_flag_vietnam.png" },
    { name: "Thailand", flag: "/images/local_flag_thailand.png" },
    { name: "Japan", flag: "/images/local_flag_japan.png" },
    { name: "India", flag: "/images/local_flag_india.png" },
    { name: "Brazil", flag: "/images/local_flag_brazil.png" },
    { name: "Mexico", flag: "/images/local_flag_mexico.png" },
    { name: "Colombia", flag: "/images/local_flag_colombia.png" },
    { name: "South Africa", flag: "/images/local_flag_southafrica.png" },
    { name: "Ghana", flag: "/images/local_flag_ghana.png" },
    { name: "Benin", flag: "/images/local_flag_benin.png" },
    { name: "Uganda", flag: "/images/local_flag_uganda.png" },
    { name: "Bangladesh", flag: "/images/local_flag_bangladesh.png" },
    { name: "China", flag: "/images/local_flag_china.png" },
    { name: "Indonesia", flag: "/images/local_flag_indonesia.png" },
    { name: "Cambodia", flag: "/images/local_flag_cambodia.png" },
];

const defaultPaypalMethod: Method = {
    method: "Method 1",
    description: <p>Pay WeCopy Fintech Inc using PayPal.Me.</p>,
    list: [
        <>
            Scan the QR Code
            <span className="qr__icon">
                <Image loading="lazy" src="/images/local_qr.png" width={22} height={22} alt="Pay WeCopy Fintech Inc using PayPal.Me." />
                <Image className="qr__hover" src="/images/local_qr_hv1.png" width={140} height={140} alt="Paypal" />
            </span>
        </>,
        <>
            Or go to <strong>paypal.me/wemastertrade</strong> and type in the amount. Since it&apos;s PayPal, it&apos;s easy and secure.
        </>,
    ],
};

const extraMethods: Record<string, Method[]> = {
    Malaysia: [
        {
            method: "Method 2",
            description: (
                <p>
                    We support payments via <strong>Boost, GrabPay, MAE, Touch &apos;n Go, DuitNow, and FPX</strong> in Malaysia - the
                    country&apos;s most trusted and widely used digital payment methods.
                </p>
            ),
            logos: [
                { alt: "Boost", src: "/images/method_malaysia_logo1.jpg" },
                { alt: "DuitNow", src: "/images/method_malaysia_logo2.jpg" },
                { alt: "FPX", src: "/images/method_malaysia_logo3.jpg" },
                { alt: "GrabPay", src: "/images/method_malaysia_logo4.jpg" },
                { alt: "MAE", src: "/images/method_malaysia_logo5.jpg" },
                { alt: "TouchGo", src: "/images/method_malaysia_logo6.jpg" },
            ],
        },
    ],
    Philippines: [
        {
            method: "Method 2",
            description: (
                <p>
                    With Wemastertrade, you can pay seamlessly in the Philippines using <strong>GCash, GrabPay, PayMaya, and QRPh</strong>{" "}
                    - fast, secure, and convenient mobile and QR payments.
                </p>
            ),
            logos: [
                { alt: "GCash", src: "/images/method_philippines_logo1.jpg" },
                { alt: "GrabPay", src: "/images/method_philippines_logo2.jpg" },
                { alt: "PayMaya", src: "/images/method_philippines_logo3.jpg" },
                { alt: "QRPh", src: "/images/method_philippines_logo4.jpg" },
            ],
        },
    ],
    "New Zealand": [
        {
            method: "Method 2",
            description: <p>Here are the NZD account details for <strong>WeCopy Fintech Inc.</strong></p>,
            list: [
                <>
                    <strong>Account number:</strong> 04-2021-0214867-28
                </>,
                <>
                    <strong>Wise&apos;s address:</strong> 56 Shoreditch High Street, London E1 6JJ United Kingdom
                </>,
            ],
        },
    ],
    Vietnam: [
        {
            method: "Method 2",
            description: <p>WeMasterTrade enables payments via NAPAS and local Vietnam bank QR Code. Log in now to explore more details!</p>,
            sideLogo: { alt: "VietQR", src: "/images/method_vietnam_logo1.jpg" },
        },
    ],
    Thailand: [
        {
            method: "Method 2",
            description: <p>We support <strong>PromptPay!</strong> Settle your payments directly through your Thai mobile banking app.</p>,
            sideLogo: { alt: "PromptPay", src: "/images/method_thailand_logo1.jpg" },
        },
        {
            method: "Method 3",
            description: <p>We support <strong>Bank Transfer</strong>. Settle your payments directly through your Thai mobile banking app.</p>,
            sideLogo: { alt: "Bank Transfer", src: "/images/new-thai.jpg" },
        },
    ],
    India: [
        {
            method: "Method 2",
            description: <p>We have integrated the <strong>Unified Payments Interface (UPI)</strong> payment method to serve you better!</p>,
            sideLogo: { alt: "Unified Payments Interface (UPI)", src: "/images/method_india_logo1.jpg" },
        },
        {
            method: "Method 3",
            description: <p>Make your payments easily and quickly through the <strong>PayTM</strong> e-wallet - a secure and convenient method trusted by millions across India.</p>,
            sideLogo: { alt: "PayTM", src: "/images/method_india_logo2.jpg" },
        },
    ],
    Brazil: [
        {
            method: "Method 2",
            description: <p><strong>Pix (Central Bank of Brazil)</strong> is now available as a payment option.</p>,
            sideLogo: { alt: "Pix (Central Bank of Brazil)", src: "/images/method_brazil_logo1.png" },
        },
    ],
    Mexico: [
        {
            method: "Method 2",
            description: <p>We support payments through SPEI - Mexico&apos;s trusted real-time transfer system.</p>,
            sideLogo: { alt: "SPEI", src: "/images/method_mexico_logo1.png" },
        },
    ],
    Colombia: [
        {
            method: "Method 2",
            description: <p>Pay with Nequi &amp; PSE: trusted by millions of Colombians, designed for instant and seamless payments.</p>,
            sideLogo: { alt: "Pay with Nequi & PSE", src: "/images/method_colombia_logo1.png" },
        },
    ],
    "South Africa": [
        {
            method: "Method 2",
            description: <p>We support payments via EFT in South Africa - the trusted local bank transfer method.</p>,
            sideLogo: { alt: "EFT", src: "/images/method_southafrica_logo1.png" },
        },
    ],
    Ghana: [
        {
            method: "Method 2",
            description: <p>We support payments via <strong>Airtel Tigo, Vodafone, and MTN</strong> in Ghana.</p>,
            sideLogo: { alt: "Airtel Tigo, Vodafone, and MTN", src: "/images/method_ghana_logo1.png" },
        },
    ],
    Benin: [
        {
            method: "Method 2",
            description: <p>Pay with <strong>MTN &amp; Moov</strong>: fast, secure, and widely trusted in Benin.</p>,
            sideLogo: { alt: "MTN & Moov", src: "/images/method_benin_logo1.png" },
        },
    ],
    Uganda: [
        {
            method: "Method 2",
            description: <p><strong>Airtel, MTN &amp; Vodafone</strong> are now available in Uganda - experience fast, safe, and hassle-free mobile payments.</p>,
            sideLogo: { alt: "Airtel, MTN & Vodafone", src: "/images/method_uganda_logo1.png" },
        },
    ],
    Bangladesh: [
        {
            method: "Method 2",
            description: <p>We support payments via <strong>Bkash</strong> in Bangladesh - the nation&apos;s leading mobile wallet, trusted by over 70 million users for fast and secure transactions.</p>,
            sideLogo: { alt: "Bkash", src: "/images/method_bangladesh_logo1.png" },
        },
    ],
    China: [
        {
            method: "Method 2",
            description: <p>We support payments via <strong>Alipay</strong> in China - the nation&apos;s leading digital wallet, trusted by hundreds of millions of users for everyday purchases, online shopping, and seamless mobile payments.</p>,
            sideLogo: { alt: "Alipay", src: "/images/method_china_logo1.png" },
        },
    ],
    Indonesia: [
        {
            method: "Method 2",
            description: <p>With <strong>QRIS</strong>, you can enjoy instant, secure, and universal payments - one QR code accepted everywhere in Indonesia, from street vendors to major online platforms.</p>,
            sideLogo: { alt: "QRIS", src: "/images/method_indonesia_logo1.png" },
        },
    ],
    Cambodia: [
        {
            method: "Method 2",
            description: <p>Pay with <strong>ABA Bank or Wing Bank</strong>: seamless transfers, strong security, and nationwide coverage across Cambodia.</p>,
            sideLogo: { alt: "ABA Bank or Wing Bank", src: "/images/method_cambodia_logo1.png" },
        },
    ],
};

export default function LocalPayment() {
    const [activeCountry, setActiveCountry] = useState(countries[0].name);
    const methods = useMemo(() => [defaultPaypalMethod, ...(extraMethods[activeCountry] ?? [])], [activeCountry]);

    return (
        <section className="local">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">The Local Payment</p>
                    <h3>
                        Not only that, we are supporting
                        <br />
                        <span>
                            the local payments via big banks
                            <br />
                            in many countries
                        </span>
                    </h3>
                </div>
                <div className="local__flag">
                    <ul>
                        {countries.map((country) => (
                            <li
                                className={country.name === activeCountry ? "active" : ""}
                                key={country.name}
                                onClick={() => setActiveCountry(country.name)}
                                onKeyDown={(event) => {
                                    if (event.key === "Enter" || event.key === " ") setActiveCountry(country.name);
                                }}
                                role="button"
                                tabIndex={0}
                            >
                                <Image loading="lazy" src={country.flag} width={38} height={38} alt={country.name} />
                                {country.name}
                            </li>
                        ))}
                    </ul>
                </div>

                <div className="local__content">
                    <div className="local__main">
                        <div className="local__name">
                            <p className="txt">The local payment method in</p>
                            <p className="name">{activeCountry}</p>
                        </div>
                        <p className="local__main--img">
                            <Image loading="lazy" src="/images/local_name_dc.png" width={1562} height={1263} alt={activeCountry} />
                        </p>
                    </div>
                    <div className="local__method">
                        {methods.map((method) => (
                            <PaymentMethod item={method} key={method.method} />
                        ))}
                    </div>
                </div>
            </div>
        </section>
    );
}

function PaymentMethod({ item }: { item: Method }) {
    return (
        <div className="item">
            <p className="item__method">{item.method}</p>
            <div className="desc">
                {item.sideLogo ? (
                    <div className="d-flex">
                        {item.description}
                        <p className="item_logo">
                            <Image loading="lazy" src={item.sideLogo.src} width={186} height={186} alt={item.sideLogo.alt} />
                        </p>
                    </div>
                ) : (
                    item.description
                )}
                {item.list ? (
                    <ol className={item.method === "Method 2" && !item.sideLogo ? "list" : undefined}>
                        {item.list.map((listItem, index) => (
                            <li key={index}>{listItem}</li>
                        ))}
                    </ol>
                ) : null}
                {item.logos ? (
                    <ul className="list_logo">
                        {item.logos.map((logo) => (
                            <li key={logo.src}>
                                <Image loading="lazy" src={logo.src} width={96} height={96} alt={logo.alt} />
                            </li>
                        ))}
                    </ul>
                ) : null}
            </div>
        </div>
    );
}
