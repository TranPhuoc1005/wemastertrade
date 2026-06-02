import { notFound } from "next/navigation";
import { isLocale } from "../../../lib/i18n/config";
import Hero from "../../../components/sections/LocalPay/Hero";
import LocalPayment from "../../../components/sections/LocalPay/LocalPayment";
import Payments from "../../../components/sections/LocalPay/Payments";

export default async function LocalPayPage({
    params,
}: {
    params: Promise<{
        lang: string;
    }>;
}) {
    const { lang: rawLang } = await params;
    if (!isLocale(rawLang)) notFound();

    return (
        <main id="main">
            <Hero />
            <div id="content">
                <Payments />
                <LocalPayment />
            </div>
        </main>
    );
}
