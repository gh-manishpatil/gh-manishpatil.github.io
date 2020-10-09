<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Panels', 'oktan' ),
		'popup-title'   => esc_html__( 'Add/Edit Accordion Panels', 'oktan' ),
		'desc'          => esc_html__( 'Create your accordion panels', 'oktan' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title'          => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'oktan' )
			),
			'tab_content'        => array(
				'type'  => 'wp-editor',
				'label' => esc_html__( 'Content', 'oktan' )
			),
			'tab_featured_image' => array(
				'type'        => 'upload',
				'value'       => '',
				'label'       => esc_html__( 'Panel Featured Image', 'oktan' ),
				'image'       => esc_html__( 'Image for your panel.', 'oktan' ),
				'help'        => esc_html__( 'It appears to the left from your content', 'oktan' ),
				'images_only' => true,
			),
			'tab_icon'           => array(
				'type'  => 'icon',
				'label' => esc_html__( 'Icon in panel title', 'oktan' ),
				'set'   => 'theme-fa-icons',
			),
		)
	),

	'id'   => array( 'type' => 'unique' ),
);