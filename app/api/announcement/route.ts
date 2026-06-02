import { NextResponse, type NextRequest } from "next/server";
import { getAnnouncementItems } from "../../../services/wordpress/announcement";

export async function GET(request: NextRequest) {
    const type = request.nextUrl.searchParams.get("type") ?? "all";
    const page = Number(request.nextUrl.searchParams.get("page") ?? 1);
    const lang = request.nextUrl.searchParams.get("lang") ?? "en";

    const result = await getAnnouncementItems(type, page, lang);

    return NextResponse.json(result);
}
