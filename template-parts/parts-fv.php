<?php
// ページによって画像の出し方を分岐させたい
if (is_singular('post') || is_singular('faq')) {
    // 投稿・FAQの詳細 → アイキャッチ使用
    if (has_post_thumbnail()) :
        $fv_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    endif;
} elseif (is_post_type_archive('faq')) {
    // FAQのアーカイブ → 固定ページからFV画像取得
    $faq_page = get_page_by_path('faq-top');
    if ($faq_page && has_post_thumbnail($faq_page->ID)) :
        $fv_url = get_the_post_thumbnail_url($faq_page->ID, 'full');
    endif;
} elseif (is_page()) {
    // 固定ページ → アイキャッチ
    if (has_post_thumbnail()) :
        $fv_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    endif;
}

if (!empty($fv_url)) :
?>
<?php
$title = get_field('fv_title_ja'); // カスタムフィールドの「スラッグ名」
if (!empty($title)) {
    echo esc_html($title); // 出力（テキストの場合）
}
?>
<?php
$sabtitle = get_field('fv_subtitle'); // カスタムフィールドの「スラッグ名」
if (!empty($sabtitle)) {
    echo esc_html($sabtitle); // 出力（テキストの場合）
}
?>
    <div class="fv">
        <img src="<?php echo esc_url($fv_url); ?>" alt="">
        <div class="section__wrapper">
            <div class="fv__title">
                <h2 class="fv__title-en"><?php the_title(); ?></h2>
                <h3 class="fv__title-ja"> <?php echo esc_html($title); ?></h3>
                <p> <?php echo esc_html($sabtitle); ?></p>
            </div>

            <ol="c-breadcrumbs">
                <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
            </ol>
        </div>
    </div>
<?php endif; ?>