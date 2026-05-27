"use client";

import { useEffect } from "react";

/**
 * Adds "fix" class to <header> when page is scrolled >= 10px.
 * Migrated from: jQuery(window).on("load scroll", ...) in common.js L186-193
 */
export function useHeaderScroll() {
    useEffect(() => {
        function handleScroll() {
            const header = document.querySelector("header");
            if (!header) return;

            if (window.scrollY >= 10) {
                header.classList.add("fix");
            } else {
                header.classList.remove("fix");
            }
        }

        // Run on mount
        handleScroll();

        window.addEventListener("scroll", handleScroll, { passive: true });
        return () => window.removeEventListener("scroll", handleScroll);
    }, []);
}
