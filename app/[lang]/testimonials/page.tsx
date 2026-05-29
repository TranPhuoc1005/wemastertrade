import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import Hero from "../../../components/sections/Testimonials/Hero";
import TestimonialsBenefit from "../../../components/sections/Testimonials/TestimonialsBenefit";
import Stories from "../../../components/sections/Testimonials/Stories";
import Proofs from "../../../components/sections/Testimonials/Proofs";
import JoinUs from "../../../components/sections/Testimonials/JoinUs";
import Award from "../../../components/sections/Testimonials/Award";

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
                <TestimonialsBenefit lang={lang} />
                <Stories lang={lang} />
                <Proofs lang={lang} />
                <JoinUs lang={lang} />
                <Award lang={lang} />
            </div>
        </main>
    );
}
