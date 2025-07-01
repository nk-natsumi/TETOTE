<footer class="footer">
    <div class="footer__entry-box">
        <p>わたしたちと一緒に働く仲間を募集中です。<br>
            少数精鋭のチームで、<br>あなたも会社も一緒に成長していきましょう。</p>
    </div>
    <div class="footer__inner">

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