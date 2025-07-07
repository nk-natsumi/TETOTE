<footer class="footer">
    <div class="footer__entry-box">
        <p>わたしたちと一緒に働く仲間を募集中です。<br>
            少数精鋭のチームで、<br>あなたも会社も一緒に成長していきましょう。</p>
        <div class="top-entry-btn">
            <a href="<?php echo home_url('/entry/'); ?>">ENTRY</a>
        </div>
    </div>
    <div class="footer__inner">
        <div class="">
            <?php if (is_front_page()): ?>
                <h1 class="footer__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link">
                        <?php bloginfo('name'); ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-b.svg" alt="<?php bloginfo('name'); ?>" class="footer__img">
                    </a>
                </h1>
            <?php else: ?>
                <p class="footer__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link">
                        <?php bloginfo('name'); ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-b.svg" alt="<?php bloginfo('name'); ?>" class="footer__img">
                    </a>
                </p>
            <?php endif; ?>

            <nav id="footer__nav" class="footer__nav">
                <ul class="footer__list">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/">ホーム</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/about.us/">TETOTEについて</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/staff/">人を知る</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/company/" <?php if (is_page('company')) echo ' class="current"'; ?>>研修制度とキャリアパス</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/benefits/" <?php if (is_single() || is_archive() || is_home()) echo ' class="current"'; ?>>福利厚生</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/blog/" <?php if (is_page('contact')) echo ' class="current"'; ?>>採用ブログ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/details/">募集要項</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/faq/">よくある質問</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/about.us/#company">会社概要</a></li>
                </ul>
            </nav>
        </div>

        <div class="flex-box">
            <small class="copyright">&copy;2024 TETOTE All Right Reserved.</small>
            <ul class="sns-list">
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<?php if (is_front_page()): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<?php endif; ?>

<!-- 共通のJS -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/index.js"></script>
</body>

</body>

</html>