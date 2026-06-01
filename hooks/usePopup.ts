"use client";

import { useState, useEffect, useCallback } from "react";

const STORAGE_KEY = "wmt_popup_closed_time";
const EXPIRE_DAYS = 14;

export function usePopup() {
    const [visible, setVisible] = useState(false);

    useEffect(() => {
        const savedTime = localStorage.getItem(STORAGE_KEY);
        if (!savedTime) {
            setVisible(true);
            return;
        }

        const now = Date.now();
        const diffDays = (now - Number(savedTime)) / (1000 * 60 * 60 * 24);

        if (diffDays >= EXPIRE_DAYS) {
            setVisible(true);
        }
    }, []);

    const dismiss = useCallback(() => {
        setVisible(false);
        localStorage.setItem(STORAGE_KEY, String(Date.now()));
    }, []);

    return { visible, dismiss };
}
