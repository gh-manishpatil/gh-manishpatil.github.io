<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$portfolio = fw()->extensions->get( 'portfolio' );
if ( empty( $portfolio ) ) {
	return;
}

$options = array(
	'number'        => array(
		'type'       => 'slider',
		'value'      => 6,
		'properties' => array(
			'min'  => 1,
			'max'  => 12,
			'step' => 1, // Set slider step. Always > 0. Could be fractional.

		),
		'label'      => esc_html__( 'Items number', 'oktan' ),
		'desc'       => esc_html__( 'Number of portfolio projects tu display', 'oktan' ),
	),
	'show_filters'  => array(
		'type'         => 'switch',
		'value'        => false,
		'label'        => esc_html__( 'Show filters', 'oktan' ),
		'desc'         => esc_html__( 'Hide or show categories filters', 'oktan' ),
		'left-choice'  => array(
			'value' => false,
			'label' => esc_html__( 'No', 'oktan' ),
		),
		'right-choice' => array(
			'value' => true,
			'label' => esc_html__( 'Yes', 'oktan' ),
		),
	)
);