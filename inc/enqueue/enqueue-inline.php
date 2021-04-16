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
		a:hover, 
		#Category-section .postbox.smallpostimage:hover h3 a,
		.post-navigation span:hover, .post-navigation h3:hover,
		a:active{
			color: $primary_color;
		}
		a.more-link,
		button, input[type=button], input[type=submit],
		.home-btn a,
		button.search-submit,
		.post .link-more a, article.page .link-more a,
		.post.sticky .sticky-badge,
		article.page.sticky .sticky-badge,
		div#calendar_wrap caption,
		.widget_calendar td#today,.page-numbers.current,.gb_nav_menu ul ul,.gb_nav_menu ul ul a:hover,
		.prev.page-numbers,.next.page-numbers,#sidebar .tagcloud a:hover, .site-footer .tagcloud a:hover{
			background-color: $primary_color;
		}
	";

	wp_add_inline_style('batpa-main', $output);
}

add_action('wp_enqueue_scripts', 'batpa_action_hook_css', 90);
