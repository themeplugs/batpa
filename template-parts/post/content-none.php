<?php

/**
 * Template part for displaying a message that posts cannot be found
 * 
 * @subpackage Bepta
 * @since 1.0
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('Nothing Found', 'bepta'); ?></h1>
	</header>
	<div class="page-content">
		<?php
		if (is_home() && current_user_can('publish_posts')) : ?>

			<p>
				<?php
				/* translators: %s: Post editor URL. */
				printf(esc_html__('Ready to publish your first post? <a href="%s">Get started here</a>.', 'bepta'), esc_url(admin_url('post-new.php')));
				?>
			</p>

		<?php else : ?>

			<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bepta'); ?></p>
		<?php
			get_search_form();

		endif; ?>
	</div>
</section>