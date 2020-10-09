<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'testimonials'        => array(
		'label'         => esc_html__( 'Testimonials', 'oktan' ),
		'popup-title'   => esc_html__( 'Add/Edit Testimonial', 'oktan' ),
		'desc'          => esc_html__( 'Here you can add, remove and edit your Testimonials.', 'oktan' ),
		'type'          => 'addable-popup',
		'template'      => '{{=author_name}}',
		'popup-options' => array(
			'content'       => array(
				'label' => esc_html__( 'Quote', 'oktan' ),
				'desc'  => esc_html__( 'Enter the testimonial here', 'oktan' ),
				'type'  => 'textarea',
			),
			'author_avatar' => array(
				'label' => esc_html__( 'Image', 'oktan' ),
				'desc'  => esc_html__( 'Either upload a new, or choose an existing image from your media library', 'oktan' ),
				'type'  => 'upload',
			),
			'author_name'   => array(
				'label' => esc_html__( 'Name', 'oktan' ),
				'desc'  => esc_html__( 'Enter the Name of the Person to quote', 'oktan' ),
				'type'  => 'text'
			),
            'author_date'  => array(
                    'type'  => 'datetime-picker',
                    'value' => '',
                    'label' => __('Date Of Quote', 'oktan'),
                    'desc'  => __('Set date of quote', 'oktan'),
                    'datetime-picker' => array(
                        'format'        => 'd.m.Y', // Format datetime.
                        'maxDate'       => false,  // By default there is not maximum date , set a date in the datetime format.
                        'minDate'       => false,  // By default minimum date will be current day, set a date in the datetime format.
                        'timepicker'    => false,   // Show timepicker.
                        'datepicker'    => true,   // Show datepicker.
                        'defaultTime'   => '12:00' // If the input value is empty, timepicker will set time use defaultTime.
                    ),
            ),
		)
	)
);