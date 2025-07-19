<?php get_header(); ?>

<main class="main">

    <?php get_template_part('template-parts/parts', 'fv'); ?>


    <div class="subpage__wrapper">
        <div class="career">
            <h2 class="career__title section__title">キャリアパスに沿った研修制度を用意</h2>
            <p class="career__sabtitle sabtitle">弊社では、コンサルタントのキャリアパスを、大きく4つのステージに分けています。</p>

            <div class="career__img">
                <img src="<?php the_field('career_img'); ?>" alt="">
            </div>

            <p class="career__text sabtitle">TETOTE は、コンサルタントのキャリアパスを支えるために、以下の独自の研修制度を設けています。</p>

        </div>

        <ul class="training__content">
            <li class="training__item">
                <h2 class="training__title"><?php the_field('training_title_1'); ?></h2>
                <p class="training__text"><?php the_field('training_details_1'); ?></p>
            </li>
            <li class="training__item">
                <h2 class="training__title"><?php the_field('training_title_2'); ?></h2>
                <p class="training__text"><?php the_field('training_details_2'); ?></p>
            </li>
            <li class="training__item">
                <h2 class="training__title"><?php the_field('training_title_3'); ?></h2>
                <p class="training__text"><?php the_field('training_details_3'); ?></p>
            </li>
            <li class="training__item">
                <h2 class="training__title"><?php the_field('training_title_4'); ?></h2>
                <p class="training__text"><?php the_field('training_details_4'); ?></p>
            </li>
            <li class="training__item">
                <h2 class="training__title"><?php the_field('training_title_5'); ?></h2>
                <p class="training__text"><?php the_field('training_details_5'); ?></p>
            </li>
        </ul>

    </div>
</main>

<?php get_footer(); ?>