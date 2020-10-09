<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$button         = fw_ext( 'shortcodes' )->get_shortcode( 'button' );
$button_options = $button->get_options();
$button_options['button_animation'] = array(
	'type'    => 'select',
	'value'   => 'fadeIn',
	'label'   => esc_html__( 'Animation type', 'oktan' ),
	'desc'    => esc_html__( 'Select one of predefined animations', 'oktan' ),
	'choices' => oktan_unyson_option_animations(),
);

$events_box_options_event_options = array();
//if events extension is active and if our custom events extension class exists
if( class_exists( 'Oktan_Unyson_Events_Extends' ) && ( ! empty( fw_ext( 'events' ) ) ) ) {
	$events_box_options_event_options['next_event'] = array(
		'type'  => 'switch',
		'value' => false,
		'label' => esc_html__('Add next event counter below layer', 'oktan'),
		'left-choice' => array(
			'value' => false,
			'label' => esc_html__(' No', 'oktan'),
		),
		'right-choice' => array(
			'value' => true,
			'label' => esc_html__(' Yes', 'oktan'),
		),
	);
}

$options = array(
	'slide_background' => array(
		'type'        => 'select',
		'value'       => 'ls',
		'label'       => esc_html__( 'Slide background', 'oktan' ),
		'desc'        => esc_html__( 'Select slide background color', 'oktan' ),
		'choices'     => array(
			'ls'    => esc_html__( 'Light', 'oktan' ),
			'ls ms' => esc_html__( 'Light Muted', 'oktan' ),
			'ds'    => esc_html__( 'Dark', 'oktan' ),
			'ds ms' => esc_html__( 'Dark Muted', 'oktan' ),
			'cs'    => esc_html__( 'Color', 'oktan' ),
		),
		/**
		 * Allow save not existing choices
		 * Useful when you use the select to populate it dynamically from js
		 */
		'no-validate' => false,
	),
	'slide_align'      => array(
		'type'        => 'select',
		'value'       => 'text-left',
		'label'       => esc_html__( 'Slide text alignment', 'oktan' ),
		'desc'        => esc_html__( 'Select slide text alignment', 'oktan' ),
		'choices'     => array(
			'text-left'   => esc_html__( 'Left', 'oktan' ),
			'text-center' => esc_html__( 'Center', 'oktan' ),
			'text-right'  => esc_html__( 'Right', 'oktan' ),
		),
		/**
		 * Allow save not existing choices
		 * Useful when you use the select to populate it dynamically from js
		 */
		'no-validate' => false,
	),
	'slide_vertical_align'      => array(
		'type'        => 'select',
		'value'       => '',
		'label'       => esc_html__( 'Slide vertical alignment', 'oktan' ),
		'desc'        => esc_html__( 'Select vertcial alignment for slider layers', 'oktan' ),
		'choices'     => array(
			''   => esc_html__( 'Middle (default)', 'oktan' ),
			'intro_text_top' => esc_html__( 'Top', 'oktan' ),
			'intro_text_bottom'  => esc_html__( 'Bottom', 'oktan' ),
		),
		/**
		 * Allow save not existing choices
		 * Useful when you use the select to populate it dynamically from js
		 */
		'no-validate' => false,
	),
	'slide_layers'     => array(
		'type'        => 'addable-box',
		'value'       => '',
		'label'       => esc_html__( 'Slide Layers', 'oktan' ),
		'desc'        => esc_html__( 'Choose a tag and text inside it', 'oktan' ),

		'box-options' => array_merge( array(
			'layer_tag'            => array(
				'type'    => 'select',
				'value'   => 'h3',
				'label'   => esc_html__( 'Layer tag', 'oktan' ),
				'desc'    => esc_html__( 'Select a tag for your ', 'oktan' ),
				'choices' => array(
					'h3' => esc_html__( 'H3 tag', 'oktan' ),
					'h2' => esc_html__( 'H2 tag', 'oktan' ),
					'h4' => esc_html__( 'H4 tag', 'oktan' ),
					'p'  => esc_html__( 'P tag', 'oktan' ),

				),
			),
			'layer_animation'      => array(
				'type'    => 'select',
				'value'   => 'fadeIn',
				'label'   => esc_html__( 'Animation type', 'oktan' ),
				'desc'    => esc_html__( 'Select one of predefined animations', 'oktan' ),
				'choices' => oktan_unyson_option_animations(),
			),
			'layer_text'           => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Layer text', 'oktan' ),
				'desc'  => esc_html__( 'Text to appear in slide layer', 'oktan' ),
			),
			'layer_text_color'     => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Layer text color', 'oktan' ),
				'desc'    => esc_html__( 'Select a color for your text in layer', 'oktan' ),
				'choices' => array(
					''           => esc_html__( 'Inherited', 'oktan' ),
					'color-main'  => esc_html__( 'First theme main color', 'oktan' ),
					'color-main2' => esc_html__( 'Second theme main color', 'oktan' ),
					'color-darkgrey'       => esc_html__( 'Dark grey theme color', 'oktan' ),
					'color-dark'      => esc_html__( 'Dark theme color', 'oktan' ),

				),
			),
			'layer_text_weight'    => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Layer text weight', 'oktan' ),
				'desc'    => esc_html__( 'Select a weight for your text in layer', 'oktan' ),
				'choices' => array(
					''     => esc_html__( 'Normal', 'oktan' ),
					'bold' => esc_html__( 'Bold', 'oktan' ),
					'thin' => esc_html__( 'Thin', 'oktan' ),

				),
			),
			'layer_text_transform' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Layer text transform', 'oktan' ),
				'desc'    => esc_html__( 'Select a text transformation for your layer', 'oktan' ),
				'choices' => array(
					''                => esc_html__( 'None', 'oktan' ),
					'text-lowercase'  => esc_html__( 'Lowercase', 'oktan' ),
					'text-uppercase'  => esc_html__( 'Uppercase', 'oktan' ),
					'text-capitalize' => esc_html__( 'Capitalize', 'oktan' ),

				),
			),
			'class' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Additional Layer CSS class', 'oktan' ),
			), $events_box_options_event_options )
		),
		'template'    => esc_html__( 'Slider Layer', 'oktan' ),
		'limit'           => 5, // limit the number of boxes that can be added
		'add-button-text' => esc_html__( 'Add', 'oktan' ),
	),
	'class'           => array(
		'type'  => 'text',
		'value' => '',
		'label' => esc_html__( 'Additional Slide CSS class', 'oktan' ),
	),
	'button' => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'value'   => false,
		'picker'  => array(
			'show_button' => array(
				'type'         => 'switch',
				'label'        => esc_html__( 'Show button', 'oktan' ),
				'left-choice'  => array(
					'value' => '',
					'label' => esc_html__( 'No', 'oktan' ),
				),
				'right-choice' => array(
					'value' => 'button',
					'label' => esc_html__( 'Yes', 'oktan' ),
				),
			),
		),
		'choices' => array(
			''       => array(),
			'button' => $button_options,
		),
	),
);