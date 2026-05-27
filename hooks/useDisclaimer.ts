"use client";

import { useState, useEffect, useCallback } from "react";
import { hasCookie, setCookie } from "../lib/utils";

const COOKIE_NAME = "disclaimer";
const EXPIRE_DAYS = 14;

/**
 * Cookie-based disclaimer banner state.
 * Shows banner if cookie not set; dismissing sets cookie for 14 days.
 * Migrated from: common.js L404-416
 */
export function useDisclaimer() {
    const [visible, setVisible] = useState(false);

    useEffect(() => {
        // Only show if cookie not present
        if (!hasCookie(COOKIE_NAME)) {
            setVisible(true);
        }
    }, []);

    const dismiss = useCallback(() => {
        setVisible(false);
        setCookie(COOKIE_NAME, "true", EXPIRE_DAYS);
    }, []);

    return { visible, dismiss };
}
