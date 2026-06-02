import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import Hero from "../../../components/sections/TradingPlatforms/Hero";
import Member from "../../../components/sections/TradingPlatforms/Member";
import Download from "../../../components/sections/TradingPlatforms/Download";

export default async function TradingPlatformsPage({
    params,
}: {
    params: Promise<{
        lang: string;
    }>;
}) {
    const { lang: rawLang } = await params;
    if (!isLocale(rawLang)) notFound();

    const lang = rawLang;
    return (
        <main id="main">
            <Hero lang={lang} />
            <div id="content">
                <Member lang={lang} />
                <Download lang={lang} />
            </div>
        </main>
    );
}
