<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image', 'oktan' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'oktan' )
	),
	'size'             => array(
		'type'    => 'group',
		'options' => array(
			'width'  => array(
				'type'  => 'text',
				'label' => __( 'Width', 'oktan' ),
				'desc'  => __( 'Set image width', 'oktan' ),
				'value' => 300
			),
			'height' => array(
				'type'  => 'text',
				'label' => __( 'Height', 'oktan' ),
				'desc'  => __( 'Set image height', 'oktan' ),
				'value' => 200
			)
		)
	),
	'image-link-group' => array(
		'type'    => 'group',
		'options' => array(
			'link'   => array(
				'type'  => 'text',
				'label' => __( 'Image Link', 'oktan' ),
				'desc'  => __( 'Where should your image link to?', 'oktan' )
			),
			'target' => array(
				'type'         => 'switch',
				'label'        => __( 'Open Link in New Window', 'oktan' ),
				'desc'         => __( 'Select here if you want to open the linked page in a new window', 'oktan' ),
				'right-choice' => array(
					'value' => '_blank',
					'label' => __( 'Yes', 'oktan' ),
				),
				'left-choice'  => array(
					'value' => '_self',
					'label' => __( 'No', 'oktan' ),
				),
			),
		)
	),
	'style'       => array(
		'label'   => esc_html__( 'Decoration image', 'oktan' ),
		'desc'    => esc_html__( 'Choose a type for your decoration', 'oktan' ),
		'value'   => '',
		'type'    => 'select',
		'choices' => array(
			''   => esc_html__( 'Default', 'oktan' ),
			'rounded overflow-hidden'  => esc_html__( 'Rounded image', 'oktan' ),
		)
	),
);

