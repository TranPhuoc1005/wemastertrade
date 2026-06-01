import type { Locale } from "../../../lib/i18n/config";
import { getPromotionItems } from "../../../lib/promotions";
import PromotionsList from "./PromotionsList";

export default async function PromotionsContent({ lang }: { lang: Locale }) {
    const items = await getPromotionItems(lang);

    return (
        <section className="promotions">
            <div className="container">
                <PromotionsList items={items} />
            </div>
        </section>
    );
}
