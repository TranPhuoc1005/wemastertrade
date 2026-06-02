export interface ForexSymbol {
    id: number;
    category: string;
    commissionType: string;
    contractSize: string;
    leverageNormal: string;
    name: string;
    symbolCode: string;
}

interface WpSymbol {
    id: number;
    title?: {
        rendered?: string;
    };
    acf?: {
        symbol_cod?: string;
        contract_size?: string | number;
        leverage_normal?: string | number;
        commission_type?: string;
    };
}

const forexCategoryIds = "41,93";

export async function getForexSymbols(): Promise<ForexSymbol[]> {
    const response = await fetch(
        `https://wemastertrade.com/wp-json/wp/v2/symbols?per_page=100&categories=${forexCategoryIds}&orderby=date&order=desc`,
        {
            next: {
                revalidate: 300,
            },
        }
    );

    if (!response.ok) return [];

    const data = (await response.json()) as WpSymbol[];

    return data.map((item) => ({
        category: "Simulated Forex",
        commissionType: String(item.acf?.commission_type ?? ""),
        contractSize: String(item.acf?.contract_size ?? ""),
        id: item.id,
        leverageNormal: String(item.acf?.leverage_normal ?? ""),
        name: stripHtml(item.title?.rendered ?? ""),
        symbolCode: item.acf?.symbol_cod ?? "",
    }));
}

function stripHtml(value: string) {
    return value.replace(/<[^>]*>/g, "").replace(/&amp;/g, "&").trim();
}
