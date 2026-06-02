import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import HeroSimulated from "../../../components/sections/partials/HeroSimulated";
import Indices from "../../../components/sections/SimulatedIndices/Indices";

export default async function SymbolsIndicesPage({
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
                <Indices lang={lang} />
            </div>
        </main>
    );
}
