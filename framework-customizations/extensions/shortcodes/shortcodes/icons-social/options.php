<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'social_icons' => array(
		'type'            => 'addable-box',
		'value'           => '',
		'label'           => esc_html__( 'Social Buttons', 'oktan' ),
		'desc'            => esc_html__( 'Optional social buttons', 'oktan' ),
		'template'        => '{{=icon}}',
		'box-options'     => array(
			'icon'       => array(
				'type'  => 'icon',
				'label' => esc_html__( 'Social Icon', 'oktan' ),
				'set'   => 'social-icons',
			),
			'icon_class' => array(
				'type'        => 'select',
				'value'       => '',
				'label'       => esc_html__( 'Icon type', 'oktan' ),
				'desc'        => esc_html__( 'Select one of predefined social button types', 'oktan' ),
				'choices'     => array(
					''                                    => esc_html__( 'Default', 'oktan' ),
					'border-icon'                         => esc_html__( 'Simple Bordered Icon', 'oktan' ),
					'border-icon rounded-icon'            => esc_html__( 'Rounded Bordered Icon', 'oktan' ),
					'bg-icon'                             => esc_html__( 'Simple Background Icon', 'oktan' ),
					'bg-icon rounded-icon'                => esc_html__( 'Rounded Background Icon', 'oktan' ),
					'color-icon bg-icon'                  => esc_html__( 'Color Light Background Icon', 'oktan' ),
					'color-icon bg-icon rounded-icon'     => esc_html__( 'Color Light Background Rounded Icon', 'oktan' ),
					'color-icon'                          => esc_html__( 'Color Icon', 'oktan' ),
					'color-icon border-icon'              => esc_html__( 'Color Bordered Icon', 'oktan' ),
					'color-icon border-icon rounded-icon' => esc_html__( 'Rounded Color Bordered Icon', 'oktan' ),
					'color-bg-icon'                       => esc_html__( 'Color Background Icon', 'oktan' ),
					'color-bg-icon rounded-icon'          => esc_html__( 'Rounded Color Background Icon', 'oktan' ),

				),
				/**
				 * Allow save not existing choices
				 * Useful when you use the select to populate it dynamically from js
				 */
				'no-validate' => false,
			),
			'icon_url'   => array(
				'type'  => 'text',
				'value' => '#',
				'label' => esc_html__( 'Icon Link', 'oktan' ),
				'desc'  => esc_html__( 'Provide a URL to your icon', 'oktan' ),
			)
		),
		'limit'           => 0, // limit the number of boxes that can be added
		'add-button-text' => esc_html__( 'Add', 'oktan' ),
		'sortable'        => true,
	)
);