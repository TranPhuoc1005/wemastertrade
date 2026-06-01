"use client";

import { Fancybox } from "@fancyapps/ui";
import { useEffect } from "react";

export default function Lightbox() {
    useEffect(() => {
        function handleClick(event: MouseEvent) {
            const trigger = (event.target as Element | null)?.closest(".lightbox-item");
            if (!(trigger instanceof HTMLElement)) return;

            const videoSrc = trigger.dataset.video;
            const imageSrc = trigger.dataset.src || trigger.dataset.image;

            if (!videoSrc && !imageSrc) return;

            event.preventDefault();

            if (videoSrc) {
                Fancybox.show([
                    {
                        autoplay: true,
                        src: videoSrc,
                        type: "html5video",
                    },
                ]);
                return;
            }

            if (imageSrc) {
                const absoluteSrc = imageSrc.startsWith("/") && !imageSrc.startsWith("//")
                    ? `${window.location.origin}${imageSrc}`
                    : imageSrc;

                Fancybox.show([
                    {
                        src: absoluteSrc,
                        type: "image",
                    },
                ]);
            }
        }

        document.addEventListener("click", handleClick);

        return () => {
            document.removeEventListener("click", handleClick);
            Fancybox.close();
        };
    }, []);

    return null;
}
