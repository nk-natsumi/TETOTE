<?php
$page_id = get_queried_object_id();

if (is_home()) {
    $page_id = get_option('page_for_posts');
}

if (is_front_page()) {
    $page_id = get_option('page_on_front');
}

if (is_post_type_archive('staff')) {
    $page_id = 224;
}

$fv_url = get_field('fv_image', $page_id);
$fv_title = get_field('fv_title_en', $page_id);
$fv_subtitle = get_field('fv_subtitle', $page_id);

$fv_page_title = get_the_title($page_id);
?>
<?php if (!empty($fv_url)) : ?>
    <section class="fv" style="background-image: url('<?php echo esc_url($fv_url); ?>');">
        <div class="fv__wrapper ">
            <h1 class="fv__title-en"><?php echo esc_html($fv_title); ?></h1>

            <?php if (!empty($fv_title)) : ?>
                <h2 class="fv__title-ja"><?php echo esc_html($fv_page_title); ?></h2>
            <?php endif; ?>

            <?php if (!empty($fv_subtitle)) : ?>
                <p class="fv__subtitle"><?php echo esc_html($fv_subtitle); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <div class="c-breadcrumbs__wrapper">
        <ol class="c-breadcrumbs">
            <?php if (function_exists('bcn_display')) bcn_display(); ?>
        </ol>
    </div>
<?php endif; ?>