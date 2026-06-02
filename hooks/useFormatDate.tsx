"use client";

import React from "react";

/**
 * Formats an ISO date string into a styled React node: "DD.MM.YYYY<br/>HH:MM"
 * Reusable across timeline/blog components.
 */
export function useFormatDate() {
    function formatDate(dateStr: string): React.ReactNode {
        if (!dateStr) return null;
        const date = new Date(dateStr);
        if (isNaN(date.getTime())) return null;

        const day = String(date.getDate()).padStart(2, "0");
        const month = String(date.getMonth() + 1).padStart(2, "0");
        const year = date.getFullYear();
        const hours = String(date.getHours()).padStart(2, "0");
        const minutes = String(date.getMinutes()).padStart(2, "0");

        return (
            <>
                {day}.{month}.{year}
                <br />
                {hours}:{minutes}
            </>
        );
    }

    return { formatDate };
}
