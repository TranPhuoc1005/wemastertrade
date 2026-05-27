"use client";

import { KeyboardEvent, useState } from "react";

interface UseTabsOptions {
    defaultTab: string;
    group?: string;
    onChange?: (tab: string) => void;
}

export function useTabs({ defaultTab, group, onChange }: UseTabsOptions) {
    const [activeTab, setActiveTab] = useState(defaultTab);

    function selectTab(tab: string) {
        setActiveTab(tab);
        onChange?.(tab);
    }

    function handleTabKeyDown(event: KeyboardEvent<HTMLElement>, tab: string) {
        if (event.key === "Enter" || event.key === " ") {
            event.preventDefault();
            selectTab(tab);
        }
    }

    function getTabProps(tab: string) {
        return {
            "aria-selected": activeTab === tab,
            className: `item${activeTab === tab ? " active" : ""}`,
            "data-tab": tab,
            "data-tab-group": group,
            onClick: () => selectTab(tab),
            onKeyDown: (event: KeyboardEvent<HTMLElement>) => handleTabKeyDown(event, tab),
            role: "tab",
            tabIndex: activeTab === tab ? 0 : -1,
        };
    }

    function getTabPanelProps(tab: string) {
        return {
            className: `item${activeTab === tab ? " active" : ""}`,
            "data-tab-content": tab,
            "data-tab-group": group,
            hidden: activeTab !== tab,
            role: "tabpanel",
        };
    }

    return {
        activeTab,
        getTabPanelProps,
        getTabProps,
        selectTab,
    };
}
