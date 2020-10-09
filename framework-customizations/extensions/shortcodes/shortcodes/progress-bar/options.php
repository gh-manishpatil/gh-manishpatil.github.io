<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'title' => array(
		'type'       => 'text',
		'value'      => '',
		'label'      => esc_html__( 'Progress Bar title', 'oktan' ),
	),
	'percent' => array(
		'type'       => 'slider',
		'value'      => 80,
		'properties' => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		),
		'label'      => esc_html__( 'Count To', 'oktan' ),
		'desc'       => esc_html__( 'Choose percent to count to', 'oktan' ),
	),
	'background_class' => array(
		'type'    => 'select',
		'value'   => 'progress-bar-success',
		'label'   => esc_html__( 'Context background color', 'oktan' ),
		'desc'    => esc_html__( 'Select one of predefined background colors', 'oktan' ),
		'choices' => array(
			'bg-maincolor' => esc_html__( 'Main color 1', 'oktan' ),
			'bg-maincolor2'    => esc_html__( 'Main color 2', 'oktan' ),
			'bg-maincolor3' => esc_html__( 'Main color 3', 'oktan' ),
			'bg-maincolor4'  => esc_html__( 'Main color 4', 'oktan' ),
		),
	),
);