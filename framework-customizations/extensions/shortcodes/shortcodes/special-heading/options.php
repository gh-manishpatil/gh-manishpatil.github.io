<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'heading_align' => array(
		'type'    => 'select',
		'value'   => 'text-center text-sm-left',
		'label'   => esc_html__( 'Text alignment', 'oktan' ),
		'desc'    => esc_html__( 'Select heading text alignment', 'oktan' ),
		'choices' => array(
			'text-center text-sm-left'   => esc_html__( 'Left', 'oktan' ),
			'text-center' => esc_html__( 'Center', 'oktan' ),
			'text-center text-sm-right'  => esc_html__( 'Right', 'oktan' ),
		),
	),
	'headings'      => array(
		'type'        => 'addable-box',
		'value'       => '',
		'label'       => esc_html__( 'Headings', 'oktan' ),
		'desc'        => esc_html__( 'Choose a tag and text inside it', 'oktan' ),
		'box-options' => array(
			'heading_icon' => array(
				'type'  => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size' => 'medium',
				'label' => esc_html__('Optional icon', 'oktan'),
			),
			'heading_tag'            => array(
				'type'    => 'select',
				'value'   => 'h3',
				'label'   => esc_html__( 'Heading tag', 'oktan' ),
				'desc'    => esc_html__( 'Select a tag for your ', 'oktan' ),
				'choices' => array(
					'h1' => esc_html__( 'H1 tag', 'oktan' ),
					'h2' => esc_html__( 'H2 tag', 'oktan' ),
					'h3' => esc_html__( 'H3 tag', 'oktan' ),
					'h4' => esc_html__( 'H4 tag', 'oktan' ),
					'h5' => esc_html__( 'H5 tag', 'oktan' ),
					'h6' => esc_html__( 'H6 tag', 'oktan' ),
					'p'  => esc_html__( 'P tag', 'oktan' ),
				),
			),
			'heading_text'           => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Heading text', 'oktan' ),
				'desc'  => esc_html__( 'Text to appear in slide layer', 'oktan' ),
			),
			'heading_text_color'     => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Heading text color', 'oktan' ),
				'desc'    => esc_html__( 'Select a color for your text in layer', 'oktan' ),
				'choices' => array(
					''           => esc_html__( 'Inherited', 'oktan' ),
					'color-main'  => esc_html__( 'First theme accent color', 'oktan' ),
					'color-main2' => esc_html__( 'Second theme accent color', 'oktan' ),
					'color-darkgrey'       => esc_html__( 'Dark grey theme color', 'oktan' ),
					'color-dark'      => esc_html__( 'Dark theme color', 'oktan' ),
				),
			),
			'heading_text_weight'    => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Heading text weight', 'oktan' ),
				'desc'    => esc_html__( 'Select a weight for your text in layer', 'oktan' ),
				'choices' => array(
					''     => esc_html__( 'Normal', 'oktan' ),
					'bold' => esc_html__( 'Bold', 'oktan' ),
					'thin' => esc_html__( 'Thin', 'oktan' ),

				),
			),
			'heading_text_size'    => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Heading text size', 'oktan' ),
				'desc'    => esc_html__( 'Select a size for your text in layer', 'oktan' ),
				'choices' => array(
					''     => esc_html__( 'Normal', 'oktan' ),
					'big' => esc_html__( 'Big', 'oktan' ),
					'small' => esc_html__( 'Small', 'oktan' ),

				),
			),
			'heading_text_transform' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Heading text transform', 'oktan' ),
				'desc'    => esc_html__( 'Select a weight for your text in layer', 'oktan' ),
				'choices' => array(
					''                => esc_html__( 'None', 'oktan' ),
					'text-lowercase'  => esc_html__( 'Lowercase', 'oktan' ),
					'text-uppercase'  => esc_html__( 'Uppercase', 'oktan' ),
					'text-capitalize' => esc_html__( 'Capitalize', 'oktan' ),

				),
			),
			'heading_text_type' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Heading text type', 'oktan' ),
				'desc'    => esc_html__( 'Select a type for your text in layer', 'oktan' ),
				'choices' => array(
					''                => esc_html__( 'None', 'oktan' ),
					'numeric'  => esc_html__( 'With number', 'oktan' ),
				),
			),
		),
		'template'    => '{{- heading_text }}',
	)
);
