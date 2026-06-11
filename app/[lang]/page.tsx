
import { notFound } from "next/navigation";
import { isLocale } from "../../lib/i18n/config";
import { getDictionary } from "../../lib/i18n/getDictionary";
import Hero from "../../components/sections/partials/Hero";
import Certificates from "../../components/sections/partials/Certificates";
import WhyUs from "../../components/sections/partials/WhyUs";
import HowItWork from "../../components/sections/partials/HowItWork";
import ChallengePackage from "../../components/sections/home/ChallengePackage";
import WhyChoose from "../../components/sections/partials/WhyChoose";
import Features from "../../components/sections/home/Features";
import Traders from "../../components/sections/partials/Traders";
import Subscribe from "../../components/sections/partials/Subscribe";
import Payout from "../../components/sections/partials/Payout";

export default async function HomePage({
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
            <Hero dict={dict.extracted} lang={lang} />
            <div id="content">
                <Certificates dict={dict.extracted} lang={lang} />
                <WhyUs dict={dict.extracted} lang={lang} />
                <HowItWork dict={dict.extracted} lang={lang} />
                <ChallengePackage dict={dict.home.package} lang={lang} />
                <WhyChoose dict={dict.extracted} lang={lang} />
                <Features dict={dict.extracted} lang={lang} />
                <Traders dict={dict.extracted} lang={lang} />
                <Subscribe dict={dict.extracted} lang={lang} />
                <Payout dict={dict.extracted} lang={lang} />
            </div>
        </main>
    );
}
