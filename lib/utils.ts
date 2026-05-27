/**
 * Utility functions — migrated from common.js
 */

/**
 * Format ISO date string → "Dec-10-2025 06:41:16 AM"
 */
export function formatTimestamp(iso: string): string {
    const d = new Date(iso);
    if (isNaN(d.getTime())) return iso;

    const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    const mon = months[d.getUTCMonth()];
    const day = String(d.getUTCDate()).padStart(2, '0');
    const year = d.getUTCFullYear();
    let h = d.getUTCHours();
    const min = String(d.getUTCMinutes()).padStart(2, '0');
    const sec = String(d.getUTCSeconds()).padStart(2, '0');
    const ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12 || 12;

    return `${mon}-${day}-${year} ${String(h).padStart(2, '0')}:${min}:${sec} ${ampm}`;
}

/**
 * Fetch JSON from URL with loading/error states.
 * React-friendly version — returns data instead of manipulating DOM.
 */
export async function fetchData<T = unknown>(
    url: string,
    opts: {
        dataSelector?: (json: Record<string, unknown>) => T | null;
    } = {}
): Promise<{ data: T | null; error: string | null }> {
    const {
        dataSelector = (json) => (json?.Data ?? json?.data ?? json) as T,
    } = opts;

    try {
        const res = await fetch(url);
        const json = await res.json();
        const data = dataSelector(json);

        if (data === null || data === undefined) {
            return { data: null, error: 'No data found' };
        }

        return { data, error: null };
    } catch (err) {
        console.error(`[fetchData] ${url}`, err);
        return { data: null, error: 'Failed to load data' };
    }
}

/**
 * IntersectionObserver helper — fires callback once when element becomes visible.
 * Meant for use inside useEffect with a ref.
 */
export function observeOnce(
    element: Element | null,
    callback: () => void,
    threshold = 0.2
): (() => void) | undefined {
    if (!element) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    observer.unobserve(element);
                    callback();
                }
            });
        },
        { threshold }
    );

    observer.observe(element);

    // Return cleanup function
    return () => observer.disconnect();
}

/**
 * Set a cookie with expiration in days.
 */
export function setCookie(name: string, value: string, days: number): void {
    const date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    document.cookie = `${name}=${value};expires=${date.toUTCString()};path=/`;
}

/**
 * Check if a cookie exists.
 */
export function hasCookie(name: string): boolean {
    return document.cookie.includes(name);
}
