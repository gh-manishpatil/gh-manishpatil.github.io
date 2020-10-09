<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'counter' => array(
		'type'       => 'slider',
		'value'      => 80,
		'properties' => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		),
		'label'      => esc_html__( 'Count To', 'oktan' ),
		'desc'       => esc_html__( 'Choose number to count to', 'oktan' ),
	),
	'coefficient'    => array(
		'type'  => 'text',
		'label' => esc_html__( 'Coefficient', 'oktan' ),
		'desc'  => esc_html__( 'Add coefficient', 'oktan' ),
	),
	'title'    => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'oktan' ),
		'desc'  => esc_html__( 'Add title', 'oktan' ),
	),
	'sub_title'    => array(
		'type'  => 'text',
		'label' => esc_html__( 'Sub Title', 'oktan' ),
		'desc'  => esc_html__( 'Add sub-title', 'oktan' ),
	),
);