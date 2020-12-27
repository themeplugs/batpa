<?php

/**
 * Template for displaying search forms in Batpa
 *
 * @subpackage Batpa
 * @since 1.0
 */
?>

<?php $batpa_unique_id = esc_attr(uniqid('search-form-')); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search', 'placeholder', 'batpa'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo esc_html_x('Search', 'submit button', 'batpa'); ?></button>
</form>