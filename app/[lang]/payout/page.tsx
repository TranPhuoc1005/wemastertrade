import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import { getDictionary } from "../../../lib/i18n/getDictionary";
import Hero from "../../../components/sections/Payout/Hero";
import Meet from "../../../components/sections/Payout/Meet";
import DailyPayout from "../../../components/sections/Payout/DailyPayout";

export default async function PayoutPage({
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
            <Hero dict={dict.payout.hero} />
            <div id="content">
                <Meet lang={lang} dict={dict.payout.meet} />
                <DailyPayout lang={lang} dict={dict.payout.daily} />
            </div>
        </main>
    );
}
