<?php

    /**
     * Add a section to theme customizer.
     * 
     * @param object $wp_customize
     * @param string $id
     * @param string $title
     * @param string $desc
     * @param int $priority
     * @return void
     */
    function add_section($wp_customize,$id,$title,$desc,$priority){
        $wp_customize->add_section($id,[
            'title'       => __($title,'wp_bootstrap'),
            'description' => __($desc,'wp_bootstrap'),
            'priority'    => $priority
        ]);
    }

    /**
     * Add setting for a control.
     * 
     * @param object $wp_customize
     * @param string $id
     * @param string $default_txt
     * @return void
     */
    function add_setting($wp_customize,$id,$default_txt){
        $wp_customize->add_setting($id,[
            'default' => __($default_txt,'wp_bootstrap'),
            'type'    => 'theme_mod'
        ]);
    }

    /**
     * Add control to theme customizer.
     * 
     * @param object $wp_customize
     * @param string $id
     * @param string $label
     * @param string $section_id
     * @param int $priority
     * @return void
     */
    function add_control($wp_customize,$id,$label,$section_id,$priority){
        $wp_customize->add_control($id,[
            'label'    => __($label, 'wp_bootstrap'),
            'section'  => $section_id,
            'priority' => $priority
        ]);
    }

    /**
     * Add Image control to theme customizer.
     * 
     * @param Object $wp_customize
     * @param string $id
     * @param string $label
     * @param string $section_id
     * @param string $settings_id
     * @param int $priority
     * @return void
     */
    function add_image_control($wp_customize,$id,$label,$section_id,$settings_id,$priority){
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,$id,[
            'label'    => __($label,'wp_bootstrap'),
            'section'  => $section_id,
            'settings' => $settings_id,
            'priority' => $priority
        ]));
    }

    /**
     * Add color picker to theme customizer.
     * 
     * @param object $wp_customize
     * @param string $color
     * @param string $label
     * @param string $section_id
     * @param string $settings_id
     * @param int $priority
     * @return void
     */
    function add_color_control($wp_customize,$color,$label,$section_id,$settings_id,$priority){
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,$color,[
            'label'    => __($label),
            'section'  => $section_id,
            'settings' => $settings_id,
            'priority' => $priority
        ]));
    }

    /**
     * Register theme customizer.
     * 
     * @param object $wp_customize
     * @return void
     */
    function wp_customize_register($wp_customize){

        add_section(
            $wp_customize ,'showcase' ,'Front Page' ,'Options for showcase' ,130
        );

        add_setting(
            $wp_customize ,'logo_text' ,'WP Bootstrap'
        );

        add_control(
            $wp_customize ,'logo_text' ,'Brand Logo Text' ,'showcase' ,1
        );

        add_setting(
            $wp_customize ,'showcase_heading' ,'Custom Bootstrap Wordpress Theme'
        );

        add_setting(
            $wp_customize ,'showcase_image' ,'Showcase Image'
        );

        add_image_control(
            $wp_customize ,'showcase_image' ,'Showcase Image' ,'showcase' ,'showcase_image' ,2
        );

        add_setting(
            $wp_customize ,'showcase_image_color','#000'
        );

        add_color_control(
            $wp_customize ,'showcase_image_color' ,'Image Overlay Color' ,'showcase' ,'showcase_image_color',3
        );
        
        add_control(
            $wp_customize ,'showcase_heading' ,'Showcase Heading' ,'showcase' ,4
        );

        add_setting(
            $wp_customize ,'showcase_image' ,get_template_directory().'/images/showcase.png'
        );

        add_setting(
            $wp_customize ,'showcase_text' ,
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, reiciendis.'
        );

        add_control(
            $wp_customize ,'image_text' ,'Image Text' ,'showcase' ,5
        );

        add_setting(
            $wp_customize ,'btn_url' ,'http"//test.dev'
        );

        add_control(
            $wp_customize ,'btn_url' ,'Button URL' ,'showcase' ,6
        );

        add_setting(
            $wp_customize ,'btn_text' ,'Read More'
        );

        add_control(
            $wp_customize ,'btn_text' ,'Button Text' ,'showcase' ,7
        );

        add_setting(
            $wp_customize ,'btn_color' ,'#1976d2'
        );

        add_color_control(
            $wp_customize ,'btn_color' ,'Button Color' ,'showcase' ,'btn_color',8
        );

        add_setting(
            $wp_customize ,'icon_color' ,'#1976d2'
        );

        add_color_control(
            $wp_customize ,'icon_color' ,'Icons Color' ,'showcase' ,'icon_color',9
        );

        add_setting(
            $wp_customize ,'newsletter_btn' ,'#1976d2'
        );

        add_color_control(
            $wp_customize ,'newsletter_btn' ,'Newsletter Button Color' ,'showcase' ,'newsletter_btn',9
        );
    }

    /**
     * Convert HEX value to RGBA.
     * 
     * @param string $color
     * @param boolean|false $opacity
     * @return string
     */
    function convert_hex2rgba($color, $opacity = false) {
        $default = 'rgb(0,0,0)';    
        
        if (empty($color))
            return $default;    
    
        if ($color[0] == '#')
            $color = substr($color, 1);
        
        if (strlen($color) == 6)
            $hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
        
        elseif (strlen($color) == 3)
            $hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
        
        else
            return $default;
           
        $rgb = array_map('hexdec', $hex);    
    
        if ($opacity) {
            if (abs($opacity) > 1)
                $opacity = 1.0;
    
            $output = 'rgba(' . implode(",", $rgb) . ',' . $opacity . ')';
        } else {
            $output = 'rgb(' . implode(",", $rgb) . ')';
        }    
        return $output;
    }


    /**
     * Apply custom css styles from theme customizer.
     * 
     * @return void
     */
    function wp_bootstrap_custom_css(){
        ?>
        
        <style>
            .dark-overlay{
                background: <?php echo convert_hex2rgba(get_theme_mod('showcase_image_color','#000000'),0.5) ?> ;
            }

            #showcase{
                background: url('<?php echo get_theme_mod('showcase_image'); ?>') no-repeat center;
                background-size: cover;
            }

            #btn-showcase{
                background: <?php echo get_theme_mod('btn_color','#1976d2') ?> !important;
            }

            .box i{
                color: <?php echo get_theme_mod('icon_color','#1976d2') ?> !important;
            }

            #btn-newsletter{
                background: <?php echo get_theme_mod('newsletter_btn','#1976d2') ?> !important;
            }
        </style>
        
        <?php

    }

    //register theme customizer.
    add_action('customize_register','wp_customize_register');

    //add custom css to head tag.
    add_action('wp_head','wp_bootstrap_custom_css');