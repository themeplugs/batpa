<?php

function batpa_action_hook_css()
{
	$primary_color = batpa_theme_options( 'primary_color', '#003478' );

	//global font
	$global_body_font = batpa_theme_options('batpa_body_font');
	Unyson_Google_Fonts::add_typography_v2($global_body_font);
	$body_font = batpa_advanced_font_styles($global_body_font);

	//heading  font
	$batpa_heading = batpa_theme_options('batpa_heading_title');
	Unyson_Google_Fonts::add_typography_v2($batpa_heading);
	$batpa_heading = batpa_advanced_font_styles($batpa_heading);

	//custom css
	$custom_css	= batpa_theme_options('custom_css');

	// init custom css
	$output = $custom_css;

	// global style
	$output	.= "
		body{
			$body_font;
		}
		h1,h2,h3,h4,h5,h6{
			$batpa_heading;
		}
		h1,h2,h3,h4,h5,h6{
			color: $primary_color;
		}
	";
	$outputs = wp_kses_post($output);

	wp_add_inline_style('batpa-style', $outputs);

	
}

add_action('wp_enqueue_scripts', 'batpa_action_hook_css', 90);
