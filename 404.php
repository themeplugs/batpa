<?php

/**
 * The template for displaying 404 pages (not found)
 * @subpackage Batpa
 * @since 1.0
 */

get_header();
?>
<div class="main-container">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="content" class="site-main" role="main">
				<section class="error-404 not-found text-center">
					<header class="page-header">
						<h1 class="error-title"><strong><?php esc_html_e('404', 'batpa'); ?></strong></h1>
						<h2 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'batpa'); ?></h2>
						<div class="home-btn text-center">
							<a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('GO BACK', 'batpa'); ?></a>
						</div>
					</header>
					<div class="page-content">
						<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'batpa'); ?></p>
						<?php get_search_form(); ?>
					</div>
				</section>
			</main>
		</div>
	</div>
</div>

<?php get_footer();
