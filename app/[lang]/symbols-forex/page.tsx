import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import Forex from "../../../components/sections/SimulatedForex/Forex";
import HeroSimulated from "../../../components/sections/partials/HeroSimulated";

export default async function SymbolsForexPage({
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
                <Forex lang={lang} />
            </div>
        </main>
    );
}
