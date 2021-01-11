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
	$batpa_blog_author_show = theme_options('blog_author_show');
	$batpa_blog_date_show = theme_options('blog_date_show');
	$batpa_blog_comments_show = theme_options('blog_comments_show');
} else {
	$batpa_blog_author_show = "yes";
	$batpa_blog_date_show = "yes";
	$batpa_blog_comments_show = "yes";
}

?>

<div id="Category-section" class="entry-content">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="postbox smallpostimage">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php
			if (has_post_thumbnail()) { ?>
				<div class="box-content text-center">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php } ?>
			<div class="overlay">
				<div class="date-box">
					<?php if ($batpa_blog_author_show == 'yes') { ?>
						<span><i class="far fa-calendar-alt"></i><?php the_time(get_option('date_format')); ?></span>
					<?php } ?>
					<?php if ($batpa_blog_date_show == 'yes') { ?>
						<span class="entry-author"><i class="far fa-user"></i><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a></span>
					<?php } ?>
					<?php if ($batpa_blog_comments_show == 'yes') { ?>
						<span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number(__('0 Comments', 'batpa'), __('0 Comments', 'batpa'), __('% Comments', 'batpa')); ?></span>
					<?php } ?>
				</div>
				<p><?php the_excerpt(); ?></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>