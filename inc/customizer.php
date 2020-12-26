<?php

/**
 * Bepta: Customizer
 *
 * @subpackage Bepta
 * @since 1.0
 */

function bepta_customize_register($wp_customize)
{


	$wp_customize->add_section('bepta_pro', array(
		'title'    => __('UPGRADE FITNESS PREMIUM', 'bepta'),
		'priority' => 1,
	));

	$wp_customize->add_setting('bepta_pro', array(
		'default'           => null,
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control(new Fitness_Insight_Pro_Control($wp_customize, 'bepta_pro', array(
		'label'    => __('FITNESS PREMIUM', 'bepta'),
		'section'  => 'bepta_pro',
		'settings' => 'bepta_pro',
		'priority' => 1,
	)));

	// Top Header
	$wp_customize->add_section('bepta_top', array(
		'title' => __('Contact info', 'bepta'),
		'description' => __('Add contact info in the below feilds', 'bepta'),
	));

	$wp_customize->add_setting('bepta_call_text', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('bepta_call_text', array(
		'label' => esc_html__('Add Text', 'bepta'),
		'section' => 'bepta_top',
		'setting' => 'bepta_call_text',
		'type'    => 'text'
	));

	$wp_customize->add_setting('bepta_call', array(
		'default' => '',
		'sanitize_callback' => 'bepta_sanitize_phone_number'
	));
	$wp_customize->add_control('bepta_call', array(
		'label' => esc_html__('Add Phone Number', 'bepta'),
		'section' => 'bepta_top',
		'setting' => 'bepta_call',
		'type'    => 'text'
	));

	$wp_customize->add_setting('bepta_email_text', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('bepta_email_text', array(
		'label' => esc_html__('Add Text', 'bepta'),
		'section' => 'bepta_top',
		'setting' => 'bepta_email_text',
		'type'    => 'text'
	));

	$wp_customize->add_setting('bepta_email', array(
		'default' => '',
		'sanitize_callback' => 'bepta_sanitize_email'
	));
	$wp_customize->add_control('bepta_email', array(
		'label' => esc_html__('Add Email Address', 'bepta'),
		'section' => 'bepta_top',
		'setting' => 'bepta_email',
		'type'    => 'text'
	));

	// Social Media
	$wp_customize->add_section('bepta_urls', array(
		'title' => __('Social Media', 'bepta'),
		'description' => __('Add social media links in the below feilds', 'bepta'),
	));

	$wp_customize->add_setting('bepta_facebook', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('bepta_facebook', array(
		'label' => esc_html__('Facebook URL', 'bepta'),
		'section' => 'bepta_urls',
		'setting' => 'bepta_facebook',
		'type'    => 'url'
	));

	$wp_customize->add_setting('bepta_twitter', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('bepta_twitter', array(
		'label' => esc_html__('Twitter URL', 'bepta'),
		'section' => 'bepta_urls',
		'setting' => 'bepta_twitter',
		'type'    => 'url'
	));

	$wp_customize->add_setting('bepta_youtube', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('bepta_youtube', array(
		'label' => esc_html__('Youtube URL', 'bepta'),
		'section' => 'bepta_urls',
		'setting' => 'bepta_youtube',
		'type'    => 'url'
	));

	$wp_customize->add_setting('bepta_instagram', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('bepta_instagram', array(
		'label' => esc_html__('Instagram URL', 'bepta'),
		'section' => 'bepta_urls',
		'setting' => 'bepta_instagram',
		'type'    => 'url'
	));

	//Slider
	$wp_customize->add_section('bepta_slider_section', array(
		'title'      => __('Slider Settings', 'bepta'),
		'description' => __('Image Dimension ( 1400 x 650 ) px', 'bepta'),
		'priority'   => null,
	));

	$wp_customize->add_setting('bepta_slider_arrows', array(
		'default' => true,
		'sanitize_callback'	=> 'bepta_sanitize_checkbox'
	));
	$wp_customize->add_control('bepta_slider_arrows', array(
		'type' => 'checkbox',
		'label' => __('Check to show slider', 'bepta'),
		'section' => 'bepta_slider_section',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst_sls[] = __('Select', 'bepta');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID] = $p_post->post_title;
	}
	for ($i = 1; $i <= 4; $i++) {
		$wp_customize->add_setting('bepta_post_setting' . $i, array(
			'sanitize_callback' => 'bepta_sanitize_choices',
		));
		$wp_customize->add_control('bepta_post_setting' . $i, array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post', 'bepta'),
			'section' => 'bepta_slider_section',
		));
	}
	wp_reset_postdata();

	//Middle Section
	$wp_customize->add_section('bepta_middle_section', array(
		'title'      => __('Services Settings', 'bepta'),
		'description' => __('Image Dimension ( 500 x 500 ) px', 'bepta'),
		'priority'   => null,
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$s = 0;
	$pst_sls[] = __('Select', 'bepta');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID] = $p_post->post_title;
	}
	for ($s = 1; $s <= 4; $s++) {
		$wp_customize->add_setting('bepta_mid_section_icon' . $s, array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control('bepta_mid_section_icon' . $s, array(
			'label' => esc_html__('Icon', 'bepta'),
			'description' => esc_html__('Add the fontawesome class to add icon ex: fas fa-envelope', 'bepta'),
			'section' => 'bepta_middle_section',
			'setting' => 'bepta_mid_section_icon',
			'type'    => 'text'
		));

		$wp_customize->add_setting('bepta_middle_sec_settigs' . $s, array(
			'sanitize_callback' => 'bepta_sanitize_choices',
		));
		$wp_customize->add_control('bepta_middle_sec_settigs' . $s, array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post', 'bepta'),
			'section' => 'bepta_middle_section',
		));
	}
	wp_reset_postdata();

	//Footer
	$wp_customize->add_section('bepta_footer_copyright', array(
		'title'      => esc_html__('Footer Text', 'bepta'),
	));

	$wp_customize->add_setting('bepta_footer_text', array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('bepta_footer_text', array(
		'label'	=> esc_html__('Copyright Text', 'bepta'),
		'section'	=> 'bepta_footer_copyright',
		'type'		=> 'text'
	));

	$wp_customize->get_setting('blogname')->transport          = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport   = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial('blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'bepta_customize_partial_blogname',
	));
	$wp_customize->selective_refresh->add_partial('blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'bepta_customize_partial_blogdescription',
	));

	//front page
	$num_sections = apply_filters('bepta_front_page_sections', 4);

	// Create a setting and control for each of the sections available in the theme.
	for ($i = 1; $i < (1 + $num_sections); $i++) {
		$wp_customize->add_setting('panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'bepta_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		));

		$wp_customize->add_control('panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf(__('Front Page Section %d Content', 'bepta'), $i),
			'description'    => (1 !== $i ? '' : __('Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'bepta')),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'bepta_is_static_front_page',
		));

		$wp_customize->selective_refresh->add_partial('panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'bepta_front_page_section',
			'container_inclusive' => true,
		));
	}
}
add_action('customize_register', 'bepta_customize_register');

function bepta_customize_partial_blogname()
{
	bloginfo('name');
}

function bepta_customize_partial_blogdescription()
{
	bloginfo('description');
}

function bepta_is_static_front_page()
{
	return (is_front_page() && !is_home());
}
