import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import { getDictionary } from "../../../lib/i18n/getDictionary";
import Hero from "../../../components/sections/Certification/Hero";
import Certification from "../../../components/sections/Certification/Certification";

export default async function CertificationPage({
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
                <Certification lang={lang}/>
            </div>
        </main>
    );
}
