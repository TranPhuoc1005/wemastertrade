"use client";

import { useState, useEffect, useCallback } from "react";

/**
 * YouTube popup modal — opens YouTube embed in a fullscreen overlay.
 * Listens for clicks on .play-video and elements with data-youtube-id.
 * Migrated from: jQuery youtube-popup handler in common.js L1156-1199
 */
export default function YoutubePopup() {
    const [videoId, setVideoId] = useState<string | null>(null);

    const close = useCallback(() => {
        setVideoId(null);
        document.body.style.overflow = "";
    }, []);

    // Listen for clicks on video trigger elements
    useEffect(() => {
        function handleClick(e: MouseEvent) {
            const el = (e.target as Element)?.closest(".play-video, [data-youtube-id]");
            if (!el) return;

            const id =
                el.getAttribute("data-youtube-id") ||
                el.getAttribute("data-video");
            if (!id) return;

            e.preventDefault();
            setVideoId(id);
            document.body.style.overflow = "hidden";
        }

        document.addEventListener("click", handleClick);
        return () => document.removeEventListener("click", handleClick);
    }, []);

    // Close on ESC key
    useEffect(() => {
        if (!videoId) return;

        function handleKeydown(e: KeyboardEvent) {
            if (e.key === "Escape") close();
        }

        document.addEventListener("keydown", handleKeydown);
        return () => document.removeEventListener("keydown", handleKeydown);
    }, [videoId, close]);

    if (!videoId) return null;

    return (
        <div
            className="youtube-popup active"
            style={{
                display: "flex",
                position: "fixed",
                inset: 0,
                zIndex: 99999,
                alignItems: "center",
                justifyContent: "center",
                backgroundColor: "rgba(0, 0, 0, 0.85)",
            }}
            onClick={(e) => {
                if (e.target === e.currentTarget) close();
            }}>
            <div
                style={{
                    position: "relative",
                    width: "90vw",
                    maxWidth: "900px",
                    aspectRatio: "16/9",
                }}>
                <button
                    className="youtube-popup__close"
                    onClick={close}
                    style={{
                        position: "absolute",
                        top: "-40px",
                        right: 0,
                        background: "none",
                        border: "none",
                        color: "#fff",
                        fontSize: "28px",
                        cursor: "pointer",
                        zIndex: 1,
                    }}>
                    ✕
                </button>
                <iframe
                    src={`https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`}
                    style={{
                        width: "100%",
                        height: "100%",
                        border: "none",
                        borderRadius: "8px",
                    }}
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowFullScreen
                />
            </div>
        </div>
    );
}
