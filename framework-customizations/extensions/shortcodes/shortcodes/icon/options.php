<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'       => array(
		'type'  => 'icon',
		'label' => esc_html__( 'Icon', 'oktan' ),
		'set'   => 'theme-fa-icons',
	),
	'icon_style' => array(
		'type'    => 'image-picker',
		'value'   => '',
		'label'   => esc_html__( 'Icon Style', 'oktan' ),
		'desc'    => esc_html__( 'Select one of predefined icon styles.', 'oktan' ),
		'help'    => esc_html__( 'If not set - no icon will appear.', 'oktan' ),
		'choices' => array(
			'' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon/static/img/icon_teaser_01.png',
			'color-darkgrey' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon/static/img/icon_teaser_02.png',
			'color-main' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon/static/img/icon_teaser_03.png',
		),

		'blank' => false, // (optional) if true, images can be deselected
	),
	'icon_class' => array(
		'type'        => 'select',
		'value'       => '',
		'label'       => esc_html__( 'Icon type', 'oktan' ),
		'desc'        => esc_html__( 'Select one of predefined social button types', 'oktan' ),
		'choices'     => array(
			''                                    => esc_html__( 'Default', 'oktan' ),
			'border-icon'                         => esc_html__( 'Simple Bordered Icon', 'oktan' ),
			'icon-bordered bordered round'            => esc_html__( 'Rounded Bordered Icon', 'oktan' ),
			'bg-icon'                             => esc_html__( 'Simple Background Icon', 'oktan' ),
			'bg-icon rounded-icon'                => esc_html__( 'Rounded Background Icon', 'oktan' ),
			'color-icon bg-icon'                  => esc_html__( 'Color Light Background Icon', 'oktan' ),
			'color-icon bg-icon rounded-icon'     => esc_html__( 'Color Light Background Rounded Icon', 'oktan' ),
			'color-icon'                          => esc_html__( 'Color Icon', 'oktan' ),
			'color-icon border-icon'              => esc_html__( 'Color Bordered Icon', 'oktan' ),
			'color-icon border-icon rounded-icon' => esc_html__( 'Rounded Color Bordered Icon', 'oktan' ),
			'color-bg-icon'                       => esc_html__( 'Color Background Icon', 'oktan' ),
			'color-bg-icon rounded-icon'          => esc_html__( 'Rounded Color Background Icon', 'oktan' ),

		),
		/**
		 * Allow save not existing choices
		 * Useful when you use the select to populate it dynamically from js
		 */
		'no-validate' => false,
	),
	'title'      => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'oktan' ),
		'desc'  => esc_html__( 'Title near icon', 'oktan' ),
	),
	'text'       => array(
		'type'  => 'text',
		'label' => esc_html__( 'Text', 'oktan' ),
		'desc'  => esc_html__( 'Text near title', 'oktan' ),
	)
);