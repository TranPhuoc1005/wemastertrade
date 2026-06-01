"use client";

import { useState, useEffect, useCallback } from "react";
import { hasCookie, setCookie } from "../lib/utils";

const COOKIE_NAME = "disclaimer";
const EXPIRE_DAYS = 14;

export function useDisclaimer() {
    const [visible, setVisible] = useState(false);

    useEffect(() => {
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
