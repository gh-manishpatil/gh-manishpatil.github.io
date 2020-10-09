<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
//get button to add:
$button         = fw_ext( 'shortcodes' )->get_shortcode( 'button' );
$button_options = $button->get_options();

$options = array(
	'tab_main' => array(
		'type' => 'tab',
		'title' => esc_html__('Info', 'oktan'),
		'options' => array(
			'title'   => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Pricing plan title', 'oktan' ),
			),
			'description'   => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Plan description', 'oktan' ),
			),
			'currency'   => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Currency Sign', 'oktan' ),
			),
			'price'   => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Whole price', 'oktan' ),
				'desc' => esc_html__( 'Price before decimal divider', 'oktan' ),
			),
			'price_after'   => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Text after price', 'oktan' ),
				'desc' => esc_html__( 'Price after decimal divider, including divider (dot, coma etc.), for example ".99", or text "per month"', 'oktan' ),
			),
			'features'         => array(
				'type'            => 'addable-box',
				'value'           => '',
				'label'           => esc_html__( 'Pricing plan features', 'oktan' ),
				'box-options'     => array(
					'feature_name'   => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__( 'Feature name', 'oktan' ),
					),
					'feature_checked' => array(
						'type'        => 'select',
						'value'       => '',
						'label'       => esc_html__( 'Default, checked or unchecked', 'oktan' ),
						'choices'     => array(
							'default' => esc_html__( 'Default', 'oktan' ),
							'enabled' => esc_html__( 'Enabled', 'oktan' ),
							'disabled' => esc_html__( 'Disabled', 'oktan'),
						),
						'no-validate' => false,
					),
				),
				'template'        => '{{=feature_name}}',
				'limit'           => 0, // limit the number of boxes that can be added
				'add-button-text' => esc_html__( 'Add', 'oktan' ),
				'sortable'        => true,
			),
			'featured' => array(
				'type'  => 'switch',
				'value' => '',
				'label' => esc_html__('Default or featured plan', 'oktan'),
				'left-choice' => array(
					'value' => '',
					'label' => esc_html__(' Default', 'oktan'),
				),
				'right-choice' => array(
					'value' => 'plan-featured',
					'label' => esc_html__(' Featured', 'oktan'),
				),
			),
			'layout' => array(
				'label'   => esc_html__('Choose layout', 'oktan'),
				'type'    => 'select', // or 'short-select'
				'value'   => '1',
				'choices' => array(
					'1'  => esc_html__('Default', 'oktan'),
					'2' => esc_html__('Second', 'oktan'),
					'3' => esc_html__('Third', 'oktan'),
				),
			)
		),
	),
	'tab_button' => array(
		'type' => 'tab',
		'title' => esc_html__('Button', 'oktan'),
		'options' => array(
			$button_options,
		),
	),


);