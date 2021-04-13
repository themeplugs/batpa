<?php

/**
 * The template for displaying all pages
 * 
 * @subpackage Batpa
 * @since 1.0
 */

get_header();
get_template_part('template-parts/banner/banner', 'page');
?>

<main id="content" class="main-container">
	<div class="container" id="custom-a-tag">
		<div id="primary" class="content-area entry-content">
			<main id="main" class="site-main" role="main">

				<?php
				while (have_posts()) : the_post();

					get_template_part('template-parts/page/content', 'page');

					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main>
		</div>
	</div>
</main>

<?php get_footer();
