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
			'align'        => array(
				'label'   => esc_html__( 'Align Text', 'oktan' ),
				'desc'    => esc_html__( 'Choose text align', 'oktan' ),
				'value'   => 'text-sm-left text-center',
				'type'    => 'select',
				'choices' => array(
					'text-center' => esc_html__( 'Center', 'oktan' ),
					'text-sm-left text-center'  => esc_html__( 'Left', 'oktan' ),
					'text-sm-right text-center'  => esc_html__( 'Right', 'oktan' ),
				)
			),
			'number'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Number of step', 'oktan' ),
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