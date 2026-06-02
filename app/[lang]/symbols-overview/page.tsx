import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import HeroSimulated from "../../../components/sections/partials/HeroSimulated";
import Symbols from "../../../components/sections/SimulatedSymbols/Symbols";

export default async function SymbolsOverviewPage({
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
                <Symbols lang={lang} />
            </div>
        </main>
    );
}
