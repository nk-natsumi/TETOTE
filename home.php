<?php get_header(); ?>

<main class="blog-main">
    <?php get_template_part('template-parts/parts', 'fv'); ?>

    <div id=" top-blog blog" class="top-blog blog">
        <div class="section__wrapper">
           
            <ul class="top-blog__content blog__content grid-box">
                <?php
                $paged = max(1, get_query_var('paged'));

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 8,
                    'paged' => $paged
                );
                $blog_query = new WP_Query($args);


                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <li class="top-blog__item blog__item">
                            <article class="top-blog__link">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="top-blog__inner flex-box">
                                        <div class="top-blog__img">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium');
                                            } else {
                                                echo '<img src="' . get_stylesheet_directory_uri() . '/img/no-image.png" alt="No Image">';
                                            }
                                            ?>
                                        </div>
                                        <div class="top-blog__text">
                                            <span class="top-blog__category">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/category.png" alt="カテゴリーアイコン" class="category-icon">

                                                <?php
                                                $category = get_the_category();
                                                if (!empty($category)) {
                                                    echo esc_html($category[0]->name);
                                                }
                                                ?>
                                            </span>
                                            <h3 class="top-blog__title"><?php the_title(); ?></h3>
                                            <p class="top-blog__date"><?php the_time('Y.m.d'); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </article>

                        </li>
                <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </ul>
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $blog_query->max_num_pages,
                    'current' => $paged, // ←これが正しくないと2重になる
                    'mid_size' => 1,
                    'prev_text' => '1',
                    'next_text' => '2',
                ));
                ?>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>