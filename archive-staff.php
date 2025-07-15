<?php get_header(); ?>

<main class="archive-staff-main">
    <?php get_template_part('template-parts/parts', 'fv'); ?>


    <div class="staff__wrapper section__wrapper">
        <div class="staff__inner grid-box">
            <?php
            $args = array(
                'post_type' => 'staff',
                'posts_per_page' => 6,
                'orderby'        => 'date',    // 投稿日時で並べ替え（デフォルト）
                'order'          => 'ASC',   // 昇順 → 古い順
            );
            $staff_query = new WP_Query($args);
            if ($staff_query->have_posts()):
                while ($staff_query->have_posts()): $staff_query->the_post();
            ?>
                    <a class="staff__item" href="<?php the_permalink(); ?>">
                        <div class="top-staff__img-wrap">
                            <img src="<?php the_field('staff_img'); ?>" alt="<?php the_title(); ?>" class="top-staff__img">

                            <div class="top-staff__message staff__message">
                                <p class="msg1"><?php the_field('staff_message_1'); ?></p>
                                <p class="msg2"><?php the_field('staff_message_2'); ?></p>
                            </div>

                            <div class="top-staff__meta staff__meta">
                                <p class="top-staff__job"><?php the_field('staff_job'); ?>　<?php the_field('staff_year'); ?>年入社</p>
                                <p class="top-staff__name"><?php the_field('staff_name'); ?></p>
                            </div>

                        </div>
                    </a>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>