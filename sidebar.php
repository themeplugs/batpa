<?php

/**
 * The sidebar containing the main widget area
 * 
 * @subpackage Bepta
 * @since 1.0
 */
?>
<?php if (is_active_sidebar('sidebar-1')) { ?>

	<aside id="sidebar" class="widget-area" role="complementary">
		<?php dynamic_sidebar('sidebar-1'); ?>
	</aside>

<?php
}
