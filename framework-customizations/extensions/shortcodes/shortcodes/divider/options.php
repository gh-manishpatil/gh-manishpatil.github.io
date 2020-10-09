<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'unique_id' => array(
		'type' => 'unique',
		'length' => 7
	),
	'style' => array(
		'type'     => 'multi-picker',
		'label'    => false,
		'desc'     => false,
		'picker' => array(
			'ruler_type' => array(
				'type'    => 'select',
				'label'   => esc_html__( 'Divider Type', 'oktan' ),
				'desc'    => esc_html__( 'Here you can set the styling and size of the Divider element', 'oktan' ),
				'choices' => array(
					'line'  => esc_html__( 'Line', 'oktan' ),
					'space' => esc_html__( 'Whitespace', 'oktan' ),
					'line_custom' => esc_html__( 'Line custom', 'oktan' ),
				)
			)
		),
		'choices'     => array(
			'space' => array(
				'height' => array(
					'label' => esc_html__( 'Height', 'oktan' ),
					'desc'  => esc_html__( 'How much whitespace do you need? Enter a pixel value. Positive value will increase the whitespace, negative value will reduce it. eg: \'50\', \'-25\', \'200\'', 'oktan' ),
					'type'  => 'text',
					'value' => '50'
				)
			),
            'line_custom' => array(
                'line_color'       => array(
                    'label'   => esc_html__( 'Line Color', 'oktan' ),
                    'desc'    => esc_html__( 'Choose color of wave', 'oktan' ),
                    'value'   => 'bg-light',
                    'type'    => 'select',
                    'choices' => array(
                        'bg-light'   => esc_html__( 'Light color', 'oktan' ),
                        'bg-maincolor'  => esc_html__( 'Main color', 'oktan' ),
                    )
                ),
                'line_position'       => array(
                    'label'   => esc_html__( 'Line Position', 'oktan' ),
                    'desc'    => esc_html__( 'Choose position of line', 'oktan' ),
                    'value'   => 'text-center',
                    'type'    => 'select',
                    'choices' => array(
                        'text-center'   => esc_html__( 'Center', 'oktan' ),
                        'text-center text-sm-left'  => esc_html__( 'Left', 'oktan' ),
                        'text-center text-sm-right'  => esc_html__( 'Right', 'oktan' ),
                    )
                ),
            ),
		)
	),
	'responsive' => array(
		'type' => 'box',
		'options' => oktan_unyson_option_responsive_options_array(),
	)
);
