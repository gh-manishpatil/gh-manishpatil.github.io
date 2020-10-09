<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'post-featured-video-section' => array(
		'title'   => esc_html__( 'Post Featured Video', 'oktan' ),
		'type'    => 'box',
		'context' => 'side',

		'options' => array(
			'post-featured-video' => array(
				'type'    => 'oembed',
				'value'   => '',
				'label'   => esc_html__( 'Featured Video', 'oktan' ),
				'desc'    => esc_html__( 'Adds featured video', 'oktan' ),
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
		),
	)
);
