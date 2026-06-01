"use client";

import { useEffect } from "react";

const OFFSET_PC = 100;
const OFFSET_SP = 80;

export function useAnchorLink() {
    useEffect(() => {
        function scrollToElement(el: Element) {
            const offset = window.innerWidth > 750 ? OFFSET_PC : OFFSET_SP;
            const top = el.getBoundingClientRect().top + window.scrollY - offset;

            window.scrollTo({ top, behavior: "smooth" });
        }

        const hash = window.location.hash;
        if (hash) {
            const target = document.querySelector(hash);
            if (target) {
                setTimeout(() => scrollToElement(target), 100);
            }
        }

        function handleClick(e: MouseEvent) {
            const link = (e.target as Element)?.closest('a[href^="#"]');
            if (!link) return;

            const href = link.getAttribute("href");
            if (!href || href === "#") return;

            const target = document.querySelector(href);
            if (!target) return;

            e.preventDefault();
            scrollToElement(target);

            document.documentElement.classList.remove("open-nav", "no-scroll");
            document.querySelector(".hamburger-btn")?.classList.remove("--active");
        }

        document.addEventListener("click", handleClick);
        return () => document.removeEventListener("click", handleClick);
    }, []);
}
