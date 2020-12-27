<?php

/**
 * Batpa functions
 *
 * @subpackage Batpa
 * @since 1.0
 */

function batpa_setup()
{

	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('align-wide');
	add_theme_support('custom-background', array(
		'default-color' => 'ffffff',
	));
	add_image_size('batpa-featured-image', 850, 560, true);
	add_image_size('batpa-thumbnail-avatar', 100, 100, true);

	$GLOBALS['content_width'] = 1170;
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'batpa'),
	));

	add_theme_support('html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	// Add theme support for Custom Logo.
	add_theme_support('custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	));

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style(array('assets/css/editor-style.css', batpa_fonts_url()));
}
add_action('after_setup_theme', 'batpa_setup');


function batpa_fonts_url()
{
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Yantramanav:wght@100;300;400;500;700;900';

	$query_args = array(
		'family'	=> rawurlencode(implode('|', $font_family)),
	);
	$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	return $font_url;
}


function batpa_front_page_template($template)
{
	return is_home() ? '' : $template;
}
add_filter('frontpage_template',  'batpa_front_page_template');

// included global 
require get_parent_theme_file_path('/inc/helper/global.php');

// included enqueue
require get_parent_theme_file_path('/inc/enqueue/enqueue-front.php');

// included widgets
require get_parent_theme_file_path('/inc/widgets.php');

// included custom header
require get_parent_theme_file_path('/inc/custom-header.php');

// included template tags
require get_parent_theme_file_path('/inc/template-tags.php');

// included template functions
require get_parent_theme_file_path('/inc/template-functions.php');
