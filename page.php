<?php
    /**
     * Template for displaying a page.
     */
?>
<?php get_header() ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <section class="mt-5">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post() ?>
                            <?php get_template_part('content',get_post_format()) ?>
                        <?php endwhile ?>
                    <?php endif ?>
                </section>
<?php get_footer() ?>