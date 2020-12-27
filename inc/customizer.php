<?php

/**
 * Batpa: Customizer
 *
 * @subpackage Batpa
 * @since 1.0
 */

function batpa_customize_register($wp_customize)
{


	$wp_customize->add_section('batpa_pro', array(
		'title'    => __('UPGRADE FITNESS PREMIUM', 'batpa'),
		'priority' => 1,
	));

	$wp_customize->add_setting('batpa_pro', array(
		'default'           => null,
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control(new Fitness_Insight_Pro_Control($wp_customize, 'batpa_pro', array(
		'label'    => __('FITNESS PREMIUM', 'batpa'),
		'section'  => 'batpa_pro',
		'settings' => 'batpa_pro',
		'priority' => 1,
	)));

	// Top Header
	$wp_customize->add_section('batpa_top', array(
		'title' => __('Contact info', 'batpa'),
		'description' => __('Add contact info in the below feilds', 'batpa'),
	));

	$wp_customize->add_setting('batpa_call_text', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('batpa_call_text', array(
		'label' => esc_html__('Add Text', 'batpa'),
		'section' => 'batpa_top',
		'setting' => 'batpa_call_text',
		'type'    => 'text'
	));

	$wp_customize->add_setting('batpa_call', array(
		'default' => '',
		'sanitize_callback' => 'batpa_sanitize_phone_number'
	));
	$wp_customize->add_control('batpa_call', array(
		'label' => esc_html__('Add Phone Number', 'batpa'),
		'section' => 'batpa_top',
		'setting' => 'batpa_call',
		'type'    => 'text'
	));

	$wp_customize->add_setting('batpa_email_text', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('batpa_email_text', array(
		'label' => esc_html__('Add Text', 'batpa'),
		'section' => 'batpa_top',
		'setting' => 'batpa_email_text',
		'type'    => 'text'
	));

	$wp_customize->add_setting('batpa_email', array(
		'default' => '',
		'sanitize_callback' => 'batpa_sanitize_email'
	));
	$wp_customize->add_control('batpa_email', array(
		'label' => esc_html__('Add Email Address', 'batpa'),
		'section' => 'batpa_top',
		'setting' => 'batpa_email',
		'type'    => 'text'
	));

	// Social Media
	$wp_customize->add_section('batpa_urls', array(
		'title' => __('Social Media', 'batpa'),
		'description' => __('Add social media links in the below feilds', 'batpa'),
	));

	$wp_customize->add_setting('batpa_facebook', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('batpa_facebook', array(
		'label' => esc_html__('Facebook URL', 'batpa'),
		'section' => 'batpa_urls',
		'setting' => 'batpa_facebook',
		'type'    => 'url'
	));

	$wp_customize->add_setting('batpa_twitter', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('batpa_twitter', array(
		'label' => esc_html__('Twitter URL', 'batpa'),
		'section' => 'batpa_urls',
		'setting' => 'batpa_twitter',
		'type'    => 'url'
	));

	$wp_customize->add_setting('batpa_youtube', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('batpa_youtube', array(
		'label' => esc_html__('Youtube URL', 'batpa'),
		'section' => 'batpa_urls',
		'setting' => 'batpa_youtube',
		'type'    => 'url'
	));

	$wp_customize->add_setting('batpa_instagram', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('batpa_instagram', array(
		'label' => esc_html__('Instagram URL', 'batpa'),
		'section' => 'batpa_urls',
		'setting' => 'batpa_instagram',
		'type'    => 'url'
	));

	//Slider
	$wp_customize->add_section('batpa_slider_section', array(
		'title'      => __('Slider Settings', 'batpa'),
		'description' => __('Image Dimension ( 1400 x 650 ) px', 'batpa'),
		'priority'   => null,
	));

	$wp_customize->add_setting('batpa_slider_arrows', array(
		'default' => true,
		'sanitize_callback'	=> 'batpa_sanitize_checkbox'
	));
	$wp_customize->add_control('batpa_slider_arrows', array(
		'type' => 'checkbox',
		'label' => __('Check to show slider', 'batpa'),
		'section' => 'batpa_slider_section',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst_sls[] = __('Select', 'batpa');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID] = $p_post->post_title;
	}
	for ($i = 1; $i <= 4; $i++) {
		$wp_customize->add_setting('batpa_post_setting' . $i, array(
			'sanitize_callback' => 'batpa_sanitize_choices',
		));
		$wp_customize->add_control('batpa_post_setting' . $i, array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post', 'batpa'),
			'section' => 'batpa_slider_section',
		));
	}
	wp_reset_postdata();

	//Middle Section
	$wp_customize->add_section('batpa_middle_section', array(
		'title'      => __('Services Settings', 'batpa'),
		'description' => __('Image Dimension ( 500 x 500 ) px', 'batpa'),
		'priority'   => null,
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$s = 0;
	$pst_sls[] = __('Select', 'batpa');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID] = $p_post->post_title;
	}
	for ($s = 1; $s <= 4; $s++) {
		$wp_customize->add_setting('batpa_mid_section_icon' . $s, array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control('batpa_mid_section_icon' . $s, array(
			'label' => esc_html__('Icon', 'batpa'),
			'description' => esc_html__('Add the fontawesome class to add icon ex: fas fa-envelope', 'batpa'),
			'section' => 'batpa_middle_section',
			'setting' => 'batpa_mid_section_icon',
			'type'    => 'text'
		));

		$wp_customize->add_setting('batpa_middle_sec_settigs' . $s, array(
			'sanitize_callback' => 'batpa_sanitize_choices',
		));
		$wp_customize->add_control('batpa_middle_sec_settigs' . $s, array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post', 'batpa'),
			'section' => 'batpa_middle_section',
		));
	}
	wp_reset_postdata();

	//Footer
	$wp_customize->add_section('batpa_footer_copyright', array(
		'title'      => esc_html__('Footer Text', 'batpa'),
	));

	$wp_customize->add_setting('batpa_footer_text', array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('batpa_footer_text', array(
		'label'	=> esc_html__('Copyright Text', 'batpa'),
		'section'	=> 'batpa_footer_copyright',
		'type'		=> 'text'
	));

	$wp_customize->get_setting('blogname')->transport          = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport   = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial('blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'batpa_customize_partial_blogname',
	));
	$wp_customize->selective_refresh->add_partial('blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'batpa_customize_partial_blogdescription',
	));

	//front page
	$num_sections = apply_filters('batpa_front_page_sections', 4);

	// Create a setting and control for each of the sections available in the theme.
	for ($i = 1; $i < (1 + $num_sections); $i++) {
		$wp_customize->add_setting('panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'batpa_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		));

		$wp_customize->add_control('panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf(__('Front Page Section %d Content', 'batpa'), $i),
			'description'    => (1 !== $i ? '' : __('Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'batpa')),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'batpa_is_static_front_page',
		));

		$wp_customize->selective_refresh->add_partial('panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'batpa_front_page_section',
			'container_inclusive' => true,
		));
	}
}
add_action('customize_register', 'batpa_customize_register');

function batpa_customize_partial_blogname()
{
	bloginfo('name');
}

function batpa_customize_partial_blogdescription()
{
	bloginfo('description');
}

function batpa_is_static_front_page()
{
	return (is_front_page() && !is_home());
}
