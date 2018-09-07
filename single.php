<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <section class="mt-5">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <h3 class="post-title grey-text-2 mb-0"><?php the_title() ?></h3>
                        <p class="post-date grey-text-1">
                            <?php the_time('F j, Y g:i a') ?> by&nbsp;
                            <a href="<?php the_permalink() ?>"><?php the_author() ?></a>
                        </p>
                        <div class="py-2 mb-2 single-post-img">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail() ?>
                            <?php endif ?>
                        </div>
                        <div class="py-1 grey-text-1">
                            <p class="post-content"><?php the_content() ?></p>
                        </div>
                        <div class="d-flex justify-content-between my-4">
                            <p><?php previous_post_link() ?></p>
                            <p><?php next_post_link() ?></p>
                        </div>
                        <hr>
                        <div class="my-4">
                            <?php comments_template() ?>
                        </div>
                    <?php endwhile ?>
                <?php else: ?>
                    <?php __('Post not found!') ?>
                <?php endif ?>
            </section>

<?php get_footer() ?>