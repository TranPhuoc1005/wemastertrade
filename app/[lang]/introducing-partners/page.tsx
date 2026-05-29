import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import Hero from "../../../components/sections/IntroducingPartners/Hero";
import Best from "../../../components/sections/IntroducingPartners/Best";
import Local from "../../../components/sections/IntroducingPartners/Local";
import Multilevel from "../../../components/sections/IntroducingPartners/Multilevel";

export default async function IntroducingPartnersPage({
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
                <Best lang={lang} />
                <Local lang={lang} />
                <Multilevel lang={lang} />
            </div>
        </main>
    );
}
