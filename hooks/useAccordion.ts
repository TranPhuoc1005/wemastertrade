"use client";

import { KeyboardEvent, useState } from "react";

interface UseAccordionOptions {
    defaultOpenIds?: string[];
}

export function useAccordion({ defaultOpenIds = [] }: UseAccordionOptions = {}) {
    const [openIds, setOpenIds] = useState<string[]>(defaultOpenIds);

    function isOpen(id: string) {
        return openIds.includes(id);
    }

    function toggle(id: string) {
        setOpenIds((current) => (current.includes(id) ? current.filter((item) => item !== id) : [...current, id]));
    }

    function handleKeyDown(event: KeyboardEvent<HTMLElement>, id: string) {
        if (event.key === "Enter" || event.key === " ") {
            event.preventDefault();
            toggle(id);
        }
    }

    function getButtonProps(id: string) {
        return {
            "aria-controls": `${id}-content`,
            "aria-expanded": isOpen(id),
            className: `accordion-button${isOpen(id) ? " open" : ""}`,
            id,
            onClick: () => toggle(id),
            onKeyDown: (event: KeyboardEvent<HTMLElement>) => handleKeyDown(event, id),
            role: "button",
            tabIndex: 0,
        };
    }

    function getContentProps(id: string) {
        return {
            "data-accordion-for": id,
            hidden: !isOpen(id),
            id: `${id}-content`,
        };
    }

    return {
        getButtonProps,
        getContentProps,
        isOpen,
        openIds,
        toggle,
    };
}
