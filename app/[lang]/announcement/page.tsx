import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import { getDictionary } from "../../../lib/i18n/getDictionary";
import Hero from "../../../components/sections/Announcement/Hero";
import Timeline from "../../../components/sections/Announcement/Timeline";
import { getAnnouncementItems } from "../../../services/wordpress/announcement";

export default async function AnnouncementPage({
    params,
}: {
    params: Promise<{
        lang: string;
    }>;
}) {
    const { lang: rawLang } = await params;
    if (!isLocale(rawLang)) notFound();

    const lang = rawLang;
    const dict = await getDictionary(lang);

    // Fetch initial items for the default "all" tab
    const initialResult = await getAnnouncementItems("all", 1, lang);

    return (
        <main id="main">
            <Hero lang={lang} />
            <div id="content">
                <Timeline 
                    lang={lang} 
                    initialItems={initialResult.items} 
                    initialHasMore={initialResult.hasMore} 
                />
            </div>
        </main>
    );
}
