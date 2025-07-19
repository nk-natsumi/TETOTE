<?php get_header(); ?>

<main class="details">
    <?php get_template_part('template-parts/parts', 'fv'); ?>


    <section class="details__wrapper section__wrapper">
        <h2 class="details__title section__title">あなたが輝ける場所が、ここにはある</h2>
        <p class="details__sabtitle sabtitle">TETOTEでは、コンサルタントを中心に、様々な職種を募集しています。</p>

        <nav class="details__nav page__nav">
            <ul class="details__nav-list page__nav-list">
                <li class="nav-item">
                    <a href="#consultant">コンサルタント</a>
                </li>
                <li class="nav-item">
                    <a href="#solution-sales">ソリューション営業</a>
                </li>
                <li class="nav-item">
                    <a href="#system-engineer">システムエンジニア</a>
                </li>
            </ul>
        </nav>

        <div class="details__inner">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <div>
                        <h2 class="details__title section__title"><?php the_title(); ?></h2>
                        <dl>
                            <div class="flex-box">
                                <dt>職種名</dt>
                                <dd><?php the_field('job_title'); ?></dd>
                            </div>

                            <div class="flex-box">
                                <dt>雇用形態</dt>
                                <dd><?php the_field('job_type'); ?></dd>
                            </div>

                            <div class="flex-box">
                                <dt>業務内容</dt>
                                <dd><?php the_field('job_description'); ?></dd>
                            </div>
                            <div class="flex-box">
                                <dt>就業時間</dt>
                                <dd><?php the_field('job_time'); ?></dd>
                            </div>
                            <div class="flex-box">
                                <dt>給与</dt>
                                <dd><?php the_field('job_salary'); ?></dd>
                            </div>
                            <div class="flex-box">
                                <dt>勤務地</dt>
                                <dd><?php the_field('job_location'); ?></dd>
                            </div>
                            <div class="flex-box">
                                <dt>転勤の有無</dt>
                                <dd><?php the_field('job_relocation'); ?></dd>
                            </div>
                            <div class="flex-box">
                                <dt>休日休暇</dt>
                                <dd><?php the_field('job_vacation'); ?></dd>
                            </div>
                            <div class="flex-box">
                                <dt>選考について</dt>
                                <dd><?php the_field('job_selection'); ?></dd>
                            </div>
                            <div class="flex-box">
                                <dt>採用人数</dt>
                                <dd><?php the_field('job_openings'); ?></dd>
                            </div>
                        </dl>
                    </div>
            <?php
                endwhile;
            else :
                echo '<p>募集は現在ありません。</p>';
            endif;
            ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>