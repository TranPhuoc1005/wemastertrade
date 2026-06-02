<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

ini_set('display_errors', 0);
error_reporting(0);
header('Content-Type: application/json');

/* ══════════════════════════════════════════════════════════════
   PARAMS
══════════════════════════════════════════════════════════════ */
$type      = isset($_GET['type'])      ? sanitize_key($_GET['type'])            : 'blog';
$page      = isset($_GET['page'])      ? max(1, intval($_GET['page']))           : 1;
$lang      = isset($_GET['lang'])      ? sanitize_text_field($_GET['lang'])      : 'en';
$read_more = isset($_GET['read_more']) ? sanitize_text_field($_GET['read_more']) : 'Read more';
$tab_icon  = isset($_GET['tab_icon'])  ? sanitize_html_class($_GET['tab_icon'])  : '';
$get_data  = isset($_GET['get_data'])  ? (bool)$_GET['get_data']                 : false; // Thêm tham số lấy data sạch
$output    = isset($_GET['output'])    ? sanitize_key($_GET['output'])           : 'html';

if (empty($lang)) $lang = 'en';

$raw_cats = isset($_GET['cats']) ? sanitize_text_field($_GET['cats']) : '';
$cat_ids  = array_filter(
    array_map('intval', explode(',', $raw_cats)),
    fn($id) => $id > 0
);

if ($page === 1) {
    $per_page = 9;
    $offset   = 0;
} else {
    $per_page = 6;
    $offset   = 9 + (($page - 2) * 6);
}

function tl_format_date(string $raw): string
{
    $obj = DateTime::createFromFormat('Y-m-d\TH:i:s', $raw);
    if (!$obj) $obj = DateTime::createFromFormat('Y-m-d H:i:s', $raw);
    return $obj ? $obj->format('d.m.Y') . '<br>' . $obj->format('H:i') : '';
}

function tl_build_item(array $data, string $read_more_label, string $icon_class, string $cta_label = '', string $cta_url = ''): string
{
    $date_fmt   = tl_format_date($data['date'] ?? '');
    $has_mobile = !empty($data['thumb_mobile'])
                  && $data['thumb_mobile'] !== $data['thumb'];

    $img_html = $has_mobile
        ? '<picture>
                    <source media="(max-width: 767px)" srcset="' . esc_url($data['thumb_mobile']) . '">
                    <img loading="lazy" src="' . esc_url($data['thumb']) . '" width="490" height="267" alt="' . esc_attr($data['title']) . '">
                </picture>'
        : '<img loading="lazy" src="' . esc_url($data['thumb']) . '" width="490" height="267" alt="' . esc_attr($data['title']) . '">';

    $btn_label = $cta_label !== '' ? $cta_label : $read_more_label;
    $btn_url   = $cta_url   !== '' ? $cta_url   : $data['link'];

    return '
    <div class="item ' . esc_attr($icon_class) . '">
        <p class="date"><span>' . $date_fmt . '</span></p>
        <div class="cnt">
            <p class="img"><a href="' . esc_url($data['link']) . '">' . $img_html . '</a></p>
            <div class="desc">
                <h3><a href="' . esc_url($data['link']) . '">' . wp_kses_post($data['title']) . '</a></h3>
                <div class="txt">' . wp_kses_post($data['excerpt_html']) . '</div>
                <div class="link"><p><a href="' . esc_url($btn_url) . '">' . esc_html($btn_label) . '</a></p></div>
            </div>
        </div>
    </div>';
}

function tl_get_localized_link(int $post_id, string $lang): string
{
    if (function_exists('pll_get_post')) {
        $id = pll_get_post($post_id, $lang);
        if ($id) return (string) get_permalink($id);

        $en = pll_get_post($post_id, 'en');
        if ($en) return (string) get_permalink($en);
    }
    return (string) get_permalink($post_id);
}

