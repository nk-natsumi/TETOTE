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
        <div class="header__inner">
            <?php if (is_front_page()): ?>
                <h1 class="header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link">
                        <?php bloginfo('name'); ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Group 19.svg" alt="<?php bloginfo('name'); ?>" class="header__img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Group 18.svg" alt="<?php bloginfo('name'); ?>" class="header__img scrolled-logo">
                    </a>
                </h1>
            <?php else: ?>
                <p class="header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link">
                        <?php bloginfo('name'); ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Group 18.svg" alt="<?php bloginfo('name'); ?>" class="header__img">
                    </a>
                </p>
            <?php endif; ?>
        </div>

        <nav id="header__nav" class="header__nav">
            <ul class="header__list">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Group 18.svg" alt="<?php bloginfo('name'); ?>" class="hamberger-logo">
                    </a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>/">ホーム</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>/#about">私たちの取り組み</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>/#service">事業内容</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>/company/" <?php if (is_page('company')) echo ' class="current"'; ?>>会社概要</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>/news/" <?php if (is_single() || is_archive() || is_home()) echo ' class="current"'; ?>>お知らせ</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>/contact/" <?php if (is_page('contact')) echo ' class="current"'; ?>>お問い合わせ</a></li>
            </ul>

            <ul class="header__link">
                <li class="details-btn"><a href="<?php echo esc_url(home_url('/')); ?>/details/">募集要項</a></li>
                <li class="entry-btn"><a href="<?php echo esc_url(home_url('/')); ?>/entry/">ENTRY</a></li>
            </ul>
        </nav>

        <button type="button" class="menu-trigger" aria-label="メニュー">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </header>

</body>

</html>