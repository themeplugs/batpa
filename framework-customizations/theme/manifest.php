<?php

if (!defined('FW')) {
	die('Forbidden');
}

$manifest = array();

$manifest['name']			 = esc_html__('Batpa', 'batpa');
$manifest['uri']			 = esc_url('http://themeplugs.com/');
$manifest['description']	 = esc_html__('Batpa WordPress theme', 'batpa');
$manifest['version']		 = '1.0';
$manifest['author']			 = 'themeplugs';
$manifest['author_uri']		 = esc_url('http://themeplugs.com/');
$manifest['requirements']	 = array(
	'wordpress' => array(
		'min_version' => '5.0',
	),
);

$manifest['id'] = 'scratch';

$manifest['supported_extensions'] = array(
	'backups'		 => array(),
);
