export async function getHomePage(
  lang: string
) {
  const res = await fetch(
    `${process.env.NEXT_PUBLIC_WP_API}/wp-json/wp/v2/pages?lang=${lang}`
  );

  return res.json();
}