<?php

/**
 * Template part for displaying posts
 *
 * @subpackage Batpa
 * @since 1.0
 */
?>

<?php
if (defined('FW')) {
	$batpa_blog_author_show = batpa_theme_options('blog_author_show');
	$batpa_blog_date_show = batpa_theme_options('blog_date_show');
	$batpa_blog_comments_show = batpa_theme_options('blog_comments_show');
} else {
	$batpa_blog_author_show = "yes";
	$batpa_blog_date_show = "yes";
	$batpa_blog_comments_show = "yes";
}

?>

<div id="Category-section" class="entry-content">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="postbox smallpostimage">
		<?php 
           if ( is_sticky() ) {
				?>
				<span class="sticky-badge">
					<?php echo esc_html__( 'Sticky', 'batpa' );  ?>
				</span>
				<?php
			}
		?>  
			<?php
			if (has_post_thumbnail()) { ?>
				<div class="box-content text-center">
					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
					</a>
				</div>
			<?php } ?>
			
			<div class="overlay">
				<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php batpa_post_meta(); ?>
				<div class="post-desc">
					
					<?php the_excerpt()  ?>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>