function tl_resolve_image(string $url_key, string $img_key, $source, string $fallback = ''): string
{
    if (is_array($source)) {
        $url_val = $source[$url_key] ?? '';
        $img_val = $source[$img_key] ?? null;
    } else {
        $url_val = get_field($url_key, $source);
        $img_val = get_field($img_key, $source);
    }

    if (!empty($url_val)) {
        $url_val = trim($url_val);
        if (filter_var($url_val, FILTER_VALIDATE_URL) || str_starts_with($url_val, '/')) {
            return $url_val;
        }
    }

    if (!empty($img_val)) {
        if (is_array($img_val) && !empty($img_val['url'])) {
            return $img_val['url'];
        }
        if (is_numeric($img_val)) {
            $src = wp_get_attachment_image_url((int)$img_val, 'large');
            if ($src) return $src;
        }
        if (is_string($img_val) && filter_var($img_val, FILTER_VALIDATE_URL)) {
            return $img_val;
        }
    }

    return $fallback;
}

function tl_parse_wysiwyg(string $html): array
{
    $html = trim($html);
    if (!$html) return ['title' => '', 'excerpt_html' => ''];

    preg_match_all('/<p[^>]*>(.*?)<\/p>/is', $html, $m);
    $p_full  = $m[0] ?? [];
    $p_inner = $m[1] ?? [];

    if (!empty($p_full)) {
        $title        = trim(wp_strip_all_tags($p_inner[0]));
        $remaining    = array_slice($p_full, 1);
        $excerpt_html = implode("\n", $remaining);

        return [
            'title'        => $title,
            'excerpt_html' => $excerpt_html,
        ];
    }

    $normalized = str_replace(["\r\n", "\r"], "\n", $html);
    $blocks     = preg_split('/\n{2,}/', $normalized);
    $blocks     = array_values(array_filter(array_map('trim', $blocks)));

    if (empty($blocks)) {
        return ['title' => '', 'excerpt_html' => ''];
    }

    $title = wp_strip_all_tags($blocks[0]);

    $remaining_blocks = array_slice($blocks, 1);
    $excerpt_parts    = [];
    foreach ($remaining_blocks as $block) {
        $block = trim($block);
        if (!$block) continue;
        if (preg_match('/^</', $block)) {
            $excerpt_parts[] = $block;
        } else {
            $excerpt_parts[] = '<p>' . $block . '</p>';
        }
    }
    $excerpt_html = implode("\n", $excerpt_parts);

    return [
        'title'        => $title,
        'excerpt_html' => $excerpt_html,
    ];
}

