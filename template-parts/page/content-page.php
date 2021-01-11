<?php

/**
 * Template part for displaying page content in page.php
 *
 * @subpackage Batpa
 * @since 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_post_thumbnail(); ?>
		<p><?php the_content(); ?></p>
		<?php
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'batpa'),
			'after'  => '</div>',
		));
		?>
	</div>
</article>