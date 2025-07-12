<?php
// FV画像のURLを取得
$fv_url = get_field('fv_image');

// タイトルとサブタイトル
$fv_title = get_field('fv_title_ja');
$fv_subtitle = get_field('fv_subtitle');
?>

<?php if (!empty($fv_url)) : ?>
    <div class="fv">
        <img src="<?php echo esc_url($fv_url); ?>" alt="FV画像">
        <div class="section__wrapper">
            
                <h2 class="fv__title-en"><?php the_title(); ?></h2>

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