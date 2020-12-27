<?php

/**
 * Additional features to allow styling of the templates
 *
 * @subpackage Batpa
 * @since 1.0
 */

function batpa_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Sidebar', 'batpa'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'batpa'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => __('Page Sidebar', 'batpa'),
        'id'            => 'sidebar-2',
        'description'   => __('Add widgets here to appear in your pages and posts', 'batpa'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 1', 'batpa'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'batpa'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 2', 'batpa'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here to appear in your footer.', 'batpa'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 3', 'batpa'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here to appear in your footer.', 'batpa'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 4', 'batpa'),
        'id'            => 'footer-4',
        'description'   => __('Add widgets here to appear in your footer.', 'batpa'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'batpa_widgets_init');
