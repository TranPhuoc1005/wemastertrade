import type { AnnouncementResult } from "../types/announcement";

export async function fetchAnnouncementItems(
    type: string,
    page: number,
    lang: string
): Promise<AnnouncementResult> {
    const response = await fetch(`/api/announcement?type=${type}&page=${page}&lang=${lang}`);
    if (!response.ok) {
        throw new Error("Failed to fetch announcements from local API");
    }
    return response.json();
}
