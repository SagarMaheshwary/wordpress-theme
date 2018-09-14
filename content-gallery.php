<?php $is_single = (bool)(is_single()) ?>
<div class="<?php echo $is_single ? 'post-gallery-single' : 'post-gallery box-shadow' ?>">
    <h4 class="post-title text-center mt-3">
        <?php if(!$is_single): ?>
            <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
            </a>
        <?php else: ?>
            <h4 class="post-title text-center">
                <?php the_title() ?>
            </h4>
        <?php endif ?>
    </h4>
    <p class="post-date text-center">
        <?php the_time('F j,Y g:i a') ?>&nbsp;by&nbsp;
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
            <?php the_author() ?>
        </a>
    </p>
    <div class="d-flex post-gallery-body bg-dark py-3">
        <?php the_content() ?>
    </div>
    <?php if($is_single): ?>
        <?php get_template_part('inc/contents/content','comment')  ?>
    <?php endif ?>
</div>