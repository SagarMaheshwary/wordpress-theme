    <?php
        /**
         * if it's not a front page then,
         * show sidebar widget.
         */
        if(!is_front_page()):
    ?>
                </div>
                <div class="col-lg-4 sidebar-module pt-5">
                    <?php if(is_active_sidebar('sidebar')): ?>
                        <?php dynamic_sidebar('sidebar') ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    <?php endif ?>
</main>

<footer class="py-4">
    <h5 class="grey-text-1 text-center">&copy; Sagar Maheshwary <?php echo date('Y') ?></h5>
</footer>
<script src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>

<?php
    /**
     * this hook will inject code that plugins or wordpress uses. 
     */
    wp_footer()
?>
</body>
</html>