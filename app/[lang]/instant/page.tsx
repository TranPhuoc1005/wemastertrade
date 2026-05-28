import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import { getDictionary } from "../../../lib/i18n/getDictionary";
import Hero from "../../../components/sections/partials/Hero";
import Certificates from "../../../components/sections/partials/Certificates";
import Benefit from "../../../components/sections/Instant/Benefit";
import InstantFunding from "../../../components/sections/Instant/InstantFunding";
import WhyUs from "../../../components/sections/partials/WhyUs";
import HowItWork from "../../../components/sections/partials/HowItWork";
import Unique from "../../../components/sections/Instant/Unique";
import Traders from "../../../components/sections/partials/Traders";
import Subscribe from "../../../components/sections/partials/Subscribe";
import Payout from "../../../components/sections/partials/Payout";

export default async function InstantPage({
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
            <Hero dict={dict.home.hero} lang={lang} />
            <div id="content">
                <Certificates lang={lang} />
                <Benefit lang={lang} />
                <InstantFunding dict={dict.instant.funding} lang={lang} />
                <WhyUs lang={lang} />
                <HowItWork lang={lang} />
                <Unique />
                <Traders lang={lang} />
                <Subscribe lang={lang} />
                <Payout lang={lang} />
            </div>
        </main>
    );
}
