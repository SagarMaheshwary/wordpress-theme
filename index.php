<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <section id="posts-main" class="mt-5">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <div class="post">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail() ?>
                            <?php endif ?>
                            <div class="post-body p-4">
                                <h3 class="post-title mb-0 grey-text-2 pt-2"><?php the_title() ?></h3>
                                <p class="post-date grey-text-1">
                                    <?php the_time('F j , Y g:i a') ?> by
                                    <a href="<?php get_author_posts_url(get_the_author_meta('ID')) ?>">
                                        <?php the_author() ?>
                                    </a>
                                </p>
                                <div class="post-content py-1 grey-text-1">
                                    <p><?php the_excerpt() ?></p>
                                </div>
                                <hr>
                                <a href="<?php the_permalink() ?>" class="post-link">Read More</a>
                            </div>
                        </div>
                    <?php endwhile ?>
                <?php else: ?>
                    <?php __('No Posts Yet!') ?>
                <?php endif ?>
            </section>

<?php get_footer() ?>