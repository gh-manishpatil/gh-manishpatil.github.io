<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$main_options = oktan_get_section_options_array();
$options = array(
	'tab_main_options' => array(
		'type' => 'tab',
		'title' => esc_html__('Main Options', 'oktan'),
		'options' => array(
			'column_align'     => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Text alignment in column', 'oktan' ),
				'desc'    => esc_html__( 'Select text alignment inside your column', 'oktan' ),
				'choices' => array(
					''            => esc_html__( 'Inherit', 'oktan' ),
					'text-center text-sm-left'   => esc_html__( 'Left', 'oktan' ),
					'text-center' => esc_html__( 'Center', 'oktan' ),
					'text-center text-sm-right'  => esc_html__( 'Right', 'oktan' ),
				),
			),
			'column_padding'   => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Column padding', 'oktan' ),
				'desc'    => esc_html__( 'Select optional internal column paddings', 'oktan' ),
				'choices' => array(
					''     => esc_html__( 'No padding', 'oktan' ),
					'p-10' => esc_html__( '10px', 'oktan' ),
					'p-15' => esc_html__( '15px', 'oktan' ),
					'p-20' => esc_html__( '20px', 'oktan' ),
					'p-30' => esc_html__( '30px', 'oktan' ),
					'p-40' => esc_html__( '40px', 'oktan' ),
					'p-xl-50' => esc_html__( '50px', 'oktan' ),
					'p-60' => esc_html__( '60px', 'oktan' ),
				),
			),
			'special_column'   => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Special Column', 'oktan' ),
				'desc'    => esc_html__( 'Select special column', 'oktan' ),
				'choices' => array(
					''     => esc_html__( 'Default', 'oktan' ),
					'content-center' => esc_html__( 'Special Center Column', 'oktan' ),
					'special-column' => esc_html__( 'Special Column Variant 1 Right', 'oktan' ),
					'special-column-left' => esc_html__( 'Special Column Variant 1 Left', 'oktan' ),
					'special-column2' => esc_html__( 'Special Column Variant 2 Left', 'oktan' ),
					'special-column2-right' => esc_html__( 'Special Column Variant 2 Right', 'oktan' ),
				),
			),
			'background_color' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Background color', 'oktan' ),
				'desc'    => esc_html__( 'Select background color', 'oktan' ),
				'help'    => esc_html__( 'Select one of predefined background types', 'oktan' ),
				'choices' => oktan_unyson_option_get_backgrounds_array(),
			),
			'column_image' => array(
				'type'  => 'upload',
				'value' => array(),
				'label' => esc_html__('Column image', 'oktan'),
				'desc'  => esc_html__('Select image that you want to appear in column', 'oktan'),
				'images_only' => true,
			),
			'column_overlay'      => array(
				'label'        => esc_html__( 'Column Overlay', 'oktan' ),
				'desc'         => esc_html__( 'Enable column overlay', 'oktan' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'column-overlay',
					'label' => esc_html__( 'Yes', 'oktan' )
				),
				'left-choice'  => array(
					'value' => '',
					'label' => esc_html__( 'No', 'oktan' )
				),
				'value'        => 'yes',
			),
			'column_animation' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Animation type', 'oktan' ),
				'desc'    => esc_html__( 'Select one of predefined animations', 'oktan' ),
				'choices' => oktan_unyson_option_animations(),
			),
			'column_additional_class' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Additional CSS class', 'oktan' ),
				'desc'  => esc_html__( 'Add your custom CSS class to column. Useful for Customization', 'oktan' ),
			),
		),
	),
	'tab_responsive' => array(
		'type' => 'tab',
		'title' => esc_html__('Responsive', 'oktan'),
		'options' => array(
			'responsive_alignment' => array(
				'type' => 'tab',
				'title' => esc_html__('Alignment', 'oktan'),
				'options' => array(
					'text_align_sm' => array(
						'type'    => 'select',
						'value'   => '',
						'label'   => esc_html__( 'Text align above 576px screen', 'oktan' ),
						'choices' => array(
							''   => esc_html__( 'Inherit', 'oktan' ),
							'text-sm-left'   => esc_html__( 'Left', 'oktan' ),
							'text-sm-center' => esc_html__( 'Center', 'oktan' ),
							'text-sm-right'  => esc_html__( 'Right', 'oktan' ),
						),
					),
					'text_align_md' => array(
						'type'    => 'select',
						'value'   => '',
						'label'   => esc_html__( 'Text align above 768px screen', 'oktan' ),
						'choices' => array(
							''   => esc_html__( 'Inherit', 'oktan' ),
							'text-md-left'   => esc_html__( 'Left', 'oktan' ),
							'text-md-center' => esc_html__( 'Center', 'oktan' ),
							'text-md-right'  => esc_html__( 'Right', 'oktan' ),
						),
					),
					'text_align_lg' => array(
						'type'    => 'select',
						'value'   => '',
						'label'   => esc_html__( 'Text align above 992px screen', 'oktan' ),
						'choices' => array(
							''   => esc_html__( 'Inherit', 'oktan' ),
							'text-lg-left'   => esc_html__( 'Left', 'oktan' ),
							'text-lg-center' => esc_html__( 'Center', 'oktan' ),
							'text-lg-right'  => esc_html__( 'Right', 'oktan' ),
						),
					),
					'text_align_xl' => array(
						'type'    => 'select',
						'value'   => '',
						'label'   => esc_html__( 'Text align above 1200px screen', 'oktan' ),
						'choices' => array(
							''   => esc_html__( 'Inherit', 'oktan' ),
							'text-xl-left'   => esc_html__( 'Left', 'oktan' ),
							'text-xl-center' => esc_html__( 'Center', 'oktan' ),
							'text-xl-right'  => esc_html__( 'Right', 'oktan' ),
						),
					),
				),
			),
			'responsive_visibility' => array(
				'type' => 'tab',
				'title' => esc_html__('Visibility', 'oktan'),
				'options' => oktan_unyson_option_responsive_options_array(),
			),
		),
	),
);
