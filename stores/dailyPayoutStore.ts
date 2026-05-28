import { create } from "zustand";

export const FIRST_DAILY_PAYOUT_LOAD = 9;
export const DAILY_PAYOUT_LOAD_MORE_STEP = 3;
export const MAX_DAILY_PAYOUT_LOAD_MORE_CLICKS = 3;

interface DailyPayoutState {
    displayCount: number;
    expanded: boolean;
    loadMoreClicks: number;
    loadMore: () => void;
    reset: () => void;
}

export const useDailyPayoutStore = create<DailyPayoutState>((set) => ({
    displayCount: FIRST_DAILY_PAYOUT_LOAD,
    expanded: false,
    loadMoreClicks: 0,
    loadMore: () =>
        set((state) => ({
            displayCount: state.displayCount + DAILY_PAYOUT_LOAD_MORE_STEP,
            expanded: true,
            loadMoreClicks: state.loadMoreClicks + 1,
        })),
    reset: () =>
        set({
            displayCount: FIRST_DAILY_PAYOUT_LOAD,
            expanded: false,
            loadMoreClicks: 0,
        }),
}));
