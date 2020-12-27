<?php
if (defined('FW')) {
	$copyright_text = fw_get_db_customizer_option('copyright_text');
} else {
	$copyright_text = 'Batpa WordPress Theme';
}
?>
<div class="site-info">
	<p><?php echo batpa_kses($copyright_text); ?></p>
</div>