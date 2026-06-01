"use client";

import { useState, useCallback, useEffect } from "react";

export function useMobileMenu() {
    const [menuOpen, setMenuOpen] = useState(false);
    const [openDropdowns, setOpenDropdowns] = useState<Set<number>>(new Set());

    useEffect(() => {
        const html = document.documentElement;
        if (menuOpen) {
            html.classList.add("open-nav", "no-scroll");
        } else {
            html.classList.remove("open-nav", "no-scroll");
        }

        return () => {
            html.classList.remove("open-nav", "no-scroll");
        };
    }, [menuOpen]);

    useEffect(() => {
        function handleResize() {
            if (window.innerWidth >= 993) {
                setOpenDropdowns(new Set());
                setMenuOpen(false);
            }
        }

        window.addEventListener("resize", handleResize);
        return () => window.removeEventListener("resize", handleResize);
    }, []);

    useEffect(() => {
        if (openDropdowns.size === 0) return;

        function handleClickOutside(e: MouseEvent) {
            const target = e.target as Element;
            if (target.closest(".dropdown")) return;
            setOpenDropdowns(new Set());
        }

        document.addEventListener("click", handleClickOutside);
        return () => document.removeEventListener("click", handleClickOutside);
    }, [openDropdowns.size]);

    const toggleMenu = useCallback(() => {
        setMenuOpen((prev) => !prev);
    }, []);

    const toggleDropdown = useCallback((index: number) => {
        if (window.innerWidth > 992) return;

        setOpenDropdowns((prev) => {
            const next = new Set(prev);
            if (next.has(index)) {
                next.delete(index);
            } else {
                next.add(index);
            }
            return next;
        });
    }, []);

    const closeMenu = useCallback(() => {
        setMenuOpen(false);
        setOpenDropdowns(new Set());
    }, []);

    const isDropdownOpen = useCallback(
        (index: number) => openDropdowns.has(index),
        [openDropdowns]
    );

    return {
        menuOpen,
        toggleMenu,
        toggleDropdown,
        closeMenu,
        isDropdownOpen,
    };
}
