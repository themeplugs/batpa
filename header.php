<?php

/**
 * The header for our theme
 *
 * @subpackage Batpa
 * @since 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	} else {
		do_action('wp_body_open'); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
	}
	?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'batpa'); ?></a>

	<div id="page" class="site">
		<div id="header" class="header">
			<div class="container">
				<div class="wrap_figure">
					<div class="row">
						<div class="col-9 col-md-3">
							<div class="logo">
								<?php if (has_custom_logo()) : ?>
									<?php the_custom_logo(); ?>
								<?php endif; ?>
								<?php $blog_info = get_bloginfo('name'); ?>
								<?php if (!empty($blog_info)) : ?>
									<?php if (is_front_page() && is_home()) : ?>
										<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
									<?php else : ?>
										<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
									<?php endif; ?>
								<?php endif; ?>
								<?php
								$description = get_bloginfo('description', 'display');
								if ($description || is_customize_preview()) :
								?>
									<p class="site-description">
										<?php echo esc_html($description); ?>
									</p>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-3 col-md-9 align-self-center">
							<?php if (has_nav_menu('primary')) { ?>
								<div class="toggle-menu gb_menu text-right">
									<button onclick="batpa_gb_Menu_open()" class="gb_toggle">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							<?php } ?>
							<div class="menu_header">
								<?php get_template_part('template-parts/navigation/navigation'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>