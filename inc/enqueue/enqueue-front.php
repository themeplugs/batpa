<?php

/**
 * Enqueue all styles and scripts
 *
 * @subpackage Batpa
 * @since 1.0
 */

//Enqueue scripts and styles.
function batpa_scripts(){
    if (!is_admin()) {
        // Add custom fonts, used in the main stylesheet.
        wp_enqueue_style('batpa-fonts', batpa_fonts_url(), array(), null);

        //Bootstarp 
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
        //font-awesome
        wp_enqueue_style('batpaicon', get_template_directory_uri() . '/assets/css/batpaicon.css');
        
        wp_enqueue_style('batpa-main', get_template_directory_uri() . '/assets/css/main.css',BATPA_VERSION);
        
        // Theme stylesheet.
        wp_enqueue_style( 'batpa-style', get_template_directory_uri() . '/style.css', BATPA_VERSION);
 
    }


    if (!is_admin()) {
        //Custom JS
        wp_enqueue_script('batpa-custom', get_theme_file_uri('/assets/js/batpa-custom.js'), array('jquery'), true);

        //Nav Focus JS
        wp_enqueue_script('navigation-focus', get_theme_file_uri('/assets/js/navigation-focus.js'), array('jquery'), true);

        //Superfish JS
        wp_enqueue_script('jquery-superfish', get_theme_file_uri('/assets/js/jquery.superfish.js'), array('jquery'), true);

        //Bootstarp JS
        wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.js'), array('jquery'), true);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
}
add_action('wp_enqueue_scripts', 'batpa_scripts');
