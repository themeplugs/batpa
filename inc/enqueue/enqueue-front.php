<?php

/**
 * Enqueue all styles and scripts
 *
 * @subpackage Batpa
 * @since 1.0
 */

//Enqueue scripts and styles.
function batpa_scripts()
{

    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style('batpa-fonts', batpa_fonts_url(), array(), null);

    //Bootstarp 
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');

    // Theme stylesheet.
    wp_enqueue_style('batpa-style', get_stylesheet_uri());

    //font-awesome
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/fontawesome-all.css');

    //Custom JS
    wp_enqueue_script('batpa-custom.js', get_theme_file_uri('/assets/js/batpa-custom.js'), array('jquery'), true);

    //Nav Focus JS
    wp_enqueue_script('batpa-navigation-focus', get_theme_file_uri('/assets/js/navigation-focus.js'), array('jquery'), true);

    //Superfish JS
    wp_enqueue_script('superfish-js', get_theme_file_uri('/assets/js/jquery.superfish.js'), array('jquery'), true);

    //Bootstarp JS
    wp_enqueue_script('bootstrap.js', get_theme_file_uri('/assets/js/bootstrap.js'), array('jquery'), true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'batpa_scripts');
