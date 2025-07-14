<?php
// デフォルトは現在のページID
$page_id = get_queried_object_id();

// 投稿一覧（ブログページ）の場合は投稿ページのIDを使う
if ( is_home() ) {
    $page_id = get_option('page_for_posts');
}

// 固定ページのトップなら front page の ID を使うなども可能
if ( is_front_page() ) {
    $page_id = get_option('page_on_front');
}

if ( is_post_type_archive('staff') ) {
    $page_id = 224; // ←ここに「スタッフ紹介ページ」のIDを入れてね！
}

// ここで ACFを取得
$fv_url = get_field('fv_image', $page_id);
$fv_title = get_field('fv_title_ja', $page_id);
$fv_subtitle = get_field('fv_subtitle', $page_id);

// そのページのタイトルを取得
$fv_page_title = get_the_title($page_id);
?>
<?php if (!empty($fv_url)) : ?>
<div class="fv">
    <img src="<?php echo esc_url($fv_url); ?>" alt="FV画像">
    <div class="section__wrapper ">
        <h2 class="fv__title-en"><?php echo esc_html($fv_page_title); ?></h2>

        <?php if (!empty($fv_title)) : ?>
            <h3 class="fv__title-ja"><?php echo esc_html($fv_title); ?></h3>
        <?php endif; ?>

        <?php if (!empty($fv_subtitle)) : ?>
            <p class="fv__subtitle"><?php echo esc_html($fv_subtitle); ?></p>
        <?php endif; ?>
    </div>

    <ol class="c-breadcrumbs">
        <?php if (function_exists('bcn_display')) bcn_display(); ?>
    </ol>
</div>
<?php endif; ?>