function tl_get_promo_data(int $post_id, string $lang, string $fallback_thumb): ?array
{
    static $slug_map = [
        'en'  => 'en',
        'id'  => 'id',
        'bn'  => 'bn',
        'km'  => 'km',
        'ph'  => 'ph',
        'th'  => 'th',
        'sg'  => 'sg',
        'au'  => 'au',
        'in'  => 'in',
        'hk'  => 'hk',
        'ir'  => 'ir',
        'ur'  => 'ur',
        'zh'  => 'zh',
        'tr'  => 'tr',
        'fr'  => 'fr',
        'ja'  => 'ja',
        'ko'  => 'ko',
        'ru'  => 'ru',
        'vi'  => 'vi',
        'pt'  => 'pt',
        'co'  => 'co',
        'es'  => 'es',
        'mx'  => 'es-mx',
        'pe'  => 'es-pe',
        'ar'  => 'es-ar',
        'my'  => 'en-my',
        'ca'  => 'en-ca',
    ];

    $acf_lang = $slug_map[$lang] ?? $lang;

    /* ── 1. BLOCKED LANGUAGES ── */
    $blocked = get_field('promo_blocked_langs', $post_id);
    if (!empty($blocked) && is_array($blocked)) {
        if (in_array($acf_lang, $blocked, true)) {
            return null;
        }
    }

    /* ── 1b. PROMO ENABLED ── */
    if (!get_field('promo_enabled', $post_id)) {
        return null;
    }

    /* ── 2. TÌM ROW TRONG REPEATER THEO NGÔN NGỮ ── */
    $row_content      = null;
    $row_img_desktop  = '';
    $row_img_mobile   = '';
    $row_img_timeline = ''; // Thêm biến cho timeline image
    $row_cta_label    = '';
    $row_cta_url      = '';

    $repeater = get_field('promo_localized', $post_id);
    if (!empty($repeater) && is_array($repeater)) {
        foreach ($repeater as $row) {
            $row_lang = $row['lang_code'] ?? '';
            if ($row_lang === $acf_lang || $row_lang === $lang) {
                $row_content      = $row['content'] ?? null;
                $row_img_desktop  = tl_resolve_image('acl_url_banner_desktop', 'acl_banner_desktop', $row, '');
                $row_img_mobile   = tl_resolve_image('acl_url_banner_mobile',  'acl_banner_mobile',  $row, '');
                $row_img_timeline = tl_resolve_image('url_banner_timeline', 'banner_timeline', $row, '');
                $row_cta_label    = trim($row['cta_label'] ?? '');
                $row_cta_url      = trim($row['cta_url']   ?? '');
                break;
            }
        }
    }

    /* ── 3. CONTENT ── */
    $wysiwyg = !empty($row_content)
        ? $row_content
        : get_field('promo_default_content', $post_id);

    $parsed = tl_parse_wysiwyg((string)$wysiwyg);

    /* ── 4. ẢNH TIMELINE (NEW LOGIC) ── */
    $thumb_timeline = $row_img_timeline;
    if (!$thumb_timeline) {
        $thumb_timeline = tl_resolve_image('promo_url_banner_timeline', 'promo_default_banner_timeline', $post_id, '');
    }
    if (!$thumb_timeline) {
        $thumb_timeline = '/wp-content/themes/flatsome/uk-template/images/timeline_default.jpg';
    }

    /* ── 5. ẢNH DESKTOP/MOBILE (OLD LOGIC - GIỮ LẠI NẾU CẦN DÙNG NƠI KHÁC) ── */
    $thumb_desktop = tl_resolve_image('promo_url_banner_desktop', 'promo_default_banner_desktop', $post_id, $fallback_thumb);
    $thumb_mobile  = tl_resolve_image('promo_url_banner_mobile',  'promo_default_banner_mobil',   $post_id, $thumb_desktop);

    /* ── 6. CTA LABEL & URL ── */
    $cta_label = $row_cta_label !== ''
        ? $row_cta_label
        : (string) get_field('promo_default_cta_label', $post_id);

    $cta_url = $row_cta_url !== ''
        ? $row_cta_url
        : (string) get_field('promo_default_cta_url', $post_id);

    // Link ảnh, title và button → page promotion đúng ngôn ngữ + anchor #promo-{id}
    $lang_prefix     = ($lang === 'en') ? '' : '/' . $lang;
    $promo_page_link = home_url($lang_prefix . '/promotions/#promo-' . $post_id);

    return [
        'title'        => $parsed['title'],
        'excerpt_html' => $parsed['excerpt_html'],
        'thumb'        => $thumb_timeline, // Sử dụng ảnh timeline mới
        'thumb_mobile' => $thumb_timeline, // Sử dụng ảnh timeline mới cho cả mobile để đồng bộ
        'date'         => get_the_date('Y-m-d\TH:i:s', $post_id),
        'link'         => $promo_page_link,
        'cta_label'    => '',
        'cta_url'      => '',
    ];
}

function tl_get_seminar_data(int $post_id, string $lang, string $default_thumb): ?array
{
    // Lấy thông tin từ chuyên mục (Category) của bài viết
    $terms = get_the_terms($post_id, 'seminar_cat');
    $location_name = 'Seminar'; // Mặc định
    $anchor_id     = 'seminar-' . $post_id;

    if (!empty($terms) && !is_wp_error($terms)) {
        $main_term     = $terms[0];
        $location_name = $main_term->name;
        $anchor_id     = $main_term->slug; // Slug sẽ làm Anchor ID (ví dụ: thailand)
    }

    // Title hiển thị trên Timeline: Tên Category + " Seminar"
    $title = $location_name . ' Seminar';
    
    // Desc hiển thị trên Timeline: Tiêu đề của bài Post
    $desc = get_the_title($post_id);

    // Lấy ảnh đại diện (Featured Image)
    $thumb_id = get_post_thumbnail_id($post_id);
    $thumb    = $thumb_id ? wp_get_attachment_image_url($thumb_id, 'large') : $default_thumb;

    // Lấy Anchor ID (ưu tiên lấy từ field ACF seminar_anchor_id)
    $anchor_id = get_field('seminar_anchor_id', $post_id);
    if (!$anchor_id) {
        $terms = get_the_terms($post_id, 'seminar_cat');
        $anchor_id = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->slug : 'seminar-' . $post_id;
    }

    // Lấy Anchor ID (Ưu tiên lấy từ field ACF 'seminar_anchor_id')
    $anchor_id = get_field('seminar_anchor_id', $post_id);
    if (!$anchor_id) {
        $terms = get_the_terms($post_id, 'seminar_cat');
        $anchor_id = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->slug : 'seminar-' . $post_id;
    }

    $lang_prefix = ($lang === 'en') ? '' : '/' . $lang;
    $seminar_link = home_url($lang_prefix . '/seminar/#' . $anchor_id);

    return [
        'title'        => $title,
        'excerpt_html' => '<p>' . $desc . '</p>',
        'thumb'        => $thumb,
        'thumb_mobile' => $thumb,
        'date'         => get_the_date('Y-m-d\TH:i:s', $post_id),
        'link'         => $seminar_link,
        'cta_label'    => '',
        'cta_url'      => '',
    ];
}

$posts_data    = [];
$has_more      = false;
$cache_key     = '';
$default_thumb = get_template_directory_uri() . '/uk-template/images/default-blog.jpg';

/* ─────────────────────────
   ALL (blog + promotions + seminars merged, sorted by date)
───────────────────────── */
if ($type === 'all') {

    if (empty($cat_ids)) {
        wp_send_json(['success' => false, 'message' => 'No category ids']);
    }

    // Cache raw data
    $cache_key = 'tl_all_raw_v2_' . md5($lang . '_cats' . implode(',', $cat_ids) . '_p' . $page);
    $cached    = get_transient($cache_key);

    if ($cached !== false) {
        $posts_data = $cached['posts_data'];
        $has_more   = $cached['has_more'];
    } else {

        /* ── 1. FETCH BLOG ── */
        $blog_fetch      = max(50, $per_page * 5);
        $cat_ids_indexed = array_values($cat_ids);
        $api_args        = [
            'per_page'   => $blog_fetch,
            'offset'     => 0,
            'categories' => implode(',', $cat_ids_indexed),
            '_embed'     => 'true',
            'orderby'    => 'date',
            'order'      => 'desc',
            'lang'       => $lang,
        ];
        $api_url  = add_query_arg($api_args, home_url('/wp-json/wp/v2/posts'));
        $response = wp_remote_get($api_url, ['timeout' => 15]);

        $blog_items = [];
        if (!is_wp_error($response)) {
            $posts = json_decode(wp_remote_retrieve_body($response), true);
            if (!empty($posts)) {
                foreach ($posts as $post) {
                    $post_id = $post['id'] ?? 0;
                    $link    = ($post_id && function_exists('pll_get_post'))
                        ? tl_get_localized_link($post_id, $lang)
                        : ($post['link'] ?? '#');

                    $excerpt_plain = wp_trim_words(
                        wp_strip_all_tags($post['excerpt']['rendered'] ?? ''),
                        22, '...'
                    );

                    $thumb = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? '';
                    if (!$thumb && !empty($post['content']['rendered'])) {
                        preg_match('/<img.*?src=["\'](.*?)["\']/', $post['content']['rendered'], $mx);
                        $thumb = $mx[1] ?? '';
                    }
                    if (!$thumb) $thumb = $default_thumb;

                    // Map icon theo vị trí cat
                    $post_cats    = $post['categories'] ?? [];
                    $matched_icon = '';
                    foreach ($cat_ids_indexed as $idx => $cid) {
                        if (in_array($cid, $post_cats, true)) {
                            $matched_icon = 'icon' . ($idx + 1);
                            break;
                        }
                    }

                    $blog_items[] = [
                        '_icon'        => $matched_icon,
                        '_date_raw'    => $post['date'] ?? '',
                        'title'        => $post['title']['rendered'] ?? '',
                        'excerpt_html' => '<p>' . $excerpt_plain . '</p>',
                        'thumb'        => $thumb,
                        'thumb_mobile' => $thumb,
                        'link'         => $link,
                        'date'         => $post['date'] ?? '',
                        'cta_label'    => '',
                        'cta_url'      => '',
                    ];
                }
            }
        }

        /* ── 2. FETCH PROMOTIONS ── */
        $promo_icon  = 'icon' . (count($cat_ids_indexed) + 1);
        $promo_fetch = 100; // Lấy nhiều để lọc
        $promo_query = new WP_Query([
            'post_type'      => 'promotion',
            'post_status'    => 'publish',
            'posts_per_page' => $promo_fetch,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'lang'           => '',
        ]);

        $promo_items = [];
        if ($promo_query->have_posts()) {
            while ($promo_query->have_posts()) {
                $promo_query->the_post();
                $promo = tl_get_promo_data(get_the_ID(), $lang, $default_thumb);
                if ($promo === null || empty($promo['title'])) continue;

                $promo['_icon']     = $promo_icon;
                $promo['_date_raw'] = $promo['date'];
                $promo['_is_promo'] = true;
                $promo_items[]      = $promo;
            }
            wp_reset_postdata();
        }

        /* ── 3. FETCH SEMINARS ── */
        $seminar_icon  = 'icon' . (count($cat_ids_indexed) + 2);
        $seminar_query = new WP_Query([
            'post_type'      => 'seminar',
            'post_status'    => 'publish',
            'posts_per_page' => 100,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'lang'           => '',
        ]);

        $seminar_items = [];
        if ($seminar_query->have_posts()) {
            while ($seminar_query->have_posts()) {
                $seminar_query->the_post();
                $seminar = tl_get_seminar_data(get_the_ID(), $lang, $default_thumb);
                if ($seminar === null || empty($seminar['title'])) continue;

                $seminar['_icon']     = $seminar_icon;
                $seminar['_date_raw'] = $seminar['date'];
                $seminar_items[]      = $seminar;
            }
            wp_reset_postdata();
        }

        /* ── 4. MERGE & SORT ── */
        $merged = array_merge($blog_items, $promo_items, $seminar_items);
        usort($merged, fn($a, $b) => strcmp($b['_date_raw'], $a['_date_raw']));

        /* ── 5. PAGINATE ── */
        $total      = count($merged);
        $has_more   = ($offset + $per_page) < $total;
        $posts_data = array_slice($merged, $offset, $per_page);

        set_transient($cache_key, ['posts_data' => $posts_data, 'has_more' => $has_more], 60);
    }
}

