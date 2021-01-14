<?php

if (!defined('FW')) {
	die('Forbidden');
}

$batpa_batpa_manifest = array(); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound

$batpa_manifest['name']			 = esc_html__('Batpa', 'batpa');
$batpa_manifest['uri']			 = esc_url('http://themeplugs.com/');
$batpa_manifest['description']	 = esc_html__('Batpa WordPress theme', 'batpa');
$batpa_manifest['version']		 = '1.0';
$batpa_manifest['author']			 = 'themeplugs';
$batpa_manifest['author_uri']		 = esc_url('http://themeplugs.com/');
$batpa_manifest['requirements']	 = array(
	'wordpress' => array(
		'min_version' => '5.3',
	),
);

$batpa_manifest['id'] = 'scratch';

$batpa_manifest['supported_extensions'] = array(
	'backups'		 => array(),
);
