<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$options = array(
	'items'         => array(
		'type'            => 'addable-popup',
		'value'           => '',
		'label'           => esc_html__( 'Masonry items', 'oktan' ),
		'popup-options'     => array(
			'image' => array(
				'type'        => 'upload',
				'value'       => '',
				'label'       => esc_html__( 'Image', 'oktan' ),
				'images_only' => true,
			),
			'url'   => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Image link', 'oktan' ),
			),
			'style'       => array(
				'label'   => esc_html__( 'Decoration image', 'oktan' ),
				'desc'    => esc_html__( 'Choose a type for your decoration', 'oktan' ),
				'value'   => '',
				'type'    => 'select',
				'choices' => array(
					''   => esc_html__( 'Default', 'oktan' ),
					'rounded overflow-hidden'  => esc_html__( 'Rounded image', 'oktan' ),
					'bordered text-center p-xl-50 p-20 rounded'  => esc_html__( 'Bordered Rounded image', 'oktan' ),
					'ls text-center p-xl-50 p-20 rounded'  => esc_html__( 'Light background Rounded image', 'oktan' ),
				)
			),
			'size'             => array(
				'type'    => 'group',
				'options' => array(
					'width'  => array(
						'type'  => 'text',
						'label' => esc_html__( 'Width', 'oktan' ),
						'desc'  => esc_html__( 'Set image width', 'oktan' ),
						'value' => ''
					),
					'height' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Height', 'oktan' ),
						'desc'  => esc_html__( 'Set image height', 'oktan' ),
						'value' => ''
					)
				)
			),
		),
		'template'        => '{{=image.url}}',
		'limit'           => 0, // limit the number of boxes that can be added
		'add-button-text' => esc_html__( 'Add', 'oktan' ),
		'sortable'        => true,
	),
	'margin'        => array(
		'label'   => esc_html__( 'Horizontal item margin (px)', 'oktan' ),
		'desc'    => esc_html__( 'Select horizontal item margin', 'oktan' ),
		'value'   => '30',
		'type'    => 'select',
		'choices' => array(
			'0'  => esc_html__( '0', 'oktan' ),
			'1'  => esc_html__( '1px', 'oktan' ),
			'2'  => esc_html__( '2px', 'oktan' ),
			'10' => esc_html__( '10px', 'oktan' ),
			'20' => esc_html__( '20px', 'oktan' ),
			'30' => esc_html__( '30px', 'oktan' ),
			'40' => esc_html__( '40px', 'oktan' ),
			'60' => esc_html__( '60px', 'oktan' ),
		)
	),
	'responsive_lg' => array(
		'label'   => esc_html__( 'Columns on wide screens', 'oktan' ),
		'desc'    => esc_html__( 'Select items number on wide screens (>1200px)', 'oktan' ),
		'value'   => '4',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'oktan' ),
			'2' => esc_html__( '2', 'oktan' ),
			'3' => esc_html__( '3', 'oktan' ),
			'4' => esc_html__( '4', 'oktan' ),
			'6' => esc_html__( '6', 'oktan' ),
		)
	),
	'responsive_md' => array(
		'label'   => esc_html__( 'Columns on middle screens', 'oktan' ),
		'desc'    => esc_html__( 'Select items number on middle screens (>992px)', 'oktan' ),
		'value'   => '3',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'oktan' ),
			'2' => esc_html__( '2', 'oktan' ),
			'3' => esc_html__( '3', 'oktan' ),
			'4' => esc_html__( '4', 'oktan' ),
			'6' => esc_html__( '6', 'oktan' ),
		)
	),
	'responsive_sm' => array(
		'label'   => esc_html__( 'Columns on small screens', 'oktan' ),
		'desc'    => esc_html__( 'Select items number on small screens (>768px)', 'oktan' ),
		'value'   => '2',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'oktan' ),
			'2' => esc_html__( '2', 'oktan' ),
			'3' => esc_html__( '3', 'oktan' ),
			'4' => esc_html__( '4', 'oktan' ),
			'6' => esc_html__( '6', 'oktan' ),
		)
	),
	'responsive_xs' => array(
		'label'   => esc_html__( 'Columns on extra small screens', 'oktan' ),
		'desc'    => esc_html__( 'Select items number on extra small screens (<767px)', 'oktan' ),
		'value'   => '1',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'oktan' ),
			'2' => esc_html__( '2', 'oktan' ),
			'3' => esc_html__( '3', 'oktan' ),
			'4' => esc_html__( '4', 'oktan' ),
			'6' => esc_html__( '6', 'oktan' ),
		)
	),
);