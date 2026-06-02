import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import HeroSimulated from "../../../components/sections/partials/HeroSimulated";
import Stocks from "../../../components/sections/SimulatedStocks/Stocks";

export default async function SymbolsStocksPage({
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
                <Stocks lang={lang} />
            </div>
        </main>
    );
}
