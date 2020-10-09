<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'icon'       => array(
		'type'  => 'icon',
		'label' => esc_html__( 'Icon', 'oktan' ),
		'set'   => 'theme-fa-icons',
	),
	'rows_num' => array(
		'type' => 'short-text',
		'value' => '6',
		'label' => esc_html__( 'Number of rows', 'oktan' ),
		'desc' => esc_html__( 'Select number of rows for textarea', 'oktan' ),
	),
);