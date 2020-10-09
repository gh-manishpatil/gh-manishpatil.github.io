<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'label'       => array(
		'label' => esc_html__( 'Button Label', 'oktan' ),
		'desc'  => esc_html__( 'This is the text that appears on your button', 'oktan' ),
		'type'  => 'text',
		'value' => esc_html__('Submit', 'oktan' ),
	),
	'link'        => array(
		'label' => esc_html__( 'Button Link', 'oktan' ),
		'desc'  => esc_html__( 'Where should your button link to', 'oktan' ),
		'type'  => 'text',
		'value' => '#'
	),
	'target'      => array(
		'type'         => 'switch',
		'label'        => esc_html__( 'Open Link in New Window', 'oktan' ),
		'desc'         => esc_html__( 'Select here if you want to open the linked page in a new window', 'oktan' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => esc_html__( 'Yes', 'oktan' ),
		),
		'left-choice'  => array(
			'value' => '_self',
			'label' => esc_html__( 'No', 'oktan' ),
		),
	),
	'color'       => array(
		'label'   => esc_html__( 'Button Color', 'oktan' ),
		'desc'    => esc_html__( 'Choose a type for your button', 'oktan' ),
		'value'   => 'btn btn-maincolor',
		'type'    => 'select',
		'choices' => array(
			'btn btn-darkgrey'   => esc_html__( 'Default', 'oktan' ),
			'btn btn-gradient'  => esc_html__( 'Gradient button', 'oktan' ),
			'btn btn-maincolor'  => esc_html__( 'Color 1', 'oktan' ),
			'btn btn-maincolor2'  => esc_html__( 'Color 2', 'oktan' ),
			'btn btn-maincolor3'  => esc_html__( 'Color 3', 'oktan' ),
			'btn btn-outline-maincolor'  => esc_html__( 'Color outline 1', 'oktan' ),
			'btn btn-outline-maincolor2'  => esc_html__( 'Color outline 2', 'oktan' ),
			'btn btn-outline-maincolor3'  => esc_html__( 'Color outline 3', 'oktan' ),
			'btn btn-with-border'          => esc_html__( 'Just link with border', 'oktan' ),

		)
	),
	'size'       => array(
		'label'   => esc_html__( 'Button Size', 'oktan' ),
		'desc'    => esc_html__( 'Choose a size for your button', 'oktan' ),
		'value'   => 'big-btn',
		'type'    => 'select',
		'choices' => array(
			''   => esc_html__( 'Small Size', 'oktan' ),
			'medium-btn'  => esc_html__( 'Medium Size', 'oktan' ),
			'big-btn'  => esc_html__( 'Big Size', 'oktan' ),
		)
	)
);