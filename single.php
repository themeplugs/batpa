<?php

/**
 * The template for displaying all single posts
 * 
 * @subpackage Batpa
 * @since 1.0
 */

get_header();
get_template_part('template-parts/banner/banner', 'blog');

if (defined('FW')) {
	$batpa_blog_sidebar = fw_get_db_customizer_option('blog_sidebar',1); 
	$batpa_column = ($batpa_blog_sidebar == 1 || !is_active_sidebar('sidebar-1')) ? 'col-lg-12' : 'col-lg-8 col-md-12';
} else{
	$batpa_column = 'col-md-8';
}

?>

<main id="content" class="main-container">
	<div class="container">
		<div class="content-area entry-content">
			<div id="main" class="site-main" role="main">
				<div class="row m-0">
					<div class="content_area <?php echo esc_attr($batpa_column); ?>">
						<section id="post_section">
							<?php
							/* Start the Loop */
							while (have_posts()) : the_post();

								get_template_part('template-parts/post/single-page');

								// If comments are open or we have at least one comment, load up the comment template.
								if (comments_open() || get_comments_number()) :
									comments_template();
								endif;

								the_post_navigation(array(
									'prev_text' => '<span class="screen-reader-text">' . esc_html__('Previous Post', 'batpa') . '</span><span aria-hidden="true" class="nav-subtitle">' . esc_html__('Previous', 'batpa') . '</span>',
									'next_text' => '<span class="screen-reader-text">' . esc_html__('Next Post', 'batpa') . '</span><span aria-hidden="true" class="nav-subtitle">' . esc_html__('Next', 'batpa') . '</span> ',
								));

							endwhile; // End of the loop.
							?>
						</section>
					</div>
					<?php if(is_active_sidebar('sidebar-1')): ?>
						<div id="sidebar" class="col-lg-4 col-md-4">
							<?php dynamic_sidebar('sidebar-1'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer();
