<?php
    /**
     * 404 page that will be displayed whenever
     * wordpress is unable to find a page or post.
     */
?>

<?php get_header() ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <section class="pt-5">
                    <h2 class="text-center grey-text-2 mt-5">
                        Oops! The page you're looking for could not be found.&nbsp;
                    </h2>
                    <h2 class="text-center grey-text-2">
                        <a href="<?php echo esc_url(home_url('/')) ?>">Go Home</a>
                    </h2>
                </section>
<?php get_footer() ?>