<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs'       => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Tabs', 'oktan' ),
		'popup-title'   => esc_html__( 'Add/Edit Tabs', 'oktan' ),
		'desc'          => esc_html__( 'Create your tabs', 'oktan' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title'          => array(
				'type'  => 'text',
				'label' => esc_html__( 'Tab Title', 'oktan' )
			),
			'tab_content'        => array(
				'type'  => 'wp-editor',
				'label' => esc_html__( 'Tab Content', 'oktan' ),
			),
			'tab_featured_image' => array(
				'type'        => 'upload',
				'value'       => '',
				'label'       => esc_html__( 'Tab Featured Image', 'oktan' ),
				'image'       => esc_html__( 'Featured image for your tab', 'oktan' ),
				'help'        => esc_html__( 'Image for your tab. It appears on the top of your tab content', 'oktan' ),
				'images_only' => true,
			),
			'tab_icon'           => array(
				'type'  => 'icon',
				'label' => esc_html__( 'Icon in tab title', 'oktan' ),
				'set'   => 'theme-fa-icons',
			),
		),
	),
	'small_tabs' => array(
		'type'         => 'switch',
		'value'        => '',
		'label'        => esc_html__( 'Small Tabs', 'oktan' ),
		'desc'         => esc_html__( 'Decrease tabs size', 'oktan' ),
		'left-choice'  => array(
			'value' => '',
			'label' => esc_html__( 'No', 'oktan' ),
		),
		'right-choice' => array(
			'value' => 'small-tabs',
			'label' => esc_html__( 'Yes', 'oktan' ),
		),
	),
	'id'         => array( 'type' => 'unique' ),
);