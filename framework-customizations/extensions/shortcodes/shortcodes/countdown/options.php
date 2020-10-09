<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'datetime'       => array(
        'type'  => 'datetime-picker',
        'value' => '',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => esc_html__('Datetime', 'oktan'),
        'desc'  => esc_html__('Description', 'oktan'),
        'help'  => esc_html__('Help tip', 'oktan'),
        'datetime-picker' => array(
            'format'        => 'Y/m/d H:i', // Format datetime.
            'maxDate'       => false,  // By default there is not maximum date , set a date in the datetime format.
            'minDate'       => date('d-m-Y'),  // By default minimum date will be current day, set a date in the datetime format.
            'timepicker'    => true,   // Show timepicker.
            'datepicker'    => true,   // Show datepicker.
            'defaultTime'   => '12:00' // If the input value is empty, timepicker will set time use defaultTime.
        ),
    ),
	'countdown_variant'   => array(
		'type'    => 'select',
		'value'   => '',
		'label'   => esc_html__( 'Countdown layout', 'oktan' ),
		'desc'    => esc_html__( 'Select countdown layout', 'oktan' ),
		'choices' => array(
			''     => esc_html__( 'Layout 1', 'oktan' ),
			'countdown_layout2' => esc_html__( 'Layout 2', 'oktan' ),

		),
	),

);