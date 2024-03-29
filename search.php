<?php

/**
 * The template for displaying search results pages
 * 
 * @subpackage Batpa
 * @since 1.0
 */

get_header();
get_template_part('template-parts/banner/banner', 'blog');
?>

<main id="content" class="main-container">
	<div class="container">
		<header class="page-header">
			<?php if (have_posts()) : ?>
				<h1 class="entry-title"><span><?php /* translators: %s: search term */
												printf(esc_html__('Results For: %s', 'batpa'), esc_html(get_search_query())); ?> </span>
				</h1>
			<?php else : ?>
				<h2 class="page-title"><span><?php esc_html_e('Nothing Found', 'batpa'); ?></span></h2>
			<?php endif; ?>
		</header>
		<div class="content-area">
			<div id="main" class="site-main" role="main">
				<div class="row m-0">
					<div class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<?php
							if (have_posts()) :
								/* Start the Loop */
								while (have_posts()) : the_post();

									get_template_part('template-parts/post/content');

								endwhile; // End of the loop.

							else : ?>

								<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'batpa'); ?></p>
							<?php
								get_search_form();

							endif;
							?>
							<div class="navigation">
								<?php
								// Previous/next page navigation.
								the_posts_pagination(array(
									'prev_text'          => esc_html__('Previous page', 'batpa'),
									'next_text'          => esc_html__('Next page', 'batpa'),
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'batpa') . ' </span>',
								));
								?>
								<div class="clearfix"></div>
							</div>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer();
