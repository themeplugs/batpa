<?php

/**
 * Enqueue all styles and scripts
 *
 * @subpackage Bepta
 * @since 1.0
 */

//Enqueue scripts and styles.
function bepta_scripts()
{

    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style('bepta-fonts', bepta_fonts_url(), array(), null);

    //Bootstarp 
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');

    // Theme stylesheet.
    wp_enqueue_style('bepta-style', get_stylesheet_uri());

    //font-awesome
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/fontawesome-all.css');

    //Custom JS
    wp_enqueue_script('bepta-custom.js', get_theme_file_uri('/assets/js/bepta-custom.js'), array('jquery'), true);

    //Nav Focus JS
    wp_enqueue_script('bepta-navigation-focus', get_theme_file_uri('/assets/js/navigation-focus.js'), array('jquery'), true);

    //Superfish JS
    wp_enqueue_script('superfish-js', get_theme_file_uri('/assets/js/jquery.superfish.js'), array('jquery'), true);

    //Bootstarp JS
    wp_enqueue_script('bootstrap.js', get_theme_file_uri('/assets/js/bootstrap.js'), array('jquery'), true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'bepta_scripts');
