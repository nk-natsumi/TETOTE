<?php get_header(); ?>

<main class="main">
    <section class="top-fv">
        <div class="fv__img-wrapper">
            <div class="fv-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fv01.jpg" alt="" class="top-fv__img">
            </div>
            <div class="fv-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fv02.jpg" alt="" class="top-fv__img">
            </div>
        </div>


        <div class="top-fv__textarea fade-in-up">
            <h2 class="top-fv__title text-delay delay-1">BECOME A<br>CHALLENGER.</h2>
            <p class="top-fv__text text-delay delay-2">君の挑戦が、意思が、未来を変える</p>
        </div>

        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 1
        );
        $latest_post = new WP_Query($args);

        if ($latest_post->have_posts()) :
            while ($latest_post->have_posts()) : $latest_post->the_post();

                $custom_title = get_field('blog_custom_title');
        ?>
                <section class="fv__blog">
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="fv__blog-link flex-box">
                        <p class="fv__blog-left">NEWS</p>
                        <p class="fv__blog-title">
                            <?php
                            $custom_title = get_field('blog_custom_title');
                            if (!empty($custom_title)) {
                                echo esc_html($custom_title);
                            } else {
                                the_title();
                            }
                            ?>
                        </p>
                        <p class="fv__blog-btn">VIEW MORE</p>
                    </a>
                </section>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </section>

    <section id="top-about" class="top-about">
        <div class="top-about__inner">
            <div class="swiper top-about__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide01 1.jpg" alt="取り組みイメージ" class="top-about__img">
                    </div>
                    <div class="swiper-slide about-slide02">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide02 1.jpg" alt="取り組みイメージ" class="top-about__img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide03 1.jpg" alt="取り組みイメージ" class="top-about__img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide01 1.jpg" alt="取り組みイメージ" class="top-about__img">
                    </div>
                    <div class="swiper-slide about-slide02">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide02 1.jpg" alt="取り組みイメージ" class="top-about__img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide03 1.jpg" alt="取り組みイメージ" class="top-about__img">
                    </div>
                </div>
                <h2 class="top-about__slogan fade-in-up">
                    <p class="text-delay delay-1">後悔しないキャリアを作る、</p>
                    <p class="slogan_02 text-delay delay-2">それこそが、我々の使命だ</p>
                </h2>
            </div>

        </div>
        <div class="top-about__textarea content__wrapper">
            <div class="top-about__text fade-in-up">
                <p class="text-delay delay-1">「人手不足」<br>
                    今の日本が抱えるこの社会課題に挑み、<br>
                    企業と個人の可能性を最大限に引き出す。<br>
                    それが私達の役目。</p>
                <p class="text-delay delay-2">単につなぐだけじゃない。<br>
                    「手と手」を取り合っていけるような、<br>
                    持続可能な社会を、一緒に作りませんか？</p>
            </div>
            <div class="top-about__btn more-btn">
                <a href="<?php echo home_url('/about-us/'); ?>">VIEW MORE</a>
            </div>
        </div>
    </section>

    <section id="top-staff" class="top-staff">
        <div class="top-title fade-in-up">
            <h2 data-title="staff" class="main-title"><span>人</span>を知る</h2>
        </div>
        <div class="section__wrapper top-section__title">
            <p class="sabtitle">TETOTEの社員がどういった信念を持って働いているのか、<br>一日のスケジュールや仕事内容などを紹介します。</p>
        </div>
        <div class="swiper staff__swiper">
            <div class="swiper-wrapper ">
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
                        <div class="swiper-slide top-staff__slide">
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
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
        <div class="top-staff__controls">
            <div class="top-staff__btn more-btn">
                <a href="<?php echo home_url('/staff/'); ?>">VIEW MORE</a>
            </div>

            <div class="swiper-button-prev">
                <span></span>
            </div>
            <div class="swiper-button-next">
                <span></span>
            </div>
        </div>


    </section>

    <section id="top-benefits" class="top-benefits">
        <div class="section__wrapper">
            <div class="top-section__title">
                <div class="top-title fade-in-up">
                    <h2 class="main-title"><span>制度・環境</span>を知る</h2>
                </div>
                <p class="sabtitle">当社では働く従業員とそのご家族が健やかに過ごせるよう、多様な研修、福利厚生を提供しています。</p>
            </div>
            <div class="top-benefits__link grid-box fade-in-up">
                <a class="top-benefits__item text-delay delay-1" href="<?php echo home_url('/career/'); ?>">
                    <div class="top-benefits__img benefits__img01">
                        <p class="link-name-e">Traning And Career</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/career.png" alt="" class="top-benefits__img">
                    </div>
                    <div class="top-benefits__text">
                        <h3 class="link-name-j">研修制度とキャリアパス</h3>
                        <p class="link-text">個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。</p>
                    </div>
                    <div class="arrow">
                        <span></span>
                    </div>
                </a>
                <a class="top-benefits__item text-delay delay-2" href="<?php echo home_url('/benefits/'); ?>">
                    <div class="top-benefits__img benefits__img02">
                        <p class="link-name-e">Employee Benefits</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/welfare.png" alt="" class="top-benefits__img">
                    </div>
                    <div class="top-benefits__text">
                        <h3 class="link-name-j">福利厚生</h3>
                        <p class="link-text">TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。</p>
                    </div>
                    <div class="arrow">
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="top-blog" class="top-blog">
        <div class="section__wrapper">
            <div class="top-section__title">
                <div class="flex-box">
                    <div class="top-title fade-in-up">
                        <h2 class="main-title">採用ブログ</h2>
                    </div>
                    <div class="top-blog__btn">
                        <a href="<?php echo home_url('/blog/'); ?>">
                            VIEW MORE
                            <p class="arrow"><span></span></p>
                        </a>
                    </div>
                </div>
                <p class="sabtitle">採用情報やイベント情報、社員の紹介など、<br>日々の現場の様子をご紹介します。</p>
            </div>
            <ul class="top-blog__content grid-box fade-in-up">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4
                );
                $blog_query = new WP_Query($args);

                if ($blog_query->have_posts()) :
                    $index = 0;
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                        $index++;
                        $delay_class = 'text-delay delay-' . $index;
                ?>
                        <li class="top-blog__item">
                            <article class="top-blog__link <?php echo $delay_class; ?>">
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
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </ul>
        </div>
    </section>

    <section id="top-recruit" class="top-recruit">
        <div class="top-title fade-in-up">
            <h2 class="main-title">採用情報</h2>
        </div>
        <div class="recruit__wrapper section-title">
            <p class="sabtitle">募集要項（職種、業務内容、応募条件、選考フロー）とよくある質問・会社概要などをまとめています。</p>
        </div>

        <div class="more-btn top-recruit__btn">
            <div class="flex-box">
                <a class="top-recruit-btn recruit-item1 " href="<?php echo home_url('/details/'); ?>">募集要項</a>
                <a class="top-recruit-btn recruit-item2" href="<?php echo home_url('/faq/'); ?>">よくある質問</a>
            </div>
            <div class="recruit-item3">
                <a class="top-recruit-btn recruit-item3" href="<?php echo home_url('/about-us/'); ?>">会社概要</a>
            </div>
        </div>


    </section>


</main>



<?php get_footer(); ?>