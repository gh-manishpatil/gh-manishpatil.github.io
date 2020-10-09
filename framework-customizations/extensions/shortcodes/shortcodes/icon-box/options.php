<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

//get button to add in a teaser:
$button         = fw_ext( 'shortcodes' )->get_shortcode( 'button' );
$button_options = $button->get_options();
unset( $button_options['link'] );
unset( $button_options['target'] );

$options = array(
	'style'   => array(
		'type'    => 'select',
		'label'   => esc_html__('Box Style', 'oktan'),
		'choices' => array(
			'top' => esc_html__('Icon above title', 'oktan'),
			'left' => esc_html__('Icon to the left of title', 'oktan'),
			'right' => esc_html__('Icon to the right of title', 'oktan')
		)
	),
	'background_color' => array(
		'type'    => 'select',
		'value'   => '',
		'label'   => esc_html__( 'Background color', 'oktan' ),
		'desc'    => esc_html__( 'Select background color', 'oktan' ),
		'help'    => esc_html__( 'Select one of predefined background types', 'oktan' ),
		'choices' => oktan_unyson_option_get_backgrounds_array(),
	),
	'icon'    => array(
		'type'  => 'icon-v2',
		'label' => esc_html__('Choose an Icon', 'oktan'),
	),
	'icon_style' => array(
		'type'    => 'image-picker',
		'value'   => '',
		'label'   => esc_html__( 'Icon Style', 'oktan' ),
		'desc'    => esc_html__( 'Select one of predefined icon styles.', 'oktan' ),
		'choices' => array(
			'' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon-box/static/img/1.png',
			'bordered' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon-box/static/img/2.png',
			'rounded bordered' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon-box/static/img/3.png',
			'round bordered' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon-box/static/img/4.png',
			'bg-' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon-box/static/img/5.png',
			'rounded bg-' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon-box/static/img/6.png',
			'round bg-' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon-box/static/img/7.png',
		),
		'blank' => false, // (optional) if true, images can be deselected
	),
	'icon_color' => array(
		'type'    => 'select',
		'label'   => esc_html__('Icon color', 'oktan'),
		'value' => 'color-main',
		'choices' => array(
			'color-darkgrey' => esc_html__('Darkgrey', 'oktan'),
			'color-main' => esc_html__('Accent', 'oktan'),
			'color-main2' => esc_html__('Accent second', 'oktan'),
			'color-main3' => esc_html__('Accent third', 'oktan'),
		),
	),
	'icon_font_size' => array(
		'type'    => 'select',
		'label'   => esc_html__('Icon Font Size', 'oktan'),
		'value'   => 'fs-20',
		'choices' => array(
			//12 14 16 18 20 24 28 32 36 40 56
			'' => esc_html__('Inherit', 'oktan'),
			'fs-12' => esc_html__('12px', 'oktan'),
			'fs-14' => esc_html__('14px', 'oktan'),
			'fs-16' => esc_html__('16px', 'oktan'),
			'fs-18' => esc_html__('18px', 'oktan'),
			'fs-20' => esc_html__('20px', 'oktan'),
			'fs-24' => esc_html__('24px', 'oktan'),
			'fs-28' => esc_html__('28px', 'oktan'),
			'fs-32' => esc_html__('32px', 'oktan'),
			'fs-36' => esc_html__('36px', 'oktan'),
			'fs-40' => esc_html__('40px', 'oktan'),
			'fs-56' => esc_html__('56px', 'oktan'),
			'fs-70' => esc_html__('70px', 'oktan'),
		),
	),
	'title'   => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title of the Box', 'oktan' ),
	),
	'title_text_weight'    => array(
		'type'    => 'select',
		'value'   => '',
		'label'   => esc_html__( 'Title text weight', 'oktan' ),
		'desc'    => esc_html__( 'Select a weight for your title in layer', 'oktan' ),
		'choices' => array(
			''     => esc_html__( 'Normal', 'oktan' ),
			'bold' => esc_html__( 'Bold', 'oktan' ),
			'thin' => esc_html__( 'Thin', 'oktan' ),

		),
	),
	'content' => array(
		'type'  => 'textarea',
		'label' => esc_html__( 'Content', 'oktan' ),
		'desc'  => esc_html__( 'Enter the desired content', 'oktan' ),
	),
	'content_text_size'    => array(
		'type'    => 'select',
		'value'   => '',
		'label'   => esc_html__( 'Content text size', 'oktan' ),
		'desc'    => esc_html__( 'Select a size for your text in layer', 'oktan' ),
		'choices' => array(
			''     => esc_html__( 'Normal', 'oktan' ),
			'bigger' => esc_html__( 'Big', 'oktan' ),
			'small' => esc_html__( 'Small', 'oktan' ),

		),
	),
	'text_align' => array(
		'type'    => 'select',
		'label'   => esc_html__('Text alignment', 'oktan'),
		'value'   => 'text-center text-sm-left',
		'choices' => array(
			'text-center text-sm-left' => esc_html__('Left', 'oktan'),
			'text-center' => esc_html__('Center', 'oktan'),
			'text-center text-sm-right' => esc_html__('Right', 'oktan'),
		),
	),
	'link'   => array(
		'type'  => 'text',
		'label' => esc_html__( 'Optional teaser link', 'oktan' ),
	),
	'class'   => array(
		'type'  => 'text',
		'label' => esc_html__( 'Optional additional CSS class', 'oktan' ),
	),
	'button' => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'value'   => false,
		'picker'  => array(
			'show_button' => array(
				'type'         => 'switch',
				'label'        => esc_html__( 'Show button', 'oktan' ),
				'left-choice'  => array(
					'value' => '',
					'label' => esc_html__( 'No', 'oktan' ),
				),
				'right-choice' => array(
					'value' => 'button',
					'label' => esc_html__( 'Yes', 'oktan' ),
				),
			),
		),
		'choices' => array(
			''       => array(),
			'button' => $button_options,
		),
	)
);