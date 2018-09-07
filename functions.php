<?php

    require_once get_template_directory().'/navwalker.php';

    function wpb_theme_support(){
        //allow post thumbnails
        add_theme_support('post-thumbnails');

        register_nav_menus([
            'primary' => __('Primary Menu')
        ]);
    }

    function set_excerpt_length(){
        return 45;
    }

    add_action('after_setup_theme','wpb_theme_support');

    add_filter('excerpt_length','set_excerpt_length');

    function wp_init_widgets($id){
        register_sidebar([
            'name'          => 'Sidebar',
            'id'            => 'sidebar',
            'before_widget' => '<div class="p-2">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="grey-text-2">',
            'after_title'   => '</h4>'
        ]);
    }

    add_action('widgets_init','wp_init_widgets');