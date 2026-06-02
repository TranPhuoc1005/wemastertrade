"use client";

import Image from 'next/image'
import Link from 'next/link'
import React from 'react'
import { LangProps } from '../../../types/common'
import { usePathname } from 'next/navigation'

export default function MenuSimulated({lang}: LangProps) {
    const tabs = [
        {
            id: "overview",
            title: "Overview",
            icon: "/images/symbols_overview.png",
            href: "/symbols-overview",
        },
        {
            id: "forex",
            title: "Currencies",
            icon: "/images/symbols_currencies.png",
            href: "/symbols-forex",
        },
        {
            id: "metals",
            title: "Energies",
            icon: "/images/symbols_energies.png",
            href: "/symbols-metals",
        },
        {
            id: "indices",
            title: "Indices",
            icon: "/images/symbols_indices.png",
            href: "/symbols-indices",
        },
        {
            id: "stocks",
            title: "Stocks",
            icon: "/images/symbols_stocks.png",
            href: "/symbols-stocks",
        },
    ]

    const pathname = usePathname();
    return (
        <div className="symbols__btn">
            <ul>
                {tabs.map((tab) => (
                    <li key={tab.id} className={pathname.endsWith(tab.href) ? "active" : ""}>
                        <Link href={`/${lang}${tab.href}`}><Image loading="lazy" src={tab.icon} width="107" height="107" alt={tab.title} /><span className="txt">{tab.title}</span></Link>
                    </li>
                ))}
                {/* <li className="">
                    <a href="symbols-overview/"><Image loading="lazy" src="/images/symbols_overview.png" width="107" height="107" alt="Overview" /><span className="txt">Overview</span></a>
                </li>
                <li className="">
                    <a href="forex/"><Image loading="lazy" src="/images/symbols_currencies.png" width="107" height="107" alt="Currencies" /><span className="txt">Simulated Currencies</span></a>
                </li>
                <li className="">
                    <a href="metals/"><Image loading="lazy" src="/images/symbols_energies.png" width="107" height="107" alt="Energies" /><span className="txt">Simulated Energies</span></a>
                </li>
                <li className="">
                    <a href="indices/"><Image loading="lazy" src="/images/symbols_indices.png" width="107" height="107" alt="Indices" /><span className="txt">Simulated Indices</span></a>
                </li>
                <li className="">
                    <a href="stocks-cfds/"><Image loading="lazy" src="/images/symbols_stocks.png" width="107" height="107" alt="Stocks" /><span className="txt">Simulated Stocks</span></a>
                </li> */}
            </ul>
        </div>
    )
}
