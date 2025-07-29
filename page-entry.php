<?php get_header(); ?>



<main class="entry">
    <section class="fv">
        <ol class="c-breadcrumbs">
            <?php if (function_exists('bcn_display')) bcn_display(); ?>
        </ol>
    </section>
    <section class="entry__wrapper">
        <div class="entry__inner">
            <div class="entry__textarea">
                <p class="entry__sabtitle">ENTRY FORM</p>
                <h1 class="entry__title"><span>新卒・中途採用</span>エントリーフォーム</h1>
                <p class="entry__text">当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。<span>※</span>は必須項目になります。</p>
            </div>
            <div class="form">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>