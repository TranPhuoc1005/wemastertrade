const BASE_URL = process.env.NEXT_PUBLIC_WP_API || "https://wemastertrade.com";

export interface VideoItem {
    videoId: string;
    thumbnail: string;
    title: string;
}

export interface ContinentPayoutItem {
    continentName: string;
    payoutAmount: string | number;
    payoutPercentage: string | number;
    payoutCount: number;
}

export interface PayoutChartResponse {
    success: boolean;
    data: {
        items: ContinentPayoutItem[];
        totalPayoutAmount: number;
    };
}

export interface PayoutTableRow {
    fullName: string;
    payout: string | number;
    accountSize: string | number;
    countryName: string;
    createdAt?: string;
    timestamp?: string;
    transactionHash?: string;
    certificateUrl?: string;
}

export interface PayoutTableResponse {
    success: boolean;
    data: PayoutTableRow[];
    paging: {
        totalItem: number;
        totalPage: number;
        limit: number;
        page: number;
    };
}

// 1. API lấy danh sách video YouTube
export async function getYoutubePlaylist(playlistId?: string): Promise<VideoItem[]> {
    const url = playlistId 
        ? `${BASE_URL}/wp-json/custom/v1/youtube-playlist?playlist=${playlistId}`
        : `${BASE_URL}/wp-json/custom/v1/youtube-playlist`;
        
    const res = await fetch(url);
    if (!res.ok) throw new Error("Failed to fetch youtube playlist");
    return res.json();
}

// 2. API lấy dữ liệu biểu đồ thống kê payout theo khu vực
export async function getContinentPayout(filterRange: string): Promise<PayoutChartResponse> {
    const res = await fetch(`${BASE_URL}/wp-json/custom/v1/continent-payout?filterRange=${filterRange}`);
    if (!res.ok) throw new Error("Failed to fetch continent payouts");
    return res.json();
}

// 3. API lấy danh sách thanh toán hàng ngày
export async function getDailyPayoutTable(page: number, search: string): Promise<PayoutTableResponse> {
    const res = await fetch(
        `${BASE_URL}/wp-json/custom/v1/daily-payout?page=${page}&limit=10&search=${encodeURIComponent(search)}`
    );
    if (!res.ok) throw new Error("Failed to fetch daily payouts");
    return res.json();
}
