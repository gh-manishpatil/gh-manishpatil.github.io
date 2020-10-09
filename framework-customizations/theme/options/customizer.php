<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in WordPress customizer
 */

//theme defaults
$options_class = new Oktan_Options();
$defaults = $options_class->get_default_options_array();

// color defaults
$current_colors = oktan_get_theme_current_colors();

//find fw_ext
$shortcodes_extension = fw()->extensions->get( 'shortcodes' );
$meta_social_icons  = array();
if ( ! empty( $shortcodes_extension ) ) {
	$meta_social_icons = $shortcodes_extension->get_shortcode( 'icons_social' )->get_options();
}

$button_404  = array();
if ( ! empty( $shortcodes_extension ) ) {
	$button_404 = $shortcodes_extension->get_shortcode( 'button' )->get_options();
}


$slider_extension = fw()->extensions->get( 'slider' );
$choices_blog_slider          = '';
if ( ! empty ( $slider_extension ) ) {
	$choices_blog_slider = $slider_extension->get_populated_sliders_choices();
}
//adding empty value to disable slider
$choices_blog_slider['0'] = esc_html__( 'No Slider', 'oktan' );

$options = array(
	'meta_section' => array(
		'title'   => esc_html__( 'Theme Meta', 'oktan' ),
		'options' => array(
			'hide_popup' => array(
				'type'         => 'switch',
				'value'        => true,
				'label'        => esc_html__( 'Hide Popup Question', 'oktan' ),
				'right-choice' => array(
					'value' => false,
					'label' => esc_html__( 'Hide', 'oktan' )
				),
				'left-choice'  => array(
					'value' => true,
					'label' => esc_html__( 'Show', 'oktan' )
				),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
			'meta_phone' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Phone number', 'oktan' ),
				'desc'  => esc_html__( 'Number to appear in header', 'oktan' ),
				'help'  => esc_html__( 'Not all headers display this info', 'oktan' ),
			),
			'meta_email' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Email', 'oktan' ),
				'desc'  => esc_html__( 'Email to appear in header', 'oktan' ),
				'help'  => esc_html__( 'Not all headers display this info', 'oktan' ),
			),
			'meta_address' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Address', 'oktan' ),
				'desc'  => esc_html__( 'Address to appear in header', 'oktan' ),
				'help'  => esc_html__( 'Not all headers display this info', 'oktan' ),
			),
			//'social_icons'
			$meta_social_icons,
		),
		'wp-customizer-args' => array(
			'active_callback' => '__return_true',
		),
	),
	'header_section'       => array(
		'title'   => esc_html__( 'Theme Header Section', 'oktan' ),
		'options' => array(
			'logo_section'         => array(
				'title'   => esc_html__( 'Logo', 'oktan' ),
				'options' => array(
					'logo_image'             => array(
						'type'        => 'upload',
						'value'       => array(),
						'attr'        => array( 'class' => 'logo_image-class', 'data-logo_image' => 'logo_image' ),
						'label'       => esc_html__( 'Main logo image that appears in header', 'oktan' ),
						'desc'        => esc_html__( 'Select your logo', 'oktan' ),
						'help'        => esc_html__( 'Choose image to display as a site logo', 'oktan' ),
						'images_only' => true,
						'files_ext'   => array( 'png', 'jpg', 'jpeg', 'gif' ),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'logo_image_inverse'             => array(
						'type'        => 'upload',
						'value'       => array(),
						'attr'        => array( 'class' => 'logo_image-class', 'data-logo_image' => 'logo_image' ),
						'label'       => esc_html__( 'Main inverse logo image that appears in dark header', 'oktan' ),
						'desc'        => esc_html__( 'Select your inverse logo', 'oktan' ),
						'help'        => esc_html__( 'Choose image to display as a site inverse logo', 'oktan' ),
						'images_only' => true,
						'files_ext'   => array( 'png', 'jpg', 'jpeg', 'gif' ),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'logo_text'              => array(
						'type'  => 'text',
						'value' => 'Oktan',
						'attr'  => array( 'class' => 'logo_text-class', 'data-logo_text' => 'logo_text' ),
						'label' => esc_html__( 'Logo Text', 'oktan' ),
						'desc'  => esc_html__( 'Text that appears near logo image', 'oktan' ),
						'help'  => esc_html__( 'Type your text to show it in logo', 'oktan' ),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'logo_subtext'              => array(
						'type'  => 'text',
						'value' => '',
						'attr'  => array( 'class' => 'logo_text-class', 'data-logo_text' => 'logo_text' ),
						'label' => esc_html__( 'Logo Sub Text', 'oktan' ),
						'desc'  => esc_html__( 'Text that appears near logo image', 'oktan' ),
						'help'  => esc_html__( 'Type your text to show it in logo', 'oktan' ),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'logo_image_breadcrumbs' => array(
						'type'        => 'upload',
						'value'       => array(),
						'attr'        => array(
							'class'                       => 'logo_image_breadcrumbs-class',
							'data-logo_image_breadcrumbs' => 'logo_image_breadcrumbs'
						),
						'label'       => esc_html__( 'Logo image that appears in title section', 'oktan' ),
						'desc'        => esc_html__( 'Select secondary logo image that appears in title section. Not all title section has this image in it', 'oktan' ),
						'help'        => esc_html__( 'Choose image to display as a site logo', 'oktan' ),
						'images_only' => true,
						'files_ext'   => array( 'png', 'jpg', 'jpeg', 'gif' ),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
				),
			),
			oktan_get_header_options_array_for_customizer_and_page( $defaults ),
			'topline_section_options' => array(
				'title'              => esc_html__( 'Topline Section Options', 'oktan' ),
				'options'            => oktan_get_section_options_array( 'topline_', array(
					'top_padding',
					'bottom_padding',
					'top_padding_sm',
					'bottom_padding_sm',
					'top_padding_md',
					'bottom_padding_md',
					'top_padding_lg',
					'bottom_padding_lg',
					'top_padding_xl',
					'bottom_padding_xl',
					'columns_padding',
					'columns_vertical_margins',
					'is_align_vertical',

				) ),
				//show topline options only when header layout with topline chosen
				'wp-customizer-args' => array(
					'active_callback' => 'oktan_topline_is_visible',
				),
			),
			'toplogo_section_options' => array(
				'title'              => esc_html__( 'Toplogo Section Options', 'oktan' ),
				'options'            => oktan_get_section_options_array( 'toplogo_', array(
					'top_padding',
					'bottom_padding',
					'top_padding_sm',
					'bottom_padding_sm',
					'top_padding_md',
					'bottom_padding_md',
					'top_padding_lg',
					'bottom_padding_lg',
					'top_padding_xl',
					'bottom_padding_xl',
					'columns_padding',
					'columns_vertical_margins',
					'is_align_vertical',

				) ),
				'wp-customizer-args' => array(
					'active_callback' => 'oktan_toplogo_is_visible',
				),
			),
		),
	),
	'title_section'        => array(
		'title'   => esc_html__( 'Theme Title Section', 'oktan' ),
		'options' => array(
			'title_layout'          => array(
				'title'   => esc_html__( 'Title Section Layout', 'oktan' ),
				'options' => array(
					'page_title'      => array(
						'type'    => 'select',
						'value'   => $defaults['page_title'],
						'attr'    => array(
							'class'    => 'breadcrumbs-thumbnail',
						),
						'label'   => esc_html__( 'Page title sections with optional breadcrumbs', 'oktan' ),
						'desc'    => esc_html__( 'Select one of predefined page title sections. Install Unyson Breadcrumbs extension to display breadcrumbs', 'oktan' ),
						'help'    => esc_html__( 'You can select one of predefined theme title sections', 'oktan' ),
						'choices' => array(
							'1' => esc_html__( 'Default - title above breadcrumbs', 'oktan' ),
							'2' => esc_html__( 'Left title with right breadcrumbs', 'oktan' ),
							'3' => esc_html__( 'Left title with inline breadcrumbs', 'oktan' ),
							'4' => esc_html__( 'Centered title with bottom right breadcrumbs', 'oktan' ),
							'5' => esc_html__( 'Left small title with bottom small breadcrumbs', 'oktan' ),
							'6' => esc_html__( 'Centered small title with bottom small breadcrumbs', 'oktan' ),

						),
						'blank'   => false, // (optional) if true, image can be deselected
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'hide_term_title' => array(
						'type'         => 'switch',
						'value'        => true,
						'label'        => esc_html__( 'Hide Term Name', 'oktan' ),
						'desc'         => esc_html__( 'May to hide Archive or Taxonomy Name, such as \'Archives: \', \'Category: \', \'Tag: \', etc. ', 'oktan' ),
						'right-choice' => array(
							'value' => false,
							'label' => esc_html__( 'Show', 'oktan' )
						),
						'left-choice'  => array(
							'value' => true,
							'label' => esc_html__( 'Hide', 'oktan' )
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
				),
			),
			'title_section_options' => array(
				'title'   => esc_html__( 'Title Section Options', 'oktan' ),
				'options' => oktan_get_section_options_array( 'title_', array(
					'columns_padding',
					'columns_vertical_margins',
					'is_align_vertical',
				) ),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
			'title_section_padding' => array(
				'title'   => esc_html__( 'Title Section Padding', 'oktan' ),
				'options' => oktan_unyson_option_get_section_padding_array( 'title_'),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
		),
	),
	'footer_section'       => array(
		'title'   => esc_html__( 'Theme Footer Section', 'oktan' ),
		'options' => array(
			oktan_get_footer_options_array_for_customizer_and_page( $defaults )
		),
	),
	'copyright_section'    => array(
		'title'   => esc_html__( 'Theme Copyright Section', 'oktan' ),
		'options' => array(
			'copyright_layout'          => array(
				'title'   => esc_html__( 'Copyright Section Layout', 'oktan' ),
				'options' => array(
					'page_copyright' => array(
						'type'    => 'select',
						'value'   => $defaults['page_copyright'],
						'label'   => esc_html__( 'Page copyright', 'oktan' ),
						'desc'    => esc_html__( 'Select one of predefined page copyright sections.', 'oktan' ),
						'help'    => esc_html__( 'You can select one of predefined theme copyright section', 'oktan' ),
						'choices' => array(
							'1' => esc_html__( 'One centered column', 'oktan' ),
							'2' => esc_html__( 'Two columns', 'oktan' ),
							'3' => esc_html__( 'Three columns with logo and menu', 'oktan' ),
							'4' => esc_html__( 'Two columns with menu', 'oktan' ),
						),
						'blank'   => false, // (optional) if true, image can be deselected
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'copyright_text' => array(
						'type'  => 'textarea',
						'value' => '&copy; Oktan <span class="copyright_year">2019</span> | Created with <i class="fa fa-heart color-main"></i> by Author',
						'label' => esc_html__( 'Copyright text', 'oktan' ),
						'desc'  => esc_html__( 'Please type your copyright text', 'oktan' ),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'copyright_text2' => array(
						'type'  => 'textarea',
						'value' => 'Theme: Oktan',
						'label' => esc_html__( 'Copyright secondary text', 'oktan' ),
						'desc'  => esc_html__( 'Please type your copyright secondary text', 'oktan' ),
						'wp-customizer-args' => array(
							'active_callback' => 'oktan_copyright_secondary_text_is_visible',
						),
					),
					'copyright_logo' => array(
						'type'  => 'upload',
						'value' => '',
						'label' => esc_html__( 'Copyright logo', 'oktan' ),
						'desc'  => esc_html__( 'Appears in certain copyright layouts', 'oktan' ),
						'wp-customizer-args' => array(
							'active_callback' => 'oktan_copyright_logo_is_visible',
						),
					),
				),
			),
			'copyright_section_options' => array(
				'title'   => esc_html__( 'Copyright Section Options', 'oktan' ),
				'options' => oktan_get_section_options_array( 'copyright_' ),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
			'copyright_section_padding' => array(
				'title'   => esc_html__( 'Copyright Section Padding', 'oktan' ),
				'options' => oktan_unyson_option_get_section_padding_array( 'copyright_'),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
		),
	),
	'404_panel'      => array(
		'title' => esc_html__( 'Theme 404 page', 'oktan' ),
		'options' => array(
			'404_section_main_options' => array(
				'title'   => esc_html__( '404 Section Main Options', 'oktan' ),
				'options' => array(
					'404_image_text' => array(
						'type'        => 'upload',
						'value'       => '',
						'label'       => esc_html__( 'Image', 'oktan' ),
						'images_only' => true,
					),
					'404_text'   => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__( 'Text of 404', 'oktan' ),
					),
					'buttons_404' => array(
						'type'          => 'addable-popup',
						'label'         => esc_html__( 'Buttons for 404', 'oktan' ),
						'popup-title'   => esc_html__( 'Buttons', 'oktan' ),
						'desc'          => esc_html__( 'Add buttons for 404', 'oktan' ),

						'popup-options' => array(

							$button_404,


						),
						'template'        => 'Button',
						'limit'           => 2, // limit the number of boxes that can be added
						'add-button-text' => esc_html__( 'Add', 'oktan' ),
						'sortable'        => true,

					)
				),

			),


			'404_section_options' => array(
				'title'   => esc_html__( '404 Section Options', 'oktan' ),
				'options' => oktan_get_section_options_array( '404_', array(
					'columns_padding',
					'columns_vertical_margins',
					'is_align_vertical',
				) ),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
				'image_text' => array(
					'type'        => 'upload',
					'value'       => '',
					'label'       => esc_html__( 'Image', 'oktan' ),
					'images_only' => true,
				),
			),
			'404_section_padding' => array(
				'title'   => esc_html__( '404 Section Padding', 'oktan' ),
				'options' => oktan_unyson_option_get_section_padding_array( '404_'),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
		)
	),
	'fonts_section'        => array(
		'title'   => esc_html__( 'Theme Fonts', 'oktan' ),
		'options' => array(
			'body_fonts_section' => array(
				'title'   => esc_html__( 'Font for body', 'oktan' ),
				'options' => array(
					'body_font_picker_switch' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'picker'  => array(
							'main_font_enabled' => array(
								'type'         => 'switch',
								'value'        => '',
								'label'        => esc_html__( 'Enable', 'oktan' ),
								'desc'         => esc_html__( 'Enable custom body font', 'oktan' ),
								'left-choice'  => array(
									'value' => '',
									'label' => esc_html__( 'Disabled', 'oktan' ),
								),
								'right-choice' => array(
									'value' => 'main_font_options',
									'label' => esc_html__( 'Enabled', 'oktan' ),
								),
							),
						),
						'choices' => array(
							'main_font_options' => array(
								'main_font' => array(
									'type'       => 'typography-v2',
									'value'      => array(
										'family'         => 'Roboto',
										// For standard fonts, instead of subset and variation you should set 'style' and 'weight' like so:
										// 'style' => 'italic',
										// 'weight' => 700,
										'subset'         => 'latin-ext',
										'variation'      => 'regular',
										'size'           => 14,
										'line-height'    => 24,
										'letter-spacing' => 0,
										'color'          => '#0000ff'
									),
									'components' => array(
										'family'         => true,
										// 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
										'size'           => true,
										'line-height'    => true,
										'letter-spacing' => true,
										'color'          => false
									),
									'label'      => esc_html__( 'Custom font', 'oktan' ),
									'desc'       => esc_html__( 'Select custom font for headings', 'oktan' ),
									'help'       => esc_html__( 'You should enable using custom heading fonts above at first', 'oktan' ),
								),
							),
						),
					),
				),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),

			'headings_fonts_section' => array(
				'title'   => esc_html__( 'Font for headings', 'oktan' ),
				'options' => array(
					'h_font_picker_switch' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'picker'  => array(
							'h_font_enabled' => array(
								'type'         => 'switch',
								'value'        => '',
								'label'        => esc_html__( 'Enable', 'oktan' ),
								'desc'         => esc_html__( 'Enable custom heading font', 'oktan' ),
								'left-choice'  => array(
									'value' => '',
									'label' => esc_html__( 'Disabled', 'oktan' ),
								),
								'right-choice' => array(
									'value' => 'h_font_options',
									'label' => esc_html__( 'Enabled', 'oktan' ),
								),
							),
						),
						'choices' => array(
							'h_font_options' => array(
								'h_font' => array(
									'type'       => 'typography-v2',
									'value'      => array(
										'family'         => 'Roboto',
										// For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
										// 'style' => 'italic',
										// 'weight' => 700,
										'subset'         => 'latin-ext',
										'variation'      => 'regular',
										'size'           => 28,
										'line-height'    => '100%',
										'letter-spacing' => 0,
										'color'          => '#0000ff'
									),
									'components' => array(
										'family'         => true,
										// 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
										'size'           => false,
										'line-height'    => false,
										'letter-spacing' => true,
										'color'          => false
									),
									'label'      => esc_html__( 'Custom font', 'oktan' ),
									'desc'       => esc_html__( 'Select custom font for headings', 'oktan' ),
									'help'       => esc_html__( 'You should enable using custom heading fonts above at first', 'oktan' ),
								),
							),
						),
					),
				),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),

		),
	),
	'theme_options_section' => array(
		'title'   => esc_html__( 'Theme Options', 'oktan' ),
		'options' => array(
			'layout_section'       => array(
				'title'   => esc_html__( 'Theme Layout', 'oktan' ),
				'options' => array(
					'layout' => array(
						'type'    => 'multi-picker',
						'value'   => 'wide',
						'attr'    => array( 'class' => 'theme-layout-class', 'data-theme-layout' => 'layout' ),
						'label'   => esc_html__( 'Theme layout', 'oktan' ),
						'desc'    => esc_html__( 'Wide or Boxed layout', 'oktan' ),
						'picker'  => array(
							'boxed' => array(
								'type'         => 'switch',
								'value'        => '',
								'label'        => false,
								'desc'         => false,
								'left-choice'  => array(
									'value' => '',
									'label' => esc_html__( 'Wide', 'oktan' ),
								),
								'right-choice' => array(
									'value' => 'boxed_options',
									'label' => esc_html__( 'Boxed', 'oktan' ),
								),
							),
						),
						'choices' => array(
							'boxed_options' => array(
								'body_background_image' => array(
									'type'        => 'upload',
									'value'       => '',
									'label'       => esc_html__( 'Body background image', 'oktan' ),
									'help'        => esc_html__( 'Choose body background image if needed.', 'oktan' ),
									'images_only' => true,
								),
								'body_cover'            => array(
									'type'         => 'switch',
									'value'        => '',
									'label'        => esc_html__( 'Parallax background', 'oktan' ),
									'desc'         => esc_html__( 'Enable full width background for body', 'oktan' ),
									'left-choice'  => array(
										'value' => '',
										'label' => esc_html__( 'No', 'oktan' ),
									),
									'right-choice' => array(
										'value' => 'yes',
										'label' => esc_html__( 'Yes', 'oktan' ),
									),
								),
								'boxed_extra_margins'            => array(
									'type'         => 'switch',
									'value'        => '',
									'label'        => esc_html__( 'Additional margins', 'oktan' ),
									'desc'         => esc_html__( 'Enable additional margins for boxed container', 'oktan' ),
									'left-choice'  => array(
										'value' => '',
										'label' => esc_html__( 'No', 'oktan' ),
									),
									'right-choice' => array(
										'value' => 'yes',
										'label' => esc_html__( 'Yes', 'oktan' ),
									),
								),
							),
						),

					),
				),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
			'version_section'      => array(
				'title'   => esc_html__( 'Theme Variant', 'oktan' ),
				'options' => array(
					'version' => array(
						'type'    => 'radio',
						'value'   => 'light',
						'attr'    => array( 'class' => 'theme-layout-class', 'data-theme-layout' => 'layout' ),
						'label'   => esc_html__( 'Theme Version', 'oktan' ),
						'desc'    => esc_html__( 'Light or dark version', 'oktan' ),
						'help'    => esc_html__( 'Select one of predefined versions', 'oktan' ),
						'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
							'ls ms' => esc_html__( 'Light', 'oktan' ),
							'ds'  => esc_html__( 'Dark', 'oktan' ),
						),
						// Display choices inline instead of list
						'inline'  => true,
					),
				),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
			'color_scheme_section' => array(
				'title'   => esc_html__( 'Theme Color Scheme', 'oktan' ),
				'options' => array(
					'color_scheme_number' => array(
						'type'    => 'select',
						'value'   => '',
						'label'   => esc_html__( 'Predefined Color scheme', 'oktan' ),
						'desc'    => esc_html__( 'Select one of predefined color schemes number', 'oktan' ),
						'choices' => array(
							''  => '1',
							'2' => '2',
							'3' => '3',
						),
						'blank'   => false, // (optional) if true, image can be deselected
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'accent_color_1' => array(
						'label' => esc_html__( 'Override first color scheme', 'oktan' ),
						'desc'  => esc_html__( 'Accent Color 1', 'oktan' ),
						'help'  => esc_html__( 'This colors are used for regenerate predefined "css/main.css" file with first color scheme. Remove custom color values for reset first color scheme to defaults.', 'oktan' ),
						'type'  => 'color-picker',
						'value' => $current_colors['accent_color_1'],
						'wp-customizer-setting-args' => array(
							'transport' => 'postMessage',
						),
						'wp-customizer-args' => array(
							'active_callback' => 'oktan_wp_scss_is_installed',
						),
					),
					'accent_color_2' => array(
						'label' => false,
						'desc'  => esc_html__( 'Accent Color 2', 'oktan' ),
						'type'  => 'color-picker',
						'value' => $current_colors['accent_color_2'],
						'wp-customizer-setting-args' => array(
							'transport' => 'postMessage',
						),
						'wp-customizer-args' => array(
							'active_callback' => 'oktan_wp_scss_is_installed',
						),
					),
					'accent_color_3' => array(
						'label' => false,
						'desc'  => esc_html__( 'Accent Color 3', 'oktan' ),
						'type'  => 'color-picker',
						'value' => $current_colors['accent_color_3'],
						'wp-customizer-setting-args' => array(
							'transport' => 'postMessage',
						),
						'wp-customizer-args' => array(
							'active_callback' => 'oktan_wp_scss_is_installed',
						),
					),
					'accent_color_4' => array(
						'label' => false,
						'desc'  => esc_html__( 'Accent Color 4', 'oktan' ),
						'type'  => 'color-picker',
						'value' => $current_colors['accent_color_4'],
						'wp-customizer-setting-args' => array(
							'transport' => 'postMessage',
						),
						'wp-customizer-args' => array(
							'active_callback' => 'oktan_wp_scss_is_installed',
						),
					),

				),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
			'blog_section'         => array(
				'title'   => esc_html__( 'Theme Blog Options', 'oktan' ),
				'options' => array(
					'blog_layout' => array(
						'type'    => 'select',
						'value'   => '1',
						'label'   => esc_html__( 'Blog layout', 'oktan' ),
						'desc'    => esc_html__( 'Select one of predefined blog layouts', 'oktan' ),
						'choices' => array(
							'1' => '1',
							'2' => '2',
							'3' => '3',
							'4' => '4',
							'grid' => 'Grid',
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'blog_centered' => array(
						'type'  => 'switch',
						'value' => false,
						'label' => esc_html__('Centered Blog', 'oktan'),
						'left-choice' => array(
							'value' => false,
							'label' => esc_html__(' No', 'oktan'),
						),
						'right-choice' => array(
							'value' => true,
							'label' => esc_html__(' Yes', 'oktan'),
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'blog_hide_categories' => array(
						'type'  => 'switch',
						'value' => false,
						'label' => esc_html__('Hide categories in blog feed', 'oktan'),
						'left-choice' => array(
							'value' => false,
							'label' => esc_html__(' Show', 'oktan'),
						),
						'right-choice' => array(
							'value' => true,
							'label' => esc_html__(' Hide', 'oktan'),
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
                    'blog_hide_tags' => array(
                        'type'  => 'switch',
                        'value' => false,
                        'label' => esc_html__('Hide tags in blog feed', 'oktan'),
                        'left-choice' => array(
                            'value' => false,
                            'label' => esc_html__(' Show', 'oktan'),
                        ),
                        'right-choice' => array(
                            'value' => true,
                            'label' => esc_html__(' Hide', 'oktan'),
                        ),
                        'wp-customizer-args' => array(
                            'active_callback' => '__return_true',
                        ),
                    ),
					'blog_hide_author' => array(
						'type'  => 'switch',
						'value' => false,
						'label' => esc_html__('Hide author in blog feed', 'oktan'),
						'left-choice' => array(
							'value' => false,
							'label' => esc_html__(' Show', 'oktan'),
						),
						'right-choice' => array(
							'value' => true,
							'label' => esc_html__(' Hide', 'oktan'),
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'blog_hide_date' => array(
						'type'  => 'switch',
						'value' => false,
						'label' => esc_html__('Hide date in blog feed', 'oktan'),
						'left-choice' => array(
							'value' => false,
							'label' => esc_html__(' Show', 'oktan'),
						),
						'right-choice' => array(
							'value' => true,
							'label' => esc_html__(' Hide', 'oktan'),
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'blog_hide_comments_link' => array(
						'type'  => 'switch',
						'value' => false,
						'label' => esc_html__('Hide comments link in blog feed', 'oktan'),
						'left-choice' => array(
							'value' => false,
							'label' => esc_html__(' Show', 'oktan'),
						),
						'right-choice' => array(
							'value' => true,
							'label' => esc_html__(' Hide', 'oktan'),
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'blog_slider_switch'       => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'picker'  => array(
							'blog_slider_enabled' => array(
								'type'         => 'switch',
								'value'        => '',
								'label'        => esc_html__( 'Blog slider', 'oktan' ),
								'desc'         => esc_html__( 'Enable slider on blog page', 'oktan' ),
								'left-choice'  => array(
									'value' => '',
									'label' => esc_html__( 'No', 'oktan' ),
								),
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'oktan' ),
								),
							),
						),
						'choices' => array(
							'yes' => array(
								'slider_id' => array(
									'type'    => 'select',
									'value'   => '',
									'label'   => esc_html__( 'Select Slider', 'oktan' ),
									'choices' => $choices_blog_slider
								),
							),
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'blog_posts_widget_switch' => array(
						'type'         => 'switch',
						'value'        => '',
						'label'        => esc_html__( 'Post widget', 'oktan' ),
						'desc'         => esc_html__( 'Enable posts widget on blog page', 'oktan' ),
						'left-choice'  => array(
							'value' => '',
							'label' => esc_html__( 'No', 'oktan' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'oktan' ),
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
				),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
			'preloader_panel'      => array(
				'title' => esc_html__( 'Theme Preloader', 'oktan' ),
				'options' => array(
					'preloader' => array(
						'type'  => 'multi-picker',
						'label' => false,
						'desc'  => false,
						'value' => array(
							'css' => 'css',
						),
						'picker' => array(
							'preloader_type' => array(
								'label'   => esc_html__('Choose preloader type', 'oktan'),
								'type'    => 'select', // or 'short-select'
								'value'   => 'css',
								'choices' => array(
									'css'  => esc_html__('Default', 'oktan'),
									'image' => esc_html__('Default Image', 'oktan'),
									'image_custom' => esc_html__('Custom Image', 'oktan'),
									'disabled' => esc_html__('Disabled', 'oktan'),
								),
								'help'    => esc_html__('You can use default CSS or Image preloader, use your own image or disable preloader', 'oktan'),
							)
						),
						'choices' => array(
							'css'  => array(
								'options' => array(
									'type'  => 'hidden',
									'value' => 'css',
								)
							),
								'image'  => array(
									'options' => array(
									'type'  => 'hidden',
									'value' => 'image',
								),
							),
								'image_custom' => array(
									'options' => array(
									'type'        => 'upload',
									'value'       => '',
									'label'       => esc_html__( 'Custom preloader image', 'oktan' ),
									'help'        => esc_html__( 'GIF image recommended. Recommended maximum preloader width 150px, maximum preloader height 150px.', 'oktan' ),
									'images_only' => true,
								),
							),
								'disabled' => array(
									'options' => array(
									'type'  => 'hidden',
									'value' => false,
								),
							),
						),
						/**
						 * (optional) if is true, the borders between choice options will be shown
						 */
						'show_borders' => false,
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'preloader_custom_class' => array(
						'type' => 'text',
						'label' => esc_html__( 'Additional CSS class', 'oktan' ),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					)
				),
			),
			'share_buttons'   => array(
				'title' => esc_html__( 'Theme Share Buttons', 'oktan' ),

				'options' => array(
					'share_facebook'    => array(
						'type'         => 'switch',
						'value'        => '1',
						'label'        => esc_html__( 'Enable Facebook Share Button', 'oktan' ),
						'left-choice'  => array(
							'value' => '1',
							'label' => esc_html__( 'Enabled', 'oktan' ),
						),
						'right-choice' => array(
							'value' => '0',
							'label' => esc_html__( 'Disabled', 'oktan' ),
						),
					),
					'share_twitter'     => array(
						'type'         => 'switch',
						'value'        => '1',
						'label'        => esc_html__( 'Enable Twitter Share Button', 'oktan' ),
						'left-choice'  => array(
							'value' => '1',
							'label' => esc_html__( 'Enabled', 'oktan' ),
						),
						'right-choice' => array(
							'value' => '0',
							'label' => esc_html__( 'Disabled', 'oktan' ),
						),
					),
					'share_google_plus' => array(
						'type'         => 'switch',
						'value'        => '1',
						'label'        => esc_html__( 'Enable Google+ Share Button', 'oktan' ),
						'left-choice'  => array(
							'value' => '1',
							'label' => esc_html__( 'Enabled', 'oktan' ),
						),
						'right-choice' => array(
							'value' => '0',
							'label' => esc_html__( 'Disabled', 'oktan' ),
						),
					),
					'share_pinterest'   => array(
						'type'         => 'switch',
						'value'        => '1',
						'label'        => esc_html__( 'Enable Pinterest Share Button', 'oktan' ),
						'left-choice'  => array(
							'value' => '1',
							'label' => esc_html__( 'Enabled', 'oktan' ),
						),
						'right-choice' => array(
							'value' => '0',
							'label' => esc_html__( 'Disabled', 'oktan' ),
						),
					),
					'share_linkedin'    => array(
						'type'         => 'switch',
						'value'        => '1',
						'label'        => esc_html__( 'Enable LinkedIn Share Button', 'oktan' ),
						'left-choice'  => array(
							'value' => '1',
							'label' => esc_html__( 'Enabled', 'oktan' ),
						),
						'right-choice' => array(
							'value' => '0',
							'label' => esc_html__( 'Disabled', 'oktan' ),
						),
					),
					'share_tumblr'      => array(
						'type'         => 'switch',
						'value'        => '1',
						'label'        => esc_html__( 'Enable Tumblr Share Button', 'oktan' ),
						'left-choice'  => array(
							'value' => '1',
							'label' => esc_html__( 'Enabled', 'oktan' ),
						),
						'right-choice' => array(
							'value' => '0',
							'label' => esc_html__( 'Disabled', 'oktan' ),
						),
					),
					'share_reddit'      => array(
						'type'         => 'switch',
						'value'        => '1',
						'label'        => esc_html__( 'Enable Reddit Share Button', 'oktan' ),
						'left-choice'  => array(
							'value' => '1',
							'label' => esc_html__( 'Enabled', 'oktan' ),
						),
						'right-choice' => array(
							'value' => '0',
							'label' => esc_html__( 'Disabled', 'oktan' ),
						),
					),
				),
				'wp-customizer-args' => array(
					'active_callback' => 'oktan_shared_buttons_options_is_visible',
				),
			),
		),
	),
);