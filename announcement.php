<?php

/**
 * Template Name: UK Timeline News
 * Template Post Type: page
 */
get_header();

/* ──────────────────────────────────────────────
   1. NGÔN NGỮ HIỆN TẠI
────────────────────────────────────────────── */
$current_locale = function_exists('pll_current_language') ? pll_current_language('locale') : 'en';
$current_slug   = function_exists('pll_current_language') ? pll_current_language('slug') : 'en';

/* ──────────────────────────────────────────────
   2. CONFIG BLOG CATEGORIES
   Tab "All" sẽ merge tất cả cat_id của locale đó
────────────────────────────────────────────── */
$blog_categories_config = array(
    'en' => array(
        array('label' => 'Announcement', 'base_cat_id' => '13,307'),
    ),
    'id'    => array(array('label' => 'Blog', 'base_cat_id' => 677)),
    'sg'    => array(array('label' => 'Blog', 'base_cat_id' => 675)),
    'km'    => array(array('label' => 'Blog', 'base_cat_id' => 577)),
    'ph'    => array(array('label' => 'Blog', 'base_cat_id' => 573)),
    'bn_BD' => array(array('label' => 'ব্লগ',   'base_cat_id' => 593)),
    'en_AU' => array(array('label' => 'Blog', 'base_cat_id' => 673)),
    'es_ES' => array(array('label' => 'Blog', 'base_cat_id' => 711)),
    'es_PE' => array(array('label' => 'Blog', 'base_cat_id' => 662)),
    'es_MX' => array(array('label' => 'Blog', 'base_cat_id' => 617)),
    'in'    => array(array('label' => 'Blog', 'base_cat_id' => 619)),
    'th'    => array(array('label' => 'Blog', 'base_cat_id' => 523)),
);

if (!empty($blog_categories_config[$current_locale])) {
    $config_locale   = $current_locale;
    $blog_categories = $blog_categories_config[$current_locale];
} else {
    $config_locale   = 'en';
    $blog_categories = $blog_categories_config['en'];
}

/* ──────────────────────────────────────────────
   3. MAP LOCALE → SLUG CHO POLYLANG
────────────────────────────────────────────── */
$config_locale_to_slug = array(
    'en'    => 'en',
    'id'    => 'id',
    'in'    => 'in',
    'sg'    => 'sg',
    'km'    => 'km',
    'ph'    => 'ph',
    'th'    => 'th',
    'bn_BD' => 'bn',
    'en_AU' => 'au',
    'en_ES' => 'es',
    'es_PE' => 'pe',
    'es_MX' => 'mx',
);

$query_lang = ($config_locale === $current_locale)
    ? $current_slug
    : (!empty($config_locale_to_slug[$config_locale]) ? $config_locale_to_slug[$config_locale] : 'en');

if (empty($query_lang)) $query_lang = 'en';

/* ──────────────────────────────────────────────
   4. XÂY DỰNG DANH SÁCH TẤT CẢ CAT IDs (cho tab "All")
────────────────────────────────────────────── */
$all_cat_ids = array_map(fn($c) => $c['base_cat_id'], $blog_categories);

/* ──────────────────────────────────────────────
   5. LABEL ĐA NGÔN NGỮ
────────────────────────────────────────────── */
$label_all        = 'All';
$label_promotions = 'Promotions';
$label_seminar    = 'Seminars';
$label_read_more  = 'Read more';
$label_load_more  = 'Load more';

/* ──────────────────────────────────────────────
   6. URL PROXY (dùng file riêng cho timeline)
────────────────────────────────────────────── */
$timeline_proxy_url = get_template_directory_uri() . '/uk-template/ajax/timeline-proxy.php';

?>

<div id="content">
    <section class="blogtimeline">
        <div class="container">

            <!-- ── TAB NAV ── -->
            <div class="blog__category">

                <!-- Tab 0: All (merge blog + promotions, sort by date) -->
                <p>
                    <a class="active"
                       data-tl-tab="timeline_tab0"
                       data-tl-group="timeline_group1"
                       data-tl-type="all"
                       data-tl-cats="<?php echo esc_attr(implode(',', $all_cat_ids)); ?>">
                        <?php echo esc_html($label_all); ?>
                    </a>
                </p>

                <!-- Tab cuối: Promotions (post type riêng) -->
                <?php $promo_icon_index = count($blog_categories) + 1; ?>
                <p>
                    <a class=""
                       data-tl-tab="timeline_tab5"
                       data-tl-group="timeline_group1"
                       data-tl-type="promotions"
                       data-tl-cats=""
                       data-tl-icon="icon<?php echo $promo_icon_index; ?>">
                        <?php echo esc_html($label_promotions); ?>
                    </a>
                </p>

                <!-- Tab 1–N: từng blog category -->
                <?php foreach ($blog_categories as $i => $cat) : ?>
                <p>
                    <a class=""
                       data-tl-tab="timeline_tab<?php echo ($i + 1); ?>"
                       data-tl-group="timeline_group1"
                       data-tl-type="blog"
                       data-tl-cats="<?php echo esc_attr($cat['base_cat_id']); ?>"
                       data-tl-icon="icon<?php echo ($i + 1); ?>">
                        <?php echo esc_html($cat['label']); ?>
                    </a>
                </p>
                <?php endforeach; ?>
                
                <!-- Tab: Seminar (post type riêng) -->
                <?php $seminar_icon_index = count($blog_categories) + 2; ?>
                <p>
                    <a class=""
                       data-tl-tab="timeline_tab6"
                       data-tl-group="timeline_group1"
                       data-tl-type="seminar"
                       data-tl-cats=""
                       data-tl-icon="icon<?php echo $seminar_icon_index; ?>">
                        <?php echo esc_html($label_seminar); ?>
                    </a>
                </p>

            </div>
            <!-- ── END TAB NAV ── -->

            <!-- ── TAB CONTENTS ── -->
            <div class="timeline__content_wrap">

                <!-- Pane Tab 0: All -->
                <div class="timeline__content active"
                     data-tl-content="timeline_tab0"
                     data-tl-group="timeline_group1">
                    <div class="blogtimeline__list"></div>
                </div>

                <!-- Pane Tab 1–N: blog categories -->
                <?php foreach ($blog_categories as $i => $cat) : ?>
                <div class="timeline__content"
                     data-tl-content="timeline_tab<?php echo ($i + 1); ?>"
                     data-tl-group="timeline_group1">
                    <div class="blogtimeline__list"></div>
                </div>
                <?php endforeach; ?>

                <!-- Pane Tab Promotions -->
                <div class="timeline__content"
                     data-tl-content="timeline_tab5"
                     data-tl-group="timeline_group1">
                    <div class="blogtimeline__list"></div>
                </div>
                
                <!-- Pane Tab Seminar -->
                <div class="timeline__content"
                     data-tl-content="timeline_tab6"
                     data-tl-group="timeline_group1">
                    <div class="blogtimeline__list"></div>
                </div>

            </div>
            <!-- ── END TAB CONTENTS ── -->

            <!-- Load More -->
            <div class="blog">
                <p class="btn__viewmore timeline__loadmore" style="display:none;">
                    <span><?php echo esc_html($label_load_more); ?></span>
                </p>
            </div>

        </div><!-- .container -->
    </section>
</div><!-- #content -->

<!-- ── CONFIG CHO JS ── -->
<script>
    window.TIMELINE_CONFIG = {
        proxy   : "<?php echo esc_js($timeline_proxy_url); ?>",
        lang    : "<?php echo esc_js($query_lang); ?>",
        readMore: "<?php echo esc_js($label_read_more); ?>"
    };
</script>

<?php get_footer(); ?>
<script src="/wp-content/themes/flatsome/uk-template/js/uk-timeline-ajax.js"></script>