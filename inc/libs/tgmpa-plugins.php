<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * register required plugins
 */

function batpa_register_required_plugins() {
	$plugins	 = array(

		array(
			'name'		 => esc_html__( 'Advanced Import', 'batpa' ),
			'slug'		 => 'advanced-import',
			'required'	 => false,
		),
		
	);
	

	$config = array(
		'id'			 => 'batpa', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	 => '', // Default absolute path to bundled plugins.
		'menu'			 => 'batpa-install-plugins', // Menu slug.
		'parent_slug'	 => 'themes.php', // Parent menu slug.
		'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	 => true, // Show admin notices or not.
		'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic'	 => false, // Automatically activate plugins after installation or not.
		'message'		 => '', // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'batpa_register_required_plugins' );