"use client";

import { useAccordion } from "../../../hooks/useAccordion";
import type { PromotionItem } from "../../../lib/promotions";

export default function PromotionsList({ items }: { items: PromotionItem[] }) {
    const accordion = useAccordion({ defaultOpenIds: items.map((item) => item.id) });

    if (!items.length) {
        return <p>No promotions found.</p>;
    }

    return (
        <div className="promotions__content">
            {items.map((item) => (
                <div className="item" key={item.id}>
                    <div
                        {...accordion.getButtonProps(item.id)}
                        className={`item__bnr ${accordion.getButtonProps(item.id).className}`}>
                        <picture>
                            {item.mobileImage ? <source media="(max-width: 767px)" srcSet={item.mobileImage} /> : null}
                            <img src={item.desktopImage} loading="lazy" alt={item.title} />
                        </picture>
                    </div>
                    <div
                        className="item__cnt"
                        {...accordion.getContentProps(item.id)}
                        dangerouslySetInnerHTML={{ __html: item.contentHtml }}
                    />
                </div>
            ))}
        </div>
    );
}
