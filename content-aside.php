<?php $is_single = (bool)(is_single()) ?>
<?php if(!$is_single): ?>
    <div class="post-aside box-shadow card">
        <div class="card-header">
<?php endif ?>
        <h4 class="post-title grey-text-2 text-center mt-2">
            <?php the_title() ?>
        </h4>
        <p class="post-date grey-text-2 text-center">
            <?php the_time('F j,Y g:i a') ?>&nbsp;by&nbsp;
            <a href="<?php the_author_url(get_the_author_meta('ID')) ?>">
                <?php the_author() ?>
            </a>
        </p>
<?php if(!$is_single): ?>
    </div>
    <div class="card-body">
<?php endif ?>
<?php get_template_part('inc/contents/content','thumbnail') ?>
<?php if(!$is_single): ?>
    <div class="grey-text-2">
        <p>
            <?php the_excerpt() ?>
        </p>
    </div>
    <hr>
    <a class="post-link" href="<?php the_permalink() ?>">Read more</a>
    </div>
</div>
<?php else: ?>
    <div class="grey-text-2">
        <p>
            <?php the_content() ?>
        </p>
    </div>
    <?php get_template_part('inc/contents/content','comment') ?>
<?php endif ?>
    