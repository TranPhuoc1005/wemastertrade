"use client";

import { usePopup } from "../../hooks/usePopup";

/**
 * Popup WMT — shows once until dismissed (localStorage-based, 14 days).
 * Migrated from: HTML in Header.tsx + IIFE in common.js L419-456
 */
export default function Popup() {
    const { visible, dismiss } = usePopup();

    if (!visible) return null;

    return (
        <div
            id="popup-wmt"
            style={{
                display: "flex",
                position: "fixed",
                inset: 0,
                zIndex: 9999,
                alignItems: "center",
                justifyContent: "center",
                backgroundColor: "rgba(0, 0, 0, 0.7)",
            }}
            onClick={(e) => {
                // Close when clicking backdrop
                if (e.target === e.currentTarget) dismiss();
            }}>
            <div className="popupWmt-content text-center relative">
                <a href="https://my.wemastertrade.com/register/" target="_blank">
                    <img
                        className="popup-hidden"
                        src="/images/code30.jpg"
                        width={600}
                        height={600}
                        alt=""
                    />
                </a>

                <button
                    type="button"
                    className="popupWmt-close no-margin"
                    onClick={dismiss}>
                    X
                </button>
            </div>
        </div>
    );
}