/* ─────────────────────────
   BLOG
───────────────────────── */
elseif ($type === 'blog') {

    if (empty($cat_ids)) {
        wp_send_json(['success' => false, 'message' => 'No category ids']);
    }

    $api_args = [
        'per_page'   => $per_page,
        'offset'     => $offset,
        'categories' => implode(',', $cat_ids),
        '_embed'     => 'true',
        'orderby'    => 'date',
        'order'      => 'desc',
        'lang'       => $lang,
    ];

    $api_url   = add_query_arg($api_args, home_url('/wp-json/wp/v2/posts'));
    // Đưa tab_icon vào cache key để tránh conflict giữa các tab cùng cat_ids
    $cache_key = 'tl_blog_' . md5($api_url . '_icon' . $tab_icon);
    $cached    = get_transient($cache_key);

    if ($cached !== false) {
        wp_send_json($cached);
    }

    $response = wp_remote_get($api_url, ['timeout' => 15]);
    if (is_wp_error($response)) {
        wp_send_json(['success' => false]);
    }

    $posts = json_decode(wp_remote_retrieve_body($response), true);

    if (!empty($posts)) {
        foreach ($posts as $post) {
            $post_id = $post['id'] ?? 0;

            $link = ($post_id && function_exists('pll_get_post'))
                ? tl_get_localized_link($post_id, $lang)
                : ($post['link'] ?? '#');

            $excerpt_plain = wp_trim_words(
                wp_strip_all_tags($post['excerpt']['rendered'] ?? ''),
                22, '...'
            );

            $thumb = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? '';
            if (!$thumb && !empty($post['content']['rendered'])) {
                preg_match('/<img.*?src=["\'](.*?)["\']/', $post['content']['rendered'], $mx);
                $thumb = $mx[1] ?? '';
            }
            if (!$thumb) $thumb = $default_thumb;

            $posts_data[] = [
                '_icon'        => $tab_icon,
                'title'        => $post['title']['rendered'] ?? '',
                'excerpt_html' => '<p>' . $excerpt_plain . '</p>',
                'thumb'        => $thumb,
                'thumb_mobile' => $thumb,
                'link'         => $link,
                'date'         => $post['date'] ?? '',
                'cta_label'    => '',
                'cta_url'      => '',
            ];
        }
        $has_more = (count($posts) === $per_page);
    }
}

