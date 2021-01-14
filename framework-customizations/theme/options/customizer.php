<?php

$options = array( // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
	'batpa_options' => array(
		'title'				 => esc_html__('Batpa Theme Options', 'batpa'),
		'options'			 => array(


			/* Theme Styling Panel */
			'styling_panel'			 => array(
				'title'		 => esc_html__('Theme Styling', 'batpa'),
				'options'	 => array(
					'primary_color' => array(
						'type'  => 'color-picker',
						'label' => esc_html__('Primary Color', 'batpa'),
					),
					'batpa_body_font'		 => array(
						'type'		 => 'typography-v2',
						'value'		 => array(
							'family'		 => 'Yantramanav',
							'size'			 => 16,
							'line-height'	 => 28,
						),
						'components' => array(
							'family'		 => true,
							'size'			 => true,
							'style'			 => false,
							'subset'		 => false,
							'variation'		 => false,
							'line-height'	 => true,
							'letter-spacing' => false,
							'color'			 => false
						),
						'label'		 => esc_html__('Body Font', 'batpa'),
						'desc'		 => esc_html__('This is default body font for your site', 'batpa'),
					),
					'batpa_heading_title'	 => array(
						'type'		 => 'typography-v2',
						'value'		 => array(
							'family'		 => 'Yantramanav',
							'variation'		 => '800',
							'line-height'	 => '',
							'letter-spacing' => 0,
							'weight'		 => 400,

						),
						'components' => array(
							'family'		 => true,
							'style'			 => false,
							'weight'		 => true,
							'size'			 => false,
							'line-height'	 => false,
							'letter-spacing' => false,
							'color'			 => false
						),
						'label'		 => esc_html__('Heading Fonts', 'batpa'),
						'desc'		 => esc_html__('This is for heading google fonts', 'batpa'),
					),

				),
			),

			/* Blog Settings */
			'news_setting_panel'	 => array(
				'title'		 => esc_html__('Blog Settings', 'batpa'),
				'options'	 => array(
					'blog_sidebar' => array(
						'type'  => 'select',
						'label' => esc_html__('Sidebar', 'batpa'),
						'desc'  => esc_html__('Description', 'batpa'),
						'help'  => esc_html__('Help tip', 'batpa'),
						'choices' => array(
							'1' => esc_html__('No sidebar','batpa'),
							'2' => esc_html__('Left Sidebar', 'batpa'),
							'3' => esc_html__('Right Sidebar', 'batpa'),
						),
						'no-validate' => false,
					), 

					'blog_author_show'	 => array(
						'type'			 => 'switch',
						'value' 		 => 'yes',

						'label'			 => esc_html__('Blog Author', 'batpa'),
						'desc'			 => esc_html__('Do you want to show blog author?', 'batpa'),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__('No', 'batpa'),
						),
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__('Yes', 'batpa'),
						),
					),
					'blog_date_show'	 => array(
						'type'			 => 'switch',
						'value' 		 => 'yes',

						'label'			 => esc_html__('Blog Date', 'batpa'),
						'desc'			 => esc_html__('Do you want to show blog Date?', 'batpa'),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__('No', 'batpa'),
						),
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__('Yes', 'batpa'),
						),
					),
					'blog_comments_show'	 => array(
						'type'			 => 'switch',
						'value' 		 => 'yes',
						'label'			 => esc_html__('Blog Comments', 'batpa'),
						'desc'			 => esc_html__('Do you want to show blog Comments?', 'batpa'),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__('No', 'batpa'),
						),
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__('Yes', 'batpa'),
						),
					),
				),
			),
			/* banner Settings */
			'banner_setting_panel'	 => array(
				'title'		 => esc_html__('Banner Settings', 'batpa'),
				'options'	 => array(
					'blog_banner'			 => array(
						'label'		 => esc_html__('Blog Banner', 'batpa'),
						'type'		 => 'upload',
						'desc'		 => esc_html__('Choose your banner', 'batpa'),

					),
					'breadcumb_show'	 => array(
						'type'			 => 'switch',
						'value'          => 'yes',
						'label'			 => esc_html__('Breadcrumb Show', 'batpa'),
						'desc'			 => esc_html__('Do you want to show Breadcrumb?', 'batpa'),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__('No', 'batpa'),
						),
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__('Yes', 'batpa'),
						),
					),

				),
			),
			/* banner Settings */
			'footer_setting_panel'	 => array(
				'title'		 => esc_html__('Footer Settings', 'batpa'),
				'options'	 => array(
					'copyright_text'			 => array(
						'label'		 => esc_html__('Copyright Text', 'batpa'),
						'type'  => 'wp-editor',
						'value' => esc_html__('Batpa WordPress Theme', 'batpa'),
					),
				),
			),


		),
		'wp-customizer-args' => array(
			'priority' => 3,
		),
	),
);
