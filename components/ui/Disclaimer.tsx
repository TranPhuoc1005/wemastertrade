"use client";

import { useDisclaimer } from "../../hooks/useDisclaimer";

/**
 * Disclaimer banner — shows once until dismissed (cookie-based, 14 days).
 * Migrated from: HTML in Header.tsx + JS in common.js L404-416
 */
export default function Disclaimer() {
    const { visible, dismiss } = useDisclaimer();

    if (!visible) return null;

    return (
        <div className="footer-warning" id="disclaimer" style={{ display: "flex" }}>
            <p>
                Our clients receive simulation accounts with virtual funds for trading in the virtual world.
                Additionally, our exclusive algorithms will copy the client&apos;s trades to our live trading
                accounts.
                <a href="https://faq.wemastertrade.com/" target="_blank">
                    FAQ section.
                </a>
                <span
                    className="footer-warning-close text-center"
                    id="close-disclaimer"
                    onClick={dismiss}
                    style={{ cursor: "pointer" }}>
                    x
                </span>
            </p>
        </div>
    );
}