/* ─────────────────────────
   PROMOTIONS
───────────────────────── */
elseif ($type === 'promotions') {

    // Đưa tab_icon vào cache key để tránh conflict
    $cache_key = 'tl_promo_' . md5($lang . '_p' . $page . '_icon' . $tab_icon);
    $cached    = get_transient($cache_key);

    if ($cached !== false) {
        wp_send_json($cached);
    }

    $query_args = [
        'post_type'      => 'promotion',
        'post_status'    => 'publish',
        'posts_per_page' => 150, // Lấy số lượng đủ lớn để lọc
        'orderby'        => 'date',
        'order'          => 'DESC',
        'lang'           => '',  // Đảm bảo lấy tất cả bất kể Polylang
    ];

    $the_query = new WP_Query($query_args);
    $valid_promos = [];

    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $post_id = get_the_ID();

            $promo = tl_get_promo_data($post_id, $lang, $default_thumb);

            if ($promo === null)        continue;
            if (empty($promo['title'])) continue;

            $promo['_icon']     = $tab_icon;
            $promo['_is_promo'] = true;
            $valid_promos[]     = $promo;
        }
        wp_reset_postdata();
    }

    // Thực hiện phân trang trên danh sách đã lọc sạch
    $total_valid = count($valid_promos);
    $posts_data  = array_slice($valid_promos, $offset, $per_page);
    $has_more    = ($offset + $per_page) < $total_valid;
}
/* ─────────────────────────
   SEMINARS
───────────────────────── */
elseif ($type === 'seminar') {

    $cache_key = 'tl_seminar_' . md5($lang . '_p' . $page . '_icon' . $tab_icon);
    $cached    = get_transient($cache_key);

    if ($cached !== false) {
        wp_send_json($cached);
    }

    $query_args = [
        'post_type'      => 'seminar',
        'post_status'    => 'publish',
        'posts_per_page' => 150, 
        'orderby'        => 'date',
        'order'          => 'DESC',
        'lang'           => '',
    ];

    $the_query = new WP_Query($query_args);
    $valid_seminars = [];

    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $post_id = get_the_ID();

            $seminar = tl_get_seminar_data($post_id, $lang, $default_thumb);

            if ($seminar === null || empty($seminar['title'])) continue;

            $seminar['_icon']     = $tab_icon;
            $valid_seminars[]     = $seminar;
        }
        wp_reset_postdata();
    }

    $total_valid = count($valid_seminars);
    $posts_data  = array_slice($valid_seminars, $offset, $per_page);
    $has_more    = ($offset + $per_page) < $total_valid;
}
else {
    wp_send_json(['success' => false, 'message' => 'Unknown type']);
}

/* ─────────────────────────
   RENDER HTML
───────────────────────── */
$html = '';
// Chỉ render HTML nếu không yêu cầu output là json thuần túy
if ($output !== 'json') {
    foreach ($posts_data as $p) {
        $icon_class = $p['_icon'] ?? '';
        $cta_label  = $p['cta_label'] ?? '';
        $cta_url    = $p['cta_url']   ?? '';
        $html .= tl_build_item($p, $read_more, $icon_class, $cta_label, $cta_url);
    }
}

$result = [
    'success'  => true,
    'html'     => $html,
    'has_more' => $has_more,
];

// Chỉ trả về mảng dữ liệu thô nếu bên IT yêu cầu qua &get_data=1
if ($get_data) {
    // Lọc bỏ các trường nội bộ (có dấu _) để dữ liệu sạch cho IT
    $result['items'] = array_map(function($item) {
        unset($item['_icon'], $item['_date_raw'], $item['_is_promo']);
        return $item;
    }, $posts_data);
}

// Cache HTML cho blog và promotions (icon đã nhúng đúng vào _icon)
// Tab all cache raw data riêng ở trên, không cache HTML ở đây
if ($cache_key && $type !== 'all') {
    set_transient($cache_key, $result, 60);
}

wp_send_json($result);