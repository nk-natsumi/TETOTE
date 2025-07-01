<?php get_header(); ?>

<main class="main">
    <section class="fv">
        <div class="swiper fv-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fv01.jpg" alt="" class="fv__img">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fv02.jpg" alt="" class="fv__img">
                </div>
            </div>
        </div>
        <div class="fv__textarea">
            <h2 class="fv__title">BECOME A<br>CHALLENGER.</h2>
            <p class="fv__text">君の挑戦が、意思が、未来を変える</p>
        </div>
        <?php
        $args = array(
            'post_type' => 'post',        // 投稿タイプ（デフォルトの投稿）
            'posts_per_page' => 1         // 最新1件だけ取得
        );
        $latest_post = new WP_Query($args);

        if ($latest_post->have_posts()) :
            while ($latest_post->have_posts()) : $latest_post->the_post(); ?>
                <section class="fv-blog">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="fv-img"><?php the_post_thumbnail('medium'); ?></div>
                        <?php endif; ?>
                        <div class="fv-text">
                            <span class="date"><?php echo get_the_date(); ?></span>
                            <h2 class="title"><?php the_title(); ?></h2>
                        </div>
                    </a>
                </section>
        <?php
            endwhile;
            wp_reset_postdata(); // ← 忘れずにリセット！
        endif;
        ?>
    </section>

    <section id="about" class="about">
        <div class="about__inner">
            <div class="swiper about-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide01 1.jpg" alt="取り組みイメージ" class="about__img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide02 1.jpg" alt="取り組みイメージ" class="about__img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide03 1.jpg" alt="取り組みイメージ" class="about__img">
                    </div>
                </div>
            </div>
            <h2 class="about__slogan">後悔しないキャリアを作る、<br>それこそが、我々の使命だ</h2>
        </div>
        <div class="about__textarea content-wrappe">
            <div class="about-text">
                <p>「人手不足」<br>
                    今の日本が抱えるこの社会課題に挑み、<br>
                    企業と個人の可能性を最大限に引き出す。<br>
                    それが私達の役目。</p>
                <p>単につなぐだけじゃない。<br>
                    「手と手」を取り合っていけるような、<br>
                    持続可能な社会を、一緒に作りませんか？</p>
            </div>
            <div class="about__btn more-btn">
                <a href="<?php echo home_url('/about-us/'); ?>">VIEW MORE</a>
            </div>
        </div>
    </section>

    <section id="staff" class="staff">
        <div class="section-wrapper">
            <div class="section-title">
                <div class="title-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/member.png" alt="<?php bloginfo('name'); ?>" class="section__title-img">
                </div>
                <h2 data-title="staff" class="title">人を知る</h2>
                <p class="sabtitle">TETOTEの社員がどういった信念を持って働いているのか、<br>一日のスケジュールや仕事内容などを紹介します。</p>
            </div>
            <div class="swiper staff__swiper">
                <div class="swiper-wrapper ">
                    <?php
                    $args = array(
                        'post_type' => 'staff',
                        'posts_per_page' => 4
                    );
                    $staff_query = new WP_Query($args);
                    if ($staff_query->have_posts()):
                        while ($staff_query->have_posts()): $staff_query->the_post();
                    ?>
                            <div class="swiper-slide staff__slide">
                                <div class="staff__img-wrap">
                                    <img src="<?php the_field('staff_img'); ?>" alt="<?php the_title(); ?>" class="staff__img">

                                    <div class="staff__message">
                                        <p class="msg1"><?php the_field('staff_message_1'); ?></p>
                                        <p class="msg2"><?php the_field('staff_message_2'); ?></p>
                                    </div>

                                    <div class="staff__meta">
                                        <p class="staff__name"><?php the_title(); ?></p>
                                        <p class="staff__job"><?php the_field('staff_job'); ?>（<?php the_field('staff_year'); ?>年 入社）</p>
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

            <div class="about__btn more-btn">
                <a href="<?php echo home_url('/staff/'); ?>">VIEW MORE</a>
            </div>
        </div>
    </section>

    <section id="benefits" class="benefits">
        <div class="section__wrapper">
            <div class="section-title">
                <div class="title-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/benefits.png" alt="benefits" class="section__title-img">
                </div>
                <h2 data-title="staff" class="title"><span>制度・環境</span>を知る</h2>
                <p class="sabtitle">当社では働く従業員とそのご家族が健やかに過ごせるよう、多様な研修、福利厚生を提供しています。</p>
            </div>
            <div class="benefits__link-area grid-box">
                <a href="<?php echo home_url('/career/'); ?>">
                    <div class="benefits__img">
                        <p class="link-name-e">Traning And Career</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/career.png" alt="" class="benefits__img">
                    </div>
                    <div class="benefits__text">
                        <h3 class="link-name-j">研修制度とキャリアパス</h3>
                        <p class="link-text">個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。</p>
                    </div>
                </a>
                <a href="<?php echo home_url('/benefits/'); ?>">
                    <div class="benefits__img">
                        <p class="link-name-e">Employee Benefitsr</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/welfare.png" alt="" class="benefits__img">
                    </div>
                    <div class="benefits__text">
                        <h3 class="link-name-j">福利厚生</h3>
                        <p class="link-text">TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="blog" class="blog">
        <div class="section__wrapper">
            <div class="flex-box">
                <div class="section-title">
                    <div class="title-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog.png" alt="blog" class="blog__title-img">
                    </div>
                    <h2 class="title">採用ブログ</h2>
                    <p class="sabtitle">採用情報やイベント情報、社員の紹介など、<br>日々の現場の様子をご紹介します。</p>
                </div>
                <div class="blog__btn">
                    <a href="<?php echo home_url('/blog/'); ?>">
                        <p>VIEW MORE</p>
                    </a>
                </div>
            </div>
            <ul class="blog__content grid-box">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4
                );
                $blog_query = new WP_Query($args);

                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <li class="blog__item">
                            <a href="<?php the_permalink(); ?>" class="blog__link">
                                <div class="blog__inner">
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
                                        <span class="blog__category">
                                            <?php
                                            $category = get_the_category();
                                            if (!empty($category)) {
                                                echo esc_html($category[0]->name); // 最初のカテゴリ名を表示
                                            }
                                            ?>
                                        </span>
                                        <h3 class="blog__title"><?php the_title(); ?></h3>
                                        <p class="blog__date"><?php the_time('Y.m.d'); ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </ul>
        </div>
    </section>


</main>



<?php get_footer(); ?>