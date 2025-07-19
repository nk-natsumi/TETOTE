<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Viga&display=swap" rel="stylesheet">

    <!-- css -->
    <?php if (is_front_page()): ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>

</head>

<body>
    <header class="header <?php if (!is_front_page()) echo 'scrolled'; ?>">
        <div class="header__bar flex-box">
            <?php if (is_front_page()): ?>
                <h1 class="header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-w.svg" alt="<?php bloginfo('name'); ?>" class="header__img main-logo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-b.svg" alt="<?php bloginfo('name'); ?>" class="header__img scrolled-logo">
                    </a>
                </h1>
            <?php else: ?>
                <p class="header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-b.svg" alt="<?php bloginfo('name'); ?>" class="header__img">
                    </a>
                </p>
            <?php endif; ?>

            <li class="header__bar-btn header__link">
                <a class="details-btn" href="<?php echo esc_url(home_url('/')); ?>/details/">募集要項</a>
                <a class="entry-btn" href="<?php echo esc_url(home_url('/')); ?>/entry/">ENTRY</a>
            </li>

            <button type="button" class="menu-trigger" aria-label="メニュー">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <div id="hamburger__menu" class="hamburger__menu">
            <div class="hamburger__inner">
                <h2 class="hamburger__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-b.svg" alt="<?php bloginfo('name'); ?>" class="hamburger__logo-img">
                    </a>
                </h2>
                <nav class="hamburger__nav">
                    <ul class="hamburger__list flex-box">
                        <li class="hamburger-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>/about-us/">ABOUT US<br><span>TETOTEについて</span></a>
                            <a href="<?php echo esc_url(home_url('/')); ?>/staff/">STAFF<br><span>社員について</span></a>
                            <a href="<?php echo esc_url(home_url('/')); ?>/blog/">BLOG<br><span>採用ブログ</span></a>
                        </li>
                        <li class="hamburger-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>/benefits/">BENEFITS<br><span>福利厚生について</span></a>
                            <a href="<?php echo esc_url(home_url('/')); ?>/career/">CARRER<br><span>研修制度とキャリアパス</span></a>
                            <a href="<?php echo esc_url(home_url('/')); ?>/faq/">FAQ<br><span>よくある質問</span></a>
                        </li>
                    </ul>

                    <ul class="hamburger__link header__link">
                        <a class="details-btn" href="<?php echo esc_url(home_url('/')); ?>/details/">募集要項</a>
                        <a class="entry-btn" href="<?php echo esc_url(home_url('/')); ?>/entry/">ENTRY</a>
                    </ul>
                </nav>

            </div>
        </div>

    </header>

</body>

</html>