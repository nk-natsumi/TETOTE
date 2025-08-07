<?php get_header(); ?>

<main class="entry-thanks">
    <section class="fv">
        <div class="c-breadcrumbs__wrapper">
            <ol class="c-breadcrumbs">
                <?php if (function_exists('bcn_display')) bcn_display(); ?>
            </ol>
        </div>
    </section>
    <section class="entry__wrapper">
        <div class="entry__inner thanks-messsage">
            <div class="thanks-text">
                <?php echo wp_kses_post(get_the_content()); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>