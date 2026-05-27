"use client";

import Link from "next/link";
import { useMobileMenu } from "../../hooks/useMobileMenu";
import type { Locale } from "../../lib/i18n/config";
import { getLocaleMeta } from "../../lib/i18n/config";
import { localizedPath } from "../../lib/i18n/routing";
import type { Dictionary } from "../../lib/i18n/types";
import LanguageSwitcher from "./LanguageSwitcher";

interface Props {
    dict: Dictionary["common"]["header"];
    lang: Locale;
}

export default function Header({ dict, lang }: Props) {
    const { menuOpen, toggleMenu, toggleDropdown, closeMenu, isDropdownOpen } = useMobileMenu();
    const localeMeta = getLocaleMeta(lang);

    return (
        <header id="header" className="header hd__football">
            <div className="header-main">
                {/* LOGO */}
                <div className="logo">
                    <Link href={localizedPath(lang)}>
                        <img
                            loading="lazy"
                            src="/images/logo.png"
                            width={128}
                            height={60}
                            alt="We Master Trade"
                        />
                    </Link>
                </div>

                {/* MOBILE LANG */}
                <ul className="region-sp block992">
                    <li className="dropdown header-region">
                        <p
                            className={`menu-tt ${isDropdownOpen(99) ? "open" : ""}`}
                            onClick={() => toggleDropdown(99)}>
                            <span className="flag">
                                <img
                                    loading="lazy"
                                    src={localeMeta.flag}
                                    width={16}
                                    height={11}
                                    alt=""
                                />
                            </span>
                            {lang.toUpperCase()}
                        </p>

                        <ul
                            className="hsub-menu"
                            style={isDropdownOpen(99) ? { display: "block" } : undefined}>
                            <div className="region-sp-frame">
                                <LanguageSwitcher currentLang={lang} />
                            </div>
                        </ul>
                    </li>
                </ul>

                {/* HAMBURGER */}
                <div
                    className={`hamburger-btn ${menuOpen ? "--active" : ""}`}
                    onClick={toggleMenu}>
                    <div className="bar"></div>
                </div>

                {/* CONTENT */}
                <div className={`header-content ${menuOpen ? "active" : ""}`}>
                    {/* MENU */}
                    <div className="header-menu">
                        <ul className="menu-list">
                            {/* INSTANT */}
                            <li className="dropdown">
                                <p
                                    className={`menu-tt ${isDropdownOpen(0) ? "open" : ""}`}
                                    onClick={() => toggleDropdown(0)}>
                                    {dict.instantEvaluation}
                                </p>

                                <ul
                                    className="hsub-menu"
                                    style={isDropdownOpen(0) ? { display: "block" } : undefined}>
                                    <li>
                                        <Link href={localizedPath(lang, "#challenge_package")} onClick={closeMenu}>
                                            {dict.challenge}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/instant")} onClick={closeMenu}>
                                            {dict.instant}
                                        </Link>
                                    </li>
                                </ul>
                            </li>

                            {/* TESTIMONIALS */}
                            <li>
                                <Link href={localizedPath(lang, "/testimonials")} className="menu-tt" onClick={closeMenu}>
                                    {dict.testimonials}
                                </Link>
                            </li>

                            {/* Introducing Partners */}
                            <li>
                                <Link href={localizedPath(lang, "/introducing-partners")} className="menu-tt" onClick={closeMenu}>
                                    {dict.introducingPartners}
                                </Link>
                            </li>

                            {/* PROMOTIONS */}
                            <li>
                                <Link href={localizedPath(lang, "/promotions")} className="menu-tt" onClick={closeMenu}>
                                    {dict.promotions}
                                </Link>
                            </li>

                            {/* FAQ */}
                            <li>
                                <a
                                    href="https://faq.wemastertrade.com/"
                                    target="_blank"
                                    rel="nofollow"
                                    className="menu-tt">
                                    {dict.faq}
                                </a>
                            </li>

                            {/* ABOUT */}
                            <li className="dropdown">
                                <p
                                    className={`menu-tt ${isDropdownOpen(1) ? "open" : ""}`}
                                    onClick={() => toggleDropdown(1)}>
                                    {dict.aboutUs}
                                </p>

                                <ul
                                    className="hsub-menu"
                                    style={isDropdownOpen(1) ? { display: "block" } : undefined}>
                                    <li>
                                        <Link href={localizedPath(lang, "/about-us")} onClick={closeMenu}>
                                            {dict.weMasterTrade}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/announcement")} onClick={closeMenu}>
                                            {dict.announcement}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/academy")} onClick={closeMenu}>
                                            {dict.academy}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/certification")} onClick={closeMenu}>
                                            {dict.certification}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/contact-us")} onClick={closeMenu}>
                                            {dict.contactUs}
                                        </Link>
                                    </li>
                                </ul>
                            </li>

                            {/* PAYOUT */}
                            <li className="dropdown">
                                <p
                                    className={`menu-tt ${isDropdownOpen(2) ? "open" : ""}`}
                                    onClick={() => toggleDropdown(2)}>
                                    {dict.payout}
                                </p>

                                <ul
                                    className="hsub-menu"
                                    style={isDropdownOpen(2) ? { display: "block" } : undefined}>
                                    <li>
                                        <Link href={localizedPath(lang, "/payout")} onClick={closeMenu}>
                                            {dict.payout}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/capital-and-profit")} onClick={closeMenu}>
                                            {dict.rewardsProfitSharing}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/scale-up-plan")} onClick={closeMenu}>
                                            {dict.scaleUpPlan}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/symbols-overview")} onClick={closeMenu}>
                                            {dict.simulatedSymbols}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/seminar")} onClick={closeMenu}>
                                            {dict.seminar}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/blog")} onClick={closeMenu}>
                                            {dict.blog}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/trading-platforms")} onClick={closeMenu}>
                                            {dict.tradingPlatforms}
                                        </Link>
                                    </li>
                                    <li>
                                        <Link href={localizedPath(lang, "/localpay")} onClick={closeMenu}>
                                            {dict.paymentMethods}
                                        </Link>
                                    </li>
                                </ul>
                            </li>

                            {/* MOBILE LOGIN */}
                            <li className="header-login-resister block992">
                                <p className="login active">
                                    <a
                                        href="https://my.wemastertrade.com/login/"
                                        target="_blank"
                                        rel="nofollow">
                                        {dict.login}
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>

                    {/* RIGHT */}
                    <div className="header-act">
                        {/* LANGUAGE */}
                        <ul className="dropdown header-region">
                            <li className="menu-tt">
                                <span className="flag">
                                    <img
                                        loading="lazy"
                                        src={localeMeta.flag}
                                        width={20}
                                        height={20}
                                        alt=""
                                    />
                                </span>
                                {lang.toUpperCase()}
                            </li>

                            <ul className="hsub-menu">
                                <LanguageSwitcher currentLang={lang} />
                            </ul>
                        </ul>

                        {/* LOGIN */}
                        <div className="header-login-resister">
                            <p className="login active">
                                <a href="https://my.wemastertrade.com/login" target="_blank" rel="nofollow">
                                    {dict.login}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    );
}
