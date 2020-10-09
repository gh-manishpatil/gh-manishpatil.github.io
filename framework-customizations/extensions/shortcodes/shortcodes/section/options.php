<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$main_options = oktan_get_section_options_array();
//adding overflow_visible for section
$main_options['overflow_visible'] = array(
	'type'  => 'switch',
	'value' => false,
	'label' => esc_html__('Overflow visible', 'oktan'),
	'desc'  => esc_html__('Show content that do not fit in section', 'oktan'),
	'left-choice' => array(
		'value' => false,
		'label' => esc_html__('No', 'oktan'),
	),
	'right-choice' => array(
		'value' => true,
		'label' => esc_html__('Yes', 'oktan'),
	)
);
//adding section name for builder backend view
$main_options['section_name'] = array(
	'type'  => 'text',
	'value' => '',
	'label' => esc_html__('Optional section name', 'oktan'),
);

$options = array(
	'unique_id' => array(
		'type' => 'unique',
		'length' => 7
	),
	'tab_main_options' => array(
		'type' => 'tab',
		'title' => esc_html__('Main Options', 'oktan'),
		'options' => $main_options,
	),
	'tab_padding_options' => array(
		'type' => 'tab',
		'title' => esc_html__('Section Padding', 'oktan'),
		'options' => oktan_unyson_option_get_section_padding_array(),
	),
	'tab_onehalf_media_options' => array(
		'type' => 'tab',
		'title' => esc_html__('Side Media', 'oktan'),
		'options' => array(
			'side_media_image' => array(
				'type'  => 'upload',
				'value' => array(),
				'label' => esc_html__('Side media image', 'oktan'),
				'desc'  => esc_html__('Select image that you want to appear as one half side image', 'oktan'),
				'images_only' => true,
			),
			'side_media_link' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__('Link to your side media', 'oktan'),
				'desc'  => esc_html__('You can add a link to your side media. If YouTube link will be provided, video will play in LightBox', 'oktan'),
			),
			'side_media_video' => array(
				'type'    => 'oembed',
				'value'   => '',
				'label'   => esc_html__( 'Video', 'oktan' ),
				'desc'    => esc_html__( 'Adds video player. Works only when side media image is set', 'oktan' ),
				'help'    => esc_html__( 'Leave blank if no needed', 'oktan' ),
				'preview' => array(
					'width'      => 278, // optional, if you want to set the fixed width to iframe
					'height'     => 185, // optional, if you want to set the fixed height to iframe
					/**
					 * if is set to false it will force to fit the dimensions,
					 * because some widgets return iframe with aspect ratio and ignore applied dimensions
					 */
					'keep_ratio' => true
				),
			),
			'side_media_position'  => array(
				'type'  => 'switch',
				'value' => 'left',
				'label' => esc_html__('Media position', 'oktan'),
				'desc'  => esc_html__('Left or right media position', 'oktan'),
				'left-choice' => array(
					'value' => 'left',
					'label' => esc_html__('Left', 'oktan'),
				),
				'right-choice' => array(
					'value' => 'right',
					'label' => esc_html__('Right', 'oktan'),
				),
			),
		),
	),
	'tab_responsive' => array(
		'type' => 'tab',
		'title' => esc_html__('Responsive', 'oktan'),
		'options' => array(
			'responsive_visibility' => array(
				'type' => 'tab',
				'title' => esc_html__('Visibility', 'oktan'),
				'options' => oktan_unyson_option_responsive_options_array(),
			),
			'responsive_horizontal_padding' => array(
				'type' => 'tab',
				'title' => esc_html__('Horizontal padding', 'oktan'),
				'options' => array(
					'container-px-padding' => array(
						'type'    => 'select',
						'value'   => '',
						'label'   => esc_html__( 'Horizontal padding', 'oktan' ),
						'help'    => esc_html__( 'Choose horizontal padding value for section',
							'oktan' ),
						'choices' => array(
							''      => esc_html__( 'default (15px)', 'oktan' ),
							'container-px-0'      => esc_html__( 'none (0px)', 'oktan' ),
							'container-px-5'      => esc_html__( 'Custom (5px)', 'oktan' ),
							'container-px-10'      => esc_html__( 'Custom (10px)', 'oktan' ),
						),
					),

				)
			),
		),
	),
	'tab_background_extended' => array(
		'type' => 'tab',
		'title' => esc_html__('Background Video', 'oktan'),
		'options' => array(
			'background_video' => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'type' => array(
						'type'    => 'select',
						'label'   => esc_html__( 'Background Type', 'oktan' ),
						'desc'    => esc_html__( 'Here you can choose section background type', 'oktan' ),
						'value'   => '',
						'choices' => array(
							'' => esc_html__( 'None', 'oktan' ),
							'video_oembed'    => esc_html__( 'Video OEmbed', 'oktan' ),
							'video_upload'    => esc_html__( 'Video Upload', 'oktan' ),
						)
					)
				),
				'choices' => array(
					'video_oembed'    => array(
						'video' => array(
							'desc'  => esc_html__( 'Insert your video URL', 'oktan' ),
							'type'  => 'text',
						),
						'poster' => array(
							'label'   => esc_html__( 'Replacement Image', 'oktan' ),
							'type'    => 'background-image',
							'help'    => esc_html__('This image will replace the video on mobile devices that disable background videos', 'oktan'),
						),
						'loop_video'      => array(
							'label'        => esc_html__( 'Loop Video', 'oktan' ),
							'desc'         => esc_html__( 'Enable loop video?', 'oktan' ),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => 'yes',
								'label' => esc_html__( 'Yes', 'oktan' )
							),
							'left-choice'  => array(
								'value' => 'no',
								'label' => esc_html__( 'No', 'oktan' )
							),
							'value'        => 'yes',
						),
					),
					'video_upload' => array(
						'video'  => array(
							'desc'        => esc_html__( 'Upload a video', 'oktan' ),
							'images_only' => false,
							'type'        => 'upload',
						),
						'poster' => array(
							'label'   => esc_html__( 'Replacement Image', 'oktan' ),
							'type'    => 'background-image',
							'help'    => esc_html__('This image will replace the video on mobile devices that disable background videos', 'oktan'),
						),
						'loop_video'      => array(
							'label'        => esc_html__( 'Loop Video', 'oktan' ),
							'desc'         => esc_html__( 'Enable loop video?', 'oktan' ),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => 'yes',
								'label' => esc_html__( 'Yes', 'oktan' )
							),
							'left-choice'  => array(
								'value' => 'no',
								'label' => esc_html__( 'No', 'oktan' )
							),
							'value'        => 'yes',
						),
					),
				)
			),
		),

	),
);
