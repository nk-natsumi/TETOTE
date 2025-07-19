<?php get_header(); ?>

<main class="main">
    <?php get_template_part('template-parts/parts', 'fv'); ?>

    <div class="subpage__wrapper">
        <section class="systems">
            <h2 class="systems__title section__title">各種制度</h2>
            <dl class="systems__content">
                <div class="flex-box systems__item">
                    <dt>手当</dt>
                    <dd class="line-height"><?php the_field('systems_allowance'); ?></dd>
                </div>

                <div class="flex-box systems__item">
                    <dt>制度</dt>
                    <dd><?php the_field('systems_about'); ?></dd>
                </div>

                <div class="flex-box systems__item">
                    <dt>保険</dt>
                    <dd><?php the_field('systems_insurance'); ?></dd>
                </div>
                <div class="flex-box systems__item">
                    <dt>施設</dt>
                    <dd class="line-height facility"><?php the_field('systems__facility'); ?></dd>
                </div>
                <div class="flex-box systems__item">
                    <dt>休暇・休日</dt>
                    <dd class="line-height"><?php the_field('systems__holiday'); ?></dd>
                </div>
            </dl>
        </section>

        <section class="voice">
            <h2 class="voice__title section__title">制度利用者の声</h2>
            <div class="voice__content grid-box">
                <li class="voice__item">
                    <p class="staff__job"><?php the_field('start_day_left'); ?></p>
                    <p class="staff__name"><?php the_field('staff_name_left'); ?></p>
                    <p class="staff__text"><?php the_field('staff_text_left'); ?></p>
                </li>
                <li class="voice__item">
                    <p class="staff__job"><?php the_field('start_day_right'); ?></p>
                    <p class="staff__name"><?php the_field('staff_name_right'); ?></p>
                    <p class="staff__text"><?php the_field('staff_text_right'); ?></p>
                </li>
            </div>
            <div class="voice__img">
                <img src="<?php the_field('staff_voice_img'); ?>" alt="">
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>