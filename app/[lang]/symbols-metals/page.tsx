import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import Metals from "../../../components/sections/SimulatedMetals/Metals";
import HeroSimulated from "../../../components/sections/partials/HeroSimulated";

export default async function SymbolsMetalsPage({
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
            <HeroSimulated lang={lang} />
            <div id="content">
                <Metals lang={lang} />
            </div>
        </main>
    );
}
