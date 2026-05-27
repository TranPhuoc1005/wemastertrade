"use client";

import { useHeaderScroll } from "../../hooks/useHeaderScroll";
import { useAnchorLink } from "../../hooks/useAnchorLink";
import Disclaimer from "../ui/Disclaimer";
import Popup from "../ui/Popup";
import YoutubePopup from "../ui/YoutubePopup";

/**
 * GlobalScripts — mounts all global hooks and UI overlays.
 * Place this once in [lang]/layout.tsx.
 * Replaces: <Script src="/js/common.js" />
 */
export default function GlobalScripts() {
    useHeaderScroll();
    useAnchorLink();

    return (
        <>
            <Disclaimer />
            <Popup />
            <YoutubePopup />
        </>
    );
}
