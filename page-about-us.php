<?php get_header(); ?>

<main class="about-us__main">
    <?php get_template_part('template-parts/parts', 'fv'); ?>

    <div class="section__wrapper">
        <section class="company-policy">
            <h2 class="policy__title section__title">私達が大切にしていること</h2>
            <ul class="policy__content">
                <?php the_content(); ?>
            </ul>
        </section>

        <section class="message">
            <h2 class="message__title section__title">代表メッセージ</h2>
            <div class="ceo-wrapper flex-box">
                <div class="ceo-img">
                    <img src="<?php the_field('ceo_img'); ?>" alt="">
                </div>
                <div class="ceo-textarea">
                    <h3 class="ceo-title"><?php the_field('ceo_title'); ?></h3>
                    <p class="ceo-text"><?php the_field('ceo_message'); ?></p>
                    <div class="ceo-name">
                        <img src="<?php the_field('ceo_name'); ?>" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="business">
            <h2 class="business__title section__title">事業紹介</h2>
            <p class="business__sabtitle sabtitle">TETOTEの主力事業である「コンサルティング」以外に、新規に取り組んでいる事業をいくつか
                紹介させていただきます。</p>
            <ul class="business__content">
                <li class="business__item flex-box">
                    <div class="business__img">
                        <img src="<?php the_field('business_img_1'); ?>" alt="">
                    </div>
                    <div class="business__textarea">
                        <h3 class="content__title content__title1"><?php the_field('business_title_1'); ?></h3>
                        <p class="content__sabtitle content__sabtitle1"><?php the_field('business_sabtitle_1'); ?></p>
                        <p class="content__text content__text3"><?php the_field('business_text_1'); ?></p>
                    </div>
                </li>
                <li class="business__item flex-box">
                    <div class="business__img">
                        <img src="<?php the_field('business_img_2'); ?>" alt="">
                    </div>
                    <div class="business__textarea">
                        <h3 class="content__title content__title2"><?php the_field('business_title_2'); ?></h3>
                        <p class="content__sabtitle content__sabtitle2"><?php the_field('business_sabtitle_2'); ?></p>
                        <p class="content__text content__text2"><?php the_field('business_text_2'); ?></p>
                    </div>
                </li>
                <li class="business__item flex-box">
                    <div class="business__img">
                        <img src="<?php the_field('business_img_3'); ?>" alt="">
                    </div>
                    <div class="business__textarea">
                        <h3 class="content__title content__title3"><?php the_field('business_title_3'); ?></h3>
                        <p class="content__sabtitle content__sabtitle3"><?php the_field('business_sabtitle_3'); ?></p>
                        <p class="content__text content__text3"><?php the_field('business_text_3'); ?></p>
                    </div>
                </li>
            </ul>
        </section>

        <section class="company__info">
            <h2 class="company__title section__title">会社概要</h2>
            <dl class="company__content">
                <div class="flex-box">
                    <dt>会社名</dt>
                    <dd><?php the_field('company_title'); ?></dd>
                </div>

                <div class="flex-box">
                    <dt>所在地</dt>
                    <dd><?php the_field('company_adress'); ?></dd>
                </div>

                <div class="flex-box">
                    <dt>代表者名</dt>
                    <dd><?php the_field('company_ceo_name'); ?></dd>
                </div>
                <div class="flex-box">
                    <dt>事業内容</dt>
                    <dd class="company__service"><?php the_field('company_service'); ?></dd>
                </div>
                <div class="flex-box">
                    <dt>電話番号</dt>
                    <dd><?php the_field('company_tel'); ?></dd>
                </div>
                <div class="flex-box">
                    <dt>ウェブサイトURL</dt>
                    <dd><?php the_field('company_url'); ?></dd>
                </div>
                <div class="flex-box">
                    <dt>メールアドレス</dt>
                    <dd><?php the_field('company_mail'); ?></dd>
                </div>
                <div class="flex-box">
                    <dt>設立年月</dt>
                    <dd><?php the_field('company_day'); ?></dd>
                </div>
            </dl>
        </section>
    </div>

</main>

<?php get_footer(); ?>