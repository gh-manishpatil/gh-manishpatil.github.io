<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'class'  => array(
		'type'  => 'text',
		'value' => '',
		'label' => esc_html__( 'Slider Additional CSS class', 'oktan' ),
		'desc'  => esc_html__( 'Optional CSS class for slider section', 'oktan' ),
	),
	'nav' => array(
		'type'         => 'switch',
		'value'        => 'false',
		'label'        => esc_html__( 'Show slides navigation', 'oktan' ),
		'left-choice'  => array(
			'value' => 'false',
			'label' => esc_html__( 'Hide', 'oktan' ),
		),
		'right-choice' => array(
			'value' => 'true',
			'label' => esc_html__( 'Show', 'oktan' ),
		),
	),
	'dots' => array(
		'type'         => 'switch',
		'value'        => 'false',
		'label'        => esc_html__( 'Show slide dots', 'oktan' ),
		'left-choice'  => array(
			'value' => 'false',
			'label' => esc_html__( 'Hide', 'oktan' ),
		),
		'right-choice' => array(
			'value' => 'true',
			'label' => esc_html__( 'Show', 'oktan' ),
		),
	),
	'speed'  => array(
		'type'  => 'slider',
		'value' => 5000,
		'properties' => array(
			'min' => 2000,
			'max' => 10000,
			'step' => 200,

		),
		'label' => esc_html__('Slider speed', 'oktan'),
		'desc'  => esc_html__('In milliseconds', 'oktan'),
	),

);