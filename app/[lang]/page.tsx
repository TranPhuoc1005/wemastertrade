import Hero from "../../components/sections/home/Hero";
import ChallengePackage from "../../components/sections/home/ChallengePackage";
import Certificates from "../../components/sections/home/Certificates";
import WhyUs from "../../components/sections/home/WhyUs";
import HowItWork from "../../components/sections/home/HowItWork";
import { notFound } from "next/navigation";
import { isLocale } from "../../lib/i18n/config";
import { getDictionary } from "../../lib/i18n/getDictionary";
import WhyChoose from "../../components/sections/home/WhyChoose";
import Features from "../../components/sections/home/Features";

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
            <Hero dict={dict.home.hero} lang={lang} />
            <div id="content">
                <Certificates lang={lang} />
                <WhyUs lang={lang} />
                <HowItWork lang={lang} />
                <ChallengePackage dict={dict.home.package} lang={lang} />
                <WhyChoose lang={lang} />
                <Features lang={lang} />
            </div>
        </main>
    );
}
