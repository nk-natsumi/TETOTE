<footer class="footer">
    <div class="footer__upper">
        <div class="footer__entry-box">
            <p class="footer__entry-text">わたしたちと一緒に働く仲間を募集中です。<br>
                少数精鋭のチームで、<br>あなたも会社も一緒に成長していきましょう。</p>
            <div class=" more-btn footer__entry-btn">
                <a href="<?php echo home_url('/entry/'); ?>">ENTRY</a>
            </div>
        </div>
    </div>
    <div class="footer__main">
        <div class="footer__inner flex-box">
            <?php if (is_front_page()): ?>
                <h1 class="footer__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-b.svg" alt="<?php bloginfo('name'); ?>" class="footer__img">
                    </a>
                </h1>
            <?php else: ?>
                <p class="footer__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-b.svg" alt="<?php bloginfo('name'); ?>" class="footer__img">
                    </a>
                </p>
            <?php endif; ?>
            <nav id="footer__nav" class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__item footer__item-upper"><a href="<?php echo esc_url(home_url('/')); ?>/">ホーム</a>
                        <a href="<?php echo esc_url(home_url('/')); ?>/about.us/">TETOTEについて</a>
                        <a href="<?php echo esc_url(home_url('/')); ?>/staff/">人を知る</a>
                        <a href="<?php echo esc_url(home_url('/')); ?>/career/" <?php if (is_page('company')) echo ' class="current"'; ?>>研修制度とキャリアパス</a>
                        <a href="<?php echo esc_url(home_url('/')); ?>/benefits/" <?php if (is_single() || is_archive() || is_home()) echo ' class="current"'; ?>>福利厚生</a>
                    </li>
                    <li class="footer__item footer__item-lower">
                        <a href="<?php echo esc_url(home_url('/')); ?>/blog/" <?php if (is_page('contact')) echo ' class="current"'; ?>>採用ブログ</a>
                        <a href="<?php echo esc_url(home_url('/')); ?>/details/">募集要項</a>
                        <a href="<?php echo esc_url(home_url('/')); ?>/faq/">よくある質問</a>
                        <a href="<?php echo esc_url(home_url('/')); ?>/about.us/">会社概要</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="footer__sns-box flex-box">
            <small class="copyright">&copy; 2024 TETOTE All Right Reserved.</small>
            <ul class="sns-list flex-box">
                <li class="sns-item">
                    <a href="https://www.facebook.com/yourpage" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-icon.png" alt="Facebook">
                    </a>
                </li>
                <li class="sns-item">
                    <a href="https://twitter.com/yourname" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter-icon.png" alt="Twitter">
                    </a>
                </li>
                <li class="sns-item">
                    <a href="https://www.youtube.com/@yourchannel" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/youtube-icon.png" alt="YouTube">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>



<?php wp_footer(); ?>

</body>


</html>