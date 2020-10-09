<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main' => array(
		'type'    => 'box',
		'title'   => '',
		'options' => array(
			'id'       => array(
				'type' => 'unique',
			),
			'builder'  => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Form Fields', 'oktan' ),
				'options' => array(
					'form' => array(
						'label'        => false,
						'type'         => 'form-builder',
						'value'        => array(
							'json' => apply_filters( 'fw:ext:forms:builder:load-item:form-header-title', true )
								? json_encode( array(
									array(
										'type'      => 'form-header-title',
										'shortcode' => 'form_header_title',
										'width'     => '',
										'options'   => array(
											'title'    => '',
											'subtitle' => '',
										)
									)
								) )
								: '[]'
						),
						'fixed_header' => true,
					),
				),
			),
			'settings' => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Settings', 'oktan' ),
				'options' => array(
					'settings-options' => array(
						'title'   => esc_html__( 'Contact Form Options', 'oktan' ),
						'type'    => 'tab',
						'options' => array(
							'background_color'    => array(
								'type'    => 'select',
								'value'   => 'ls',
								'label'   => esc_html__( 'Form Background color', 'oktan' ),
								'desc'    => esc_html__( 'Select background color', 'oktan' ),
								'help'    => esc_html__( 'Select one of predefined background colors', 'oktan' ),
								'choices' => array(
									''                              => esc_html__( 'No background', 'oktan' ),
									'p-40 muted-bg' => esc_html__( 'Muted', 'oktan' ),
									'p-40 bordered'      => esc_html__( 'With Border', 'oktan' ),
									'p-40 ls rounded'               => esc_html__( 'Light', 'oktan' ),
									'p-40 ls ms'            => esc_html__( 'Light Grey', 'oktan' ),
									'p-40 ds'               => esc_html__( 'Dark Grey', 'oktan' ),
									'p-40 ds ms'            => esc_html__( 'Dark', 'oktan' ),
									'p-40 cs'               => esc_html__( 'Main color', 'oktan' ),
									'p-40 cs cs2'   => esc_html__( 'Second Main color', 'oktan' ),
								),
							),
							'columns_padding'     => array(
								'type'    => 'select',
								'value'   => 'c-gutter-30',
								'label'   => esc_html__( 'Columns gutter', 'oktan' ),
								'desc'    => esc_html__( 'Choose columns horizontal padding (gutter) value inside form', 'oktan' ),
								'choices' => array(
									'c-gutter-30' => esc_html__( '30px - default', 'oktan' ),
									'c-gutter-10'  => esc_html__( '10px', 'oktan' ),
									'c-gutter-20'  => esc_html__( '20px', 'oktan' ),
									'c-gutter-40'  => esc_html__( '40px', 'oktan' ),
									'c-gutter-50'  => esc_html__( '50px', 'oktan' ),
									'c-gutter-60'  => esc_html__( '60px', 'oktan' ),
								),
							),
							'columns_margin_bottom'     => array(
								'type'    => 'select',
								'value'   => 'c-mb-15',
								'label'   => esc_html__( 'Columns bottom margins', 'oktan' ),
								'desc'    => esc_html__( 'Choose columns bottom margin value inside form', 'oktan' ),
								'choices' => array(
									'c-mb-15' => esc_html__( '15px - default', 'oktan' ),
									'c-mb-5'  => esc_html__( '5px', 'oktan' ),
									'c-mb-10'  => esc_html__( '10px', 'oktan' ),
									'c-mb-20'  => esc_html__( '20px', 'oktan' ),
									'c-mb-25'  => esc_html__( '25px', 'oktan' ),
									'c-mb-30'  => esc_html__( '30px', 'oktan' ),
									'c-mb-40'  => esc_html__( '40px', 'oktan' ),
								),
							),
							'form_email_settings' => array(
								'type'    => 'group',
								'options' => array(
									'email_to' => array(
										'type'  => 'text',
										'label' => esc_html__( 'Email To', 'oktan' ),
										'help'  => esc_html__( 'We recommend you to use an email that you verify often', 'oktan' ),
										'desc'  => esc_html__( 'The form will be sent to this email address.', 'oktan' ),
									),
								),
							),
							'form_text_settings'  => array(
								'type'    => 'group',
								'options' => array(
									'subject-group'       => array(
										'type'    => 'group',
										'options' => array(
											'subject_message' => array(
												'type'  => 'text',
												'label' => esc_html__( 'Subject Message', 'oktan' ),
												'desc'  => esc_html__( 'This text will be used as subject message for the email', 'oktan' ),
												'value' => esc_html__( 'Contact Form', 'oktan' ),
											),
										)
									),
									'submit-button-group' => array(
										'type'    => 'group',
										'options' => array(
											'submit_button_text' => array(
												'type'  => 'text',
												'label' => esc_html__( 'Submit Button', 'oktan' ),
												'desc'  => esc_html__( 'This text will appear in submit button', 'oktan' ),
												'value' => esc_html__( 'Send', 'oktan' ),
											),
											'reset_button_text'  => array(
												'type'  => 'text',
												'label' => esc_html__( 'Reset Button', 'oktan' ),
												'desc'  => esc_html__( 'This text will appear in reset button. Leave blank if reset button not needed', 'oktan' ),
												'value' => esc_html__( 'Clear', 'oktan' ),
											),
										)
									),
									'success-group'       => array(
										'type'    => 'group',
										'options' => array(
											'success_message' => array(
												'type'  => 'text',
												'label' => esc_html__( 'Success Message', 'oktan' ),
												'desc'  => esc_html__( 'This text will be displayed when the form will successfully send', 'oktan' ),
												'value' => esc_html__( 'Message sent!', 'oktan' ),
											),
										)
									),
									'failure_message'     => array(
										'type'  => 'text',
										'label' => esc_html__( 'Failure Message', 'oktan' ),
										'desc'  => esc_html__( 'This text will be displayed when the form will fail to be sent', 'oktan' ),
										'value' => esc_html__( 'Oops something went wrong.', 'oktan' ),
									),
								),
							),
						)
					),
					'mailer-options'   => array(
						'title'   => esc_html__( 'Mailer Options', 'oktan' ),
						'type'    => 'tab',
						'options' => array(
							'mailer' => array(
								'label' => false,
								'type'  => 'mailer'
							)
						)
					)
				),
			),
		),
	)
);