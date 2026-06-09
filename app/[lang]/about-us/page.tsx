import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import Hero from "../../../components/sections/AboutUs/Hero";
import AboutUs from "../../../components/sections/AboutUs/AboutUs";
import AboutCeo from "../../../components/sections/AboutUs/AboutCeo";
import Helping from "../../../components/sections/AboutUs/Helping";
import Problems from "../../../components/sections/AboutUs/Problems";
import Traditional from "../../../components/sections/AboutUs/Traditional";
import Background from "../../../components/sections/AboutUs/Background";
import { Metadata } from "next";

export const metadata: Metadata = {
    title: "About Us - WeMasterTrader",
    description:"Wecopy Fintech LTD, a company registered at Shelton Street, Covent Garden, London, United Kingdom, WC2H 9JQ (No. 14905703), acts as a Payment Agent on behalf of WeMasterTrade in the specified countries, as permitted under applicable laws and regulations."
}

export default async function AboutUsPage({
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
            <Hero lang={lang} />
            <div id="content">
                <AboutUs lang={lang} />
                <AboutCeo lang={lang} />
                <Helping lang={lang} />
                <Problems lang={lang} />
                <Traditional lang={lang} />
                <Background />
            </div>
        </main>
    );
}
