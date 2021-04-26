<?php

/**
 * The main template file
 *
 * @subpackage Batpa
 * @since 1.0
 */

get_header();

get_template_part('template-parts/banner/banner', 'blog');
?>

<main id="content" class="main-container">
	<div class="container">

		<div class="content-area">
			<div id="main" class="site-main" role="main">
				<div class="row">
					<div class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<div class="items">
								<?php
								if (have_posts()) :
									while (have_posts()) : the_post();

										get_template_part('template-parts/post/content');

									endwhile;

								else :

									get_template_part('template-parts/post/content', 'none');

								endif;
								?>
							</div>
							<div class="navigation">
								<?php
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
