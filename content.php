    <?php $is_page = (bool)(is_page()) ?>
    <?php $is_single = (bool)(is_single()) ?>
    <?php if(!$is_single): ?>
    <?php /* post div start */ ?>
    <div class="post">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail() ?>
        <?php endif ?>
    <?php else: ?>
        <h3 class="post-title grey-text-2 mb-0"><?php the_title() ?></h3>
    <?php endif ?>
    
    <?php
        //if it's a post
        if(!$is_page && $is_single):
    ?>
        <p class="post-date grey-text-1">
            <?php the_time('F j, Y g:i a') ?>&nbsp;by&nbsp;
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
                <?php the_author(); ?>
            </a>
        </p>
        <div class="py-2 mb-2 single-post-img">
            <?php get_template_part('inc/contents/content','thumbnail') ?>
        </div>
    <?php endif ?>
    <?php if(!$is_single && !$is_page): ?>
            <div class="post-body p-4 box-shadow">
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
    <?php /* Post div end */ ?>    
    <?php else: ?>
        <div class="py-1 grey-text-1">
            <p class="post-content"><?php the_content() ?></p>
        </div>
    <?php endif ?>
    <?php
        //if it's a post
        if(!$is_page && $is_single):
    ?>
    <?php get_template_part('inc/contents/content','comment') ?>    
    <?php endif ?>