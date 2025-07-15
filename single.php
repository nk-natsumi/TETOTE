<?php get_header(); ?>

<main class="blog__post">

    <ol class="c-breadcrumbs">
        <?php if (function_exists('bcn_display')) bcn_display(); ?>
    </ol>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="blog-detail">
                <div class="blog__meta flex-box">
                    <span class="top-blog__category">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/category.png" alt="カテゴリーアイコン" class="category-icon">

                        <?php
                        $category = get_the_category();
                        if (!empty($category)) {
                            echo esc_html($category[0]->name);
                        }
                        ?>
                    </span>
                    <p class="blog__date"><?php the_time('Y.m.d'); ?></p>
                </div>
                <h2><?php the_title(); ?></h2>
                <div class="blog__img">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } else {
                        echo '<img src="' . get_stylesheet_directory_uri() . '/img/no-image.png" alt="No Image">';
                    }
                    ?>
                </div>
                <div class="blog__text">
                    <?php the_content(); ?>
                </div>
            </article>
            <nav class="blog-navigation">
                <div class="blog-navigation__inner flex-box">
                    <div class="blog-navigation__prev">
                        <?php
                        $prev_post = get_previous_post();
                        if ($prev_post) {
                            $url = get_permalink($prev_post->ID);
                            $title = get_the_title($prev_post->ID);
                            $date = get_the_time('Y.m.d', $prev_post->ID);
                        ?>
                            <a href="<?php echo esc_url($url); ?>">
                                <div class="arrow">
                                </div>
                                <span class="nav-label">前の記事</span>
                                <span class="post-title"><?php echo esc_html($title); ?></span>
                                <span class="post-date"><?php echo esc_html($date); ?></span>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="blog-navigation__next">
                        <?php
                        $next_post = get_next_post();
                        if ($next_post) {
                            $url = get_permalink($next_post->ID);
                            $title = get_the_title($next_post->ID);
                            $date = get_the_time('Y.m.d', $next_post->ID);
                        ?>
                            <a href="<?php echo esc_url($url); ?>">
                                <span class="nav-label">次の記事</span>
                                <span class="post-title"><?php echo esc_html($title); ?></span>
                                <span class="post-date"><?php echo esc_html($date); ?></span>
                                <div class="arrow">
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </nav>
    <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>