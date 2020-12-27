<?php

/**
 * Custom header implementation
 */

function batpa_custom_header_setup()
{
	add_theme_support('custom-header', apply_filters('batpa_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 80,
		'wp-head-callback'       => 'batpa_header_style',
	)));
}

add_action('after_setup_theme', 'batpa_custom_header_setup');

if (!function_exists('batpa_header_style')) :
	/**
	 * Styles the header image and text displayed on the blog
	 *
	 * @see batpa_custom_header_setup().
	 */
	add_action('wp_enqueue_scripts', 'batpa_header_style');
	function batpa_header_style()
	{
		if (get_header_image()) :
			$custom_css = "
        #header,.page-template-custom-home-page .wrap_figure{
			background-image:url('" . esc_url(get_header_image()) . "');
			background-position: center top;
		}";
			wp_add_inline_style('batpa-style', $custom_css);
		endif;
	}
endif;
