// Announcement page interfaces and types

export interface AnnouncementCategory {
    label: string;
    cats: string;
}

export interface AnnouncementItem {
    title: string;
    excerpt_html: string;
    thumb: string;
    thumb_mobile: string;
    date: string;
    link: string;
    cta_label: string;
    cta_url: string;
    iconClass: string;
}

export interface AnnouncementResult {
    success: boolean;
    items: AnnouncementItem[];
    hasMore: boolean;
}

export interface AnnouncementTranslations {
    all: string;
    promotions: string;
    seminar: string;
    readMore: string;
    loadMore: string;
    noData: string;
    loading: string;
}

export interface AnnouncementTab {
    type: string;
    /** data-tl-content attribute value used for CSS/JS targeting */
    contentKey: string;
}

export interface TimelineProps {
    lang: string;
    initialItems: AnnouncementItem[];
    initialHasMore: boolean;
}

export interface TabState {
    items: AnnouncementItem[];
    page: number;
    hasMore: boolean;
}

export interface TimelineCardProps {
    item: AnnouncementItem;
    readMoreLabel: string;
}
