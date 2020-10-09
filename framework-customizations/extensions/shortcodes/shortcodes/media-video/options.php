<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'media_link'     => array(
		'type'  => 'text',
		'value' => '',
		'label' => esc_html__( 'Link to your side media', 'oktan' ),
		'desc'  => esc_html__( 'You can add a link to your side media. If YouTube link will be provided, video will play in LightBox', 'oktan' ),
	),
	'media_video'    => array(
		'type'    => 'oembed',
		'value'   => '',
		'label'   => esc_html__( 'Video', 'oktan' ),
		'desc'    => esc_html__( 'Adds video player', 'oktan' ),
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
);
