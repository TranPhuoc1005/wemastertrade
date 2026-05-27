"use client";

import Link from "next/link";
import Image from "next/image";
import { usePathname } from "next/navigation";
import { languages } from "../../lib/languages";
import { switchLocaleInPath } from "../../lib/i18n/routing";

interface Props {
    currentLang: string;
}

export default function LanguageSwitcher({ currentLang }: Props) {
    const pathname = usePathname();
    const visibleLanguages = languages.filter((lang, index, list) => list.findIndex((item) => item.slug === lang.slug) === index);

    return (
        <>
            {visibleLanguages.map((lang) => {
                // skip current language
                if (lang.slug === currentLang) {
                    return null;
                }

                return (
                    <li key={lang.slug}>
                        <Link href={switchLocaleInPath(pathname, lang.slug)} className="flex items-center gap-2" rel="nofollow">
                            <Image src={lang.flag} alt={lang.label} width={16} height={11} />

                            <span>{lang.label}</span>
                        </Link>
                    </li>
                );
            })}
        </>
    );
}
