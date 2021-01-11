<?php
if (defined('FW')) {
	$batpa_copyright_text = fw_get_db_customizer_option('copyright_text');
} else {
	$batpa_copyright_text = 'Batpa WordPress Theme';
}
?>
<div class="site-info">
	<p><?php echo batpa_kses($batpa_copyright_text); ?></p>
</div>