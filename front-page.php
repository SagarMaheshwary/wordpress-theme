<?php get_header() ?>
        <section id="showcase" class="container">
            <div class="dark-overlay">
                <div>
                    <h3 class="center">
                        <?php echo get_theme_mod('showcase_heading','Custom bootstrap theme') ?>
                    </h3>
                    <p>
                        <?php echo get_theme_mod('showcase_text','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, reiciendis.') ?>
                    </p>
                    
                    <a href="<?php echo get_theme_mod('btn_url','#') ?>" class="btn btn-lg btn-primary" id="btn-showcase">
                        <?php echo get_theme_mod('btn_text','Read More') ?>
                    </a>
                </div>
            </div>
        </section>
        <section id="boxes" class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <?php if(is_active_sidebar('box1')): ?>
                        <?php dynamic_sidebar('box1') ?>
                    <?php endif ?>
                </div>
                <div class="col-sm-12 col-md-4">
                    <?php if(is_active_sidebar('box2')): ?>
                        <?php dynamic_sidebar('box2') ?>
                    <?php endif ?>
                </div>
                <div class="col-sm-12 col-md-4">
                    <?php if(is_active_sidebar('box3')): ?>
                        <?php dynamic_sidebar('box3') ?>
                    <?php endif ?>
                </div>
            </div>
        </section>
        <section id="newsletter" class="container">
            <h5>Subscribe to our newsletter</h5>
            <form class="subscribe-form">
                <input type="text" class="browser-default" placeholder="Enter Email Address">
                <button class="btn btn-primary" id="btn-newsletter">Subscribe</button>
            </form>
        </section>
<?php get_footer() ?>