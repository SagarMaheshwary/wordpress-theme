<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="<?php bloginfo('author') ?>">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>
        <?php bloginfo('title') ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title() ?>
    </title>
    <?php wp_head() ?>
</head>
<body>

    <nav class="navbar navbar-expand-md bg-light navbar-light">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')) ?>" class="navbar-brand"><?php bloginfo('name') ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php 
                wp_nav_menu([
                    'menu_location'    => 'primary',
                    'depth'            => 2,
                    'container'        => 'div',
                    'container_class'  => 'collapse navbar-collapse',
                    'container_id'     => 'menu',
                    'menu_class'       => 'nav navbar-nav',
                    'fallback_cb'      => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'           => new WP_Bootstrap_Navwalker()
                ]); 
            ?>
        </div>
    </nav>

    <main>
