<?php $is_page = (bool)(is_page()) ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>
        <h3 class="post-title grey-text-2 mb-0"><?php the_title() ?></h3>
        <?php
            //if it's a post
            if(!$is_page):
        ?>
            <p class="post-date grey-text-1">
                <?php the_time('F j, Y g:i a') ?> by&nbsp;
                <a href="<?php the_permalink() ?>"><?php the_author() ?></a>
            </p>
            <div class="py-2 mb-2 single-post-img">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail() ?>
                <?php endif ?>
            </div>
        <?php endif ?>
        <div class="py-1 grey-text-1">
            <p class="post-content"><?php the_content() ?></p>
        </div>
        <?php
            //if it's a post
            if(!$is_page):
        ?>
            <div class="d-flex justify-content-between my-4">
                <p><?php previous_post_link() ?></p>
                <p><?php next_post_link() ?></p>
            </div>
            <hr>
            <div class="my-4">
                <?php comments_template() ?>
            </div>
        <?php endif ?>
    <?php endwhile ?>
<?php endif ?>