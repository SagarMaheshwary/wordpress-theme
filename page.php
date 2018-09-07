<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <section class="mt-5">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <h3 class="grey-text-2"><?php the_title() ?></h3>
                        <div class="py-2 grey-text-1">
                            <?php the_content() ?>
                        </div>
                    <?php endwhile ?>
                <?php else: ?>
                    <?php __('Page Not Found!') ?>
                <?php endif ?>
    </section>
<?php get_footer() ?>