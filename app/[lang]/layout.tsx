import GlobalScripts from "../../components/layout/GlobalScripts";
import Header from "../../components/layout/Header";
import { notFound } from "next/navigation";
import { isLocale, languages } from "../../lib/i18n/config";
import { getDictionary } from "../../lib/i18n/getDictionary";
import Footer from "../../components/layout/Footer";

export default async function LangLayout({
    children,
    params,
}: {
    children: React.ReactNode;
    params: Promise<{
        lang: string;
    }>;
}) {
    const { lang: rawLang } = await params;
    if (!isLocale(rawLang)) notFound();

    const lang = rawLang;
    const dict = await getDictionary(lang);

    return (
        <div id="wrapper">
            <GlobalScripts />
            <Header dict={dict.common.header} lang={lang} />
            {children}
            <Footer lang={lang} />
        </div>
    );
}

export function generateStaticParams() {
    return languages.map((language) => ({ lang: language.slug }));
}
