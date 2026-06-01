import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import { getDictionary } from "../../../lib/i18n/getDictionary";
import Hero from "../../../components/sections/ContactUs/Hero";
import ContactUs from "../../../components/sections/ContactUs/ContactUs";
import Support from "../../../components/sections/ContactUs/Support";

export default async function ContactUsPage({
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
            <Hero lang={lang} />
            <div id="content">
                <ContactUs lang={lang} />
                <Support lang={lang} />
            </div>
        </main>
    );
}
