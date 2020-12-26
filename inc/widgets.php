<?php

/**
 * Additional features to allow styling of the templates
 *
 * @subpackage Bepta
 * @since 1.0
 */

function bepta_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Sidebar', 'bepta'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'bepta'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => __('Page Sidebar', 'bepta'),
        'id'            => 'sidebar-2',
        'description'   => __('Add widgets here to appear in your pages and posts', 'bepta'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 1', 'bepta'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'bepta'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 2', 'bepta'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here to appear in your footer.', 'bepta'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 3', 'bepta'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here to appear in your footer.', 'bepta'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 4', 'bepta'),
        'id'            => 'footer-4',
        'description'   => __('Add widgets here to appear in your footer.', 'bepta'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'bepta_widgets_init');
