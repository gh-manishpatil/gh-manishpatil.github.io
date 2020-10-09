<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}



$options = array(
	'steps'      => array(
		'type'        => 'addable-box',
		'value'       => '',
		'label'       => esc_html__( 'Steps', 'oktan' ),
		'desc'        => esc_html__( 'Add step', 'oktan' ),
		'box-options' => array(
			'image' => array(
				'type'        => 'upload',
				'value'       => '',
				'label'       => esc_html__( 'Image', 'oktan' ),
				'images_only' => true,
			),
			'month'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Month of Step', 'oktan' ),
			),
			'year'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Year of Step', 'oktan' ),
			),
			'title'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title of Step', 'oktan' ),
			),
			'content' => array(
				'type'  => 'textarea',
				'label' => esc_html__( 'Content', 'oktan' ),
				'desc'  => esc_html__( 'Enter the desired content', 'oktan' ),
			),
		),
		'template'    => '{{- title }}',
	),

);