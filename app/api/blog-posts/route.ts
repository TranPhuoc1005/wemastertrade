import { NextResponse, type NextRequest } from "next/server";
import { getBlogPosts } from "../../../lib/blog";

export async function GET(request: NextRequest) {
    const categoryId = Number(request.nextUrl.searchParams.get("cat") ?? 0);
    const page = Number(request.nextUrl.searchParams.get("page") ?? 1);
    const lang = request.nextUrl.searchParams.get("lang") ?? "en";

    if (!categoryId || page < 1) {
        return NextResponse.json({
            hasMore: false,
            posts: [],
        });
    }

    const result = await getBlogPosts(categoryId, page, lang);

    return NextResponse.json(result);
}
