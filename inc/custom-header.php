<?php

/**
 * Custom header implementation
 */

function bepta_custom_header_setup()
{
	add_theme_support('custom-header', apply_filters('bepta_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 80,
		'wp-head-callback'       => 'bepta_header_style',
	)));
}

add_action('after_setup_theme', 'bepta_custom_header_setup');

if (!function_exists('bepta_header_style')) :
	/**
	 * Styles the header image and text displayed on the blog
	 *
	 * @see bepta_custom_header_setup().
	 */
	add_action('wp_enqueue_scripts', 'bepta_header_style');
	function bepta_header_style()
	{
		if (get_header_image()) :
			$custom_css = "
        #header,.page-template-custom-home-page .wrap_figure{
			background-image:url('" . esc_url(get_header_image()) . "');
			background-position: center top;
		}";
			wp_add_inline_style('bepta-style', $custom_css);
		endif;
	}
endif;
