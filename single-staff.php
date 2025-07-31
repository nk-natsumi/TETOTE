<?php get_header(); ?>

<main class="single-staff">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <section class="staff-fv">
                <article class="staff-detail flex-box  section__wrapper">
                    <div class="staff-detail__info">
                        <h1 class="staff-detail__messages">
                            <p class="msg_1"><?php the_field('staff_message_detail'); ?></p>
                            <p class="msg_2"><?php the_field('staff_message_2'); ?></p>
                        </h1>
                        <p class="staff-detail__job"><?php the_field('staff_job'); ?></p>
                        <div class="flex-box">
                            <p class="staff-detail__name"><?php the_field('staff_name'); ?></p>
                            <p class="staff-detail__day"><?php the_field('staff_year'); ?>年入社</p>
                        </div>
                        <div class="staff-profile">
                            <?php the_field('staff_profile'); ?>
                        </div>
                    </div>

                    <div class="staff-detail__img">
                        <img src="<?php the_field('staff_img'); ?>" alt="<?php the_title(); ?>">
                    </div>
                </article>
                <ol class="c-breadcrumbs">
                    <?php if (function_exists('bcn_display')) bcn_display(); ?>
                </ol>
            </section>

            <section class="staff-main section__wrapper flex-box">
                <div class="staff-content">
                    <?php the_content(); ?>
                </div>
                <div class="sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </section>

            <section class="other-staff">
                <?php
                $current_id = get_the_ID();
                $args = array(
                    'post_type' => 'staff',
                    'posts_per_page' => 3,
                    'orderby' => 'rand',
                    'post__not_in' => array($current_id),
                );
                $other_staff = new WP_Query($args);

                if ($other_staff->have_posts()) :
                    echo '<div class="other-staff">';
                    echo '<h2>その他のメンバー</h2>';
                    echo '<div class="staff-list grid-box">'; // ul/liじゃなくてdivで囲む想定

                    while ($other_staff->have_posts()) : $other_staff->the_post();
                ?>
                        <a href="<?php the_permalink(); ?>" class="staff__item">
                            <div class="top-staff__img-wrap">
                                <img src="<?php the_field('staff_img'); ?>" alt="<?php the_title(); ?>" class="top-staff__img">
                                <div class="top-staff__message">
                                    <p class="msg1"><?php the_field('staff_message_1'); ?></p>
                                    <p class="msg2"><?php the_field('staff_message_2'); ?></p>
                                </div>
                                <div class="top-staff__meta">
                                    <p class="top-staff__job"><?php the_field('staff_job'); ?> <?php the_field('staff_year'); ?>年入社</p>
                                    <p class="top-staff__name"><?php the_field('staff_name'); ?></p>
                                </div>
                            </div>
                        </a>
                <?php
                    endwhile;
                    echo '</div>';
                    echo '</div>';
                    wp_reset_postdata();
                endif;
                ?>
            </section>
    <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>