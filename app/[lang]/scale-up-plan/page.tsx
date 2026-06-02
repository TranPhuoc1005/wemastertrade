import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import Hero from "../../../components/sections/ScaleUpPlan/Hero";
import Scale from "../../../components/sections/ScaleUpPlan/Scale";

export default async function TestimonialsPage({
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
                <Scale lang={lang} />
            </div>
        </main>
    );
}
