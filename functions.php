<?php

    //require the navwalker for bootstrap nav menu
    require_once get_template_directory().'/navwalker.php';

    /**
     * Add features to our theme.
     * 
     * @return void
     */
    function wpb_theme_support(){
        //allow post thumbnails
        add_theme_support('post-thumbnails');

        //register navbar menu
        register_nav_menus([
            'primary' => __('Primary Menu')
        ]);

        //Post format
        add_theme_support('post-formats',[
            'aside',
            'gallery'
        ]);
    }

    /**
     * Set the excerpt length for posts.
     * 
     * @return int
     */
    function set_excerpt_length(){
        return 45;
    }

    /**
     * Register sidebar in our theme.
     * 
     * @param string $name
     * @param string $id
     * @param string $before_widget
     * @param string $after_widget
     * @param string $before_title
     * @param string $after_title
     * @return void
     */
    function register_theme_sidebar($name,$id,$before_widget,$after_widget,$before_title,$after_title){
        $args = [
            'name'          => $name,
            'id'            => $id,
            'before_widget' => $before_widget,
            'after_widget'  => $after_widget,
            'before_title'  => $before_title,
            'after_title'   => $after_title
        ];

        //register the sidebar for our theme.
        register_sidebar($args);
    }

    /**
     * Register theme widgets.
     * 
     * @param string $id
     * @return void
     */
    function wp_init_widgets($id){

        register_theme_sidebar(
            'Sidebar' ,'sidebar' ,'<div class="p-2">' ,'</div>' ,'<h4 class="grey-text-2">' ,'</h4>'
        );

        register_theme_sidebar(
            'Box 1' ,'box1' ,'<div class="box">' ,'</div>' ,'<h4 class="grey-text-2">' ,'</h4>'
        );

        register_theme_sidebar(
            'Box 2' ,'box2' ,'<div class="box">' ,'</div>' ,'<h4 class="grey-text-2">' ,'</h4>'
        );

        register_theme_sidebar(
            'Box 3', 'box3' ,'<div class="box">' ,'</div>' ,'<h4 class="grey-text-2">' ,'</h4>'
        );

    }

    /**
     * After the page is loaded and the theme is initialized,
     * then run this hook.
     */
    add_action('after_setup_theme','wpb_theme_support');

    /**
     * Modify the excerpt length.
     */
    add_filter('excerpt_length','set_excerpt_length');

    /**
     * Initialize the wordpress widgets.
     */
    add_action('widgets_init','wp_init_widgets');

    //require the script the contains the theme customizer
    require_once get_template_directory().'/inc/customizer.php';