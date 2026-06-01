import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import { getDictionary } from "../../../lib/i18n/getDictionary";
import Hero from "../../../components/sections/CapitalProfit/Hero";
import Profit from "../../../components/sections/CapitalProfit/Profit";
import Payment from "../../../components/sections/CapitalProfit/Payment";

export default async function CapitalAndProfitPage({
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

    return (
        <main id="main">
            <Hero lang={lang}/>
            <div id="content">
                <Profit lang={lang} />
                <Payment lang={lang}/>
            </div>
        </main>
    );
}
