import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import Hero from "../../../components/sections/Academy/Hero";
import Academy from "../../../components/sections/Academy/Academy";
import Spreads from "../../../components/sections/partials/Spreads";

export default async function AcademyPage({
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
                <Academy lang={lang} />
                <Spreads />
            </div>
        </main>
    );
}
