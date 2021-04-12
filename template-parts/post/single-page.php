<?php

/**
 * Template part for displaying posts
 *
 * @subpackage Batpa
 * @since 1.0
 */
?>

<div id="single-post-section" class="single-post-page entry-content">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="postbox smallpostimage">
			<div class="padd-box">
				<?php the_post_thumbnail(); ?>
				<div class="overlay">
					<?php batpa_post_meta(); ?>
				</div>
				<p><?php the_content(); ?></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>