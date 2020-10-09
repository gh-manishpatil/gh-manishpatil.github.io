<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$options = array(
	'image_author' => array(
		'type'        => 'upload',
		'value'       => '',
		'label'       => esc_html__( 'Image author', 'oktan' ),
		'image'       => esc_html__( 'Author Image', 'oktan' ),
		'images_only' => true,
	),
    'name_author'           => array(
        'type'  => 'text',
        'value' => '',
        'label' => esc_html__( 'Name', 'oktan' ),
        'desc'  => esc_html__( 'Name of author', 'oktan' ),
    ),
	'image_signature' => array(
		'type'        => 'upload',
		'value'       => '',
		'label'       => esc_html__( 'Image of signature', 'oktan' ),
		'image'       => esc_html__( 'Signature Image', 'oktan' ),
		'images_only' => true,
	),


);