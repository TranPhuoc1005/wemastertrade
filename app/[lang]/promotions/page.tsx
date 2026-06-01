import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import Hero from "../../../components/sections/Promotions/Hero";
import PromotionsContent from "../../../components/sections/Promotions/PromotionsContent";

export default async function PromotionsPage({
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
            <Hero />
            <div id="content">
                <PromotionsContent lang={lang} />
            </div>
        </main>
    );
}
