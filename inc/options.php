<?php

//Main theme options class
class Oktan_Options {
	public $self;
	public $customizer_options;
	public $default_fonts_array;

	public function __construct() {

		//singleton
		if( $this->self ) {
			return $this->self;
		} else {
			$this->self = $this;
		}

		//set default fonts property
		$this->default_fonts_array = $this->set_default_fonts_array();

		//all customizer options here
		//default values needs for theme without unyson istalled
		$default_options = $this->get_default_options_array();
		$customizer_options = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option() : array();

		//additional option array keys that we are using in theme for check
			//if Unyson installed
			$customizer_options['fw'] = defined( 'FW' ) ? true : false;
			//if WooCommerce installed
			$customizer_options['woo'] = class_exists( 'WooCommerce' ) ? true : false;

		//customizer options overwriting default options
		$this->customizer_options = wp_parse_args( $customizer_options, $default_options );
	}

	//get option value from whole options array
	public function get_customizer_option( $option_name, $default_value = '' ) {
		return ( !empty( $this->customizer_options[$option_name] ) ) ? $this->customizer_options[$option_name] : $default_value;
	}

	//theme default fonts for include
	public function set_default_fonts_array() {
		//put default google fonts here
		return array(
			'Work Sans' => array(
				'google_font'    => true,
				'subset'         => 'latin-ext',
				'variation'      => '500',
				'variants'       => array( '200', '500', '600' ),
				'family'         => 'Work Sans',
				'style'          => false,
				'weight'         => false,
				'size'           => '16',
				'line-height'    => '24',
				'letter-spacing' => '0',
				'color'          => false,
			),
			'Poppins' => array(
				'google_font'    => true,
				'subset'         => 'latin-ext',
				'variation'      => '300',
				'variants'       => array( '200','300','300i','400','500','700','900' ),
				'family'         => 'Poppins',
				'style'          => false,
				'weight'         => false,
				'size'           => '16',
				'line-height'    => '24',
				'letter-spacing' => '0',
				'color'          => false,
			),
		);
	}

	//theme default configuration options
	//need do var_export($options) in header.php and put result array here with default values
	public function get_default_options_array() {
		return array (
			'logo_image' =>
				array (
				),
			'logo_text' => 'oktan',
			'logo_image_breadcrumbs' =>
				array (
				),
			'page_header' => '1',
			'header_is_fluid' => true,
			'header_background_color' => 'ds bg-transparent',
			'header_background_image' => '',
			'header_background_cover' => false,
			'header_parallax' => false,
			'header_background_overlay' => true,
			'header_background_overlay_mobile' => false,
			'header_background_gradientradial' => false,
			'header_border_top' => '',
			'header_border_bottom' => '',
			'header_section_class' => '',
			'header_section_id' => '',
			'topline_is_fluid' => false,
			'topline_background_color' => 'ls',
			'topline_background_image' => '',
			'topline_background_cover' => false,
			'topline_parallax' => false,
			'topline_background_overlay' => false,
			'topline_background_overlay_mobile' => false,
			'topline_background_gradientradial' => false,
			'topline_border_top' => '',
			'topline_border_bottom' => 's-borderbottom',
			'topline_section_class' => '',
			'topline_section_id' => '',
			'toplogo_is_fluid' => false,
			'toplogo_background_color' => 'ls',
			'toplogo_background_image' => '',
			'toplogo_background_cover' => false,
			'toplogo_parallax' => false,
			'toplogo_background_overlay' => false,
			'toplogo_background_overlay_mobile' => false,
			'toplogo_background_gradientradial' => false,
			'toplogo_border_top' => '',
			'toplogo_border_bottom' => '',
			'toplogo_section_class' => '',
			'toplogo_section_id' => '',
			'page_title' => '1',
			'hide_term_title' => true,
			'title_is_fluid' => false,
			'title_background_color' => 'ds',
			'title_top_padding' => 's-pt-60',
			'title_bottom_padding' => 's-pb-60',
			'title_background_image' => '',
			'title_background_cover' => true,
			'title_parallax' => true,
			'title_background_overlay' => false,
			'title_background_overlay_mobile' => false,
			'title_background_gradientradial' => false,
			'title_border_top' => '',
			'title_border_bottom' => '',
			'title_section_class' => '',
			'title_section_id' => '',
			'page_footer' => '1',
			'footer_is_fluid' => false,
			'footer_background_color' => 'ds',
			'footer_top_padding' => 's-pt-60',
			'footer_bottom_padding' => 's-pb-60',
			'footer_columns_padding' => 'c-gutter-100',
			'footer_columns_vertical_margins' => '',
			'footer_background_image' => '',
			'footer_background_cover' => false,
			'footer_parallax' => false,
			'footer_background_overlay' => false,
			'footer_background_overlay_mobile' => false,
			'footer_background_gradientradial' => false,
			'footer_border_top' => '',
			'footer_border_bottom' => '',
			'footer_is_align_vertical' => false,
			'footer_section_class' => '',
			'footer_section_id' => '',
			'page_copyright' => '1',
			'copyright_text' => '© Copyright 2019 All Rights Reserved',
			'copyright_is_fluid' => false,
			'copyright_background_color' => 'ds ms',
			'copyright_top_padding' => 's-pt-25',
			'copyright_bottom_padding' => 's-pb-25',
			'copyright_columns_padding' => '',
			'copyright_columns_vertical_margins' => '',
			'copyright_background_image' => '',
			'copyright_background_cover' => false,
			'copyright_parallax' => false,
			'copyright_background_overlay' => false,
			'copyright_background_overlay_mobile' => false,
			'copyright_background_gradientradial' => false,
			'copyright_border_top' => '',
			'copyright_border_bottom' => '',
			'copyright_is_align_vertical' => false,
			'copyright_section_class' => '',
			'copyright_section_id' => '',
			'body_font_picker_switch' =>
				array (
					'main_font_enabled' => '',
					'main_font_options' =>
						array (
							'main_font' =>
								array (
									'google_font' => true,
									'subset' => 'latin-ext',
									'variation' => 'regular',
									'family' => 'Roboto',
									'style' => false,
									'weight' => false,
									'size' => 14,
									'line-height' => 24,
									'letter-spacing' => 0,
									'color' => false,
								),
						),
				),
			'h_font_picker_switch' =>
				array (
					'h_font_enabled' => '',
					'h_font_options' =>
						array (
							'h_font' =>
								array (
									'google_font' => true,
									'subset' => 'latin-ext',
									'variation' => 'regular',
									'family' => 'Roboto',
									'style' => false,
									'weight' => false,
									'size' => false,
									'line-height' => false,
									'letter-spacing' => 0,
									'color' => false,
								),
						),
				),
			'meta_phone' => '800 123 4567',
			'meta_email' => '',
			'social_icons' => '',
			'layout' =>
				array (
					'boxed' => '',
					'boxed_options' =>
						array (
							'body_background_image' => '',
							'body_cover' => '',
							'boxed_extra_margins' => '',
						),
				),
			'version' => 'ls ms',
			'color_scheme_number' => '',
			'accent_color_1' => '',
			'accent_color_2' => '',
			'accent_color_3' => '',
			'accent_color_4' => '',
			'blog_slider_switch' =>
				array (
					'blog_slider_enabled' => '',
					'yes' =>
						array (
							'slider_id' => '',
						),
				),
			'blog_posts_widget_switch' => '',
			'preloader' =>
				array (
					'preloader_type' => 'css',
					'css' => 'css',
					'image' =>
						array (
							'options' => 'image',
						),
					'image_custom' =>
						array (
							'options' => '',
						),
					'disabled' =>
						array (
							'options' => '',
						),
				),
			'preloader_custom_class' => '',
			'meta_address' => '',
			'copyright_text2' => 'Theme: Oktan',
			'copyright_logo' => '',
			'blog_layout' => '1',
			'blog_hide_categories' => false,
			'blog_hide_author' => false,
			'blog_hide_date' => false,
			'blog_hide_comments_link' => false,


			'404_text' => '',
			'404_top_padding' => 's-pt-60',
			'404_bottom_padding' => 's-pb-60',
			'404_top_padding_md' => 's-pt-md-90',
			'404_bottom_padding_md' => 's-pb-md-90',
			'404_top_padding_lg' => 's-pt-lg-160',
			'404_bottom_padding_lg' => 's-pb-lg-160',
			'404_top_padding_xl' => 's-pt-xl-180',
			'404_bottom_padding_xl' => 's-pb-xl-180',
			'logo_subtext' => 'oil & gas industry',

			'title_background_blur' => true,
			'footer_top_padding_md' => 's-pt-md-90',
			'footer_bottom_padding_md' => 's-pb-md-90',
			'footer_top_padding_lg' => 's-pt-lg-130',
			'footer_bottom_padding_lg' => 's-pb-lg-130',
			'footer_top_padding_xl' => 's-pt-xl-160',
			'footer_bottom_padding_xl' => 's-pb-xl-160',
			'blog_hide_tags' => false,
			'logo_image_inverse' =>
				array (
					'attachment_id' => '452',
					'url' => OKTAN_THEME_URI.'/img/logo.png',
				),
			'header_show_all_menu_items' => false,
			'header_disable_affix_xl' => false,
			'header_disable_affix_xs' => false,
			'title_top_padding_sm' => '',
			'title_bottom_padding_sm' => '',
			'title_top_padding_md' => 's-pt-md-90',
			'title_bottom_padding_md' => 's-pb-md-90',
			'title_top_padding_lg' => 's-pt-lg-90',
			'title_bottom_padding_lg' => 's-pb-lg-90',
			'title_top_padding_xl' => 's-pt-xl-90',
			'title_bottom_padding_xl' => 's-pb-xl-90',
			'footer_top_padding_sm' => '',
			'footer_bottom_padding_sm' => '',
			'copyright_top_padding_sm' => '',
			'copyright_bottom_padding_sm' => '',
			'copyright_top_padding_md' => '',
			'copyright_bottom_padding_md' => '',
			'copyright_top_padding_lg' => '',
			'copyright_bottom_padding_lg' => '',
			'copyright_top_padding_xl' => '',
			'copyright_bottom_padding_xl' => '',
			'404_is_fluid' => false,
			'404_background_color' => 'ls ms',
			'404_background_image' => '',
			'404_background_cover' => false,
			'404_parallax' => false,
			'404_background_overlay' => false,
			'404_background_overlay_mobile' => false,
			'404_background_gradientradial' => false,
			'404_border_top' => '',
			'404_border_bottom' => '',
			'404_section_class' => '',
			'404_section_id' => '',
			'404_top_padding_sm' => '',
			'404_bottom_padding_sm' => '',
			'share_facebook' => '1',
			'share_twitter' => '1',
			'share_google_plus' => '1',
			'share_pinterest' => '1',
			'share_linkedin' => '1',
			'share_tumblr' => '1',
			'share_reddit' => '1',
			'fw' => true,
			'woo' => true,
			'hide_popup' => true,
			'blog_centered' => false,
		);
	}
}


///////////////////
//options helpers//
///////////////////
if ( !function_exists( 'oktan_get_options' ) ) :
	/**
	 * Get all theme options in one array
	 * @return array
	 */
	function oktan_get_options() {
		$options = new Oktan_Options();
		$options = $options->customizer_options;
		//check if unyson installed - push 'fw' key to true
		return $options;
	}
endif; //oktan_get_options

if ( !function_exists( 'oktan_get_option' ) ) :
	/**
	 * Get single option
	 * @param $option_name
	 * @param string $default_value
	 *
	 * @return mixed|string
	 */
	function oktan_get_option( $option_name, $default_value = '' ) {
		// $option_value = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( $option_name ) : $default_value;
		$options = new Oktan_Options();
		$option_value = $options->get_customizer_option( $option_name, $default_value );
		return $option_value;
	}
endif; //oktan_get_option


if ( !function_exists( 'oktan_get_default_section_option_value' ) ) :
	/**
	 * Get default section option value for customizer options
	 * used in oktan_get_section_options_array
	 * @param string $option_name
	 * @param string $default_value
	 *
	 * @return mixed|string
	 */
	function oktan_get_default_section_option_value( $option_name, $default_value = '' ) {
		$options_class = new Oktan_Options();
		$defaults = $options_class->get_default_options_array();
		$option_value = ( !empty ( $defaults[$option_name] ) ) ? $defaults[$option_name] : $default_value;
		return $option_value;
	}
endif; //oktan_get_default_section_option_value

if ( !function_exists( 'oktan_get_switch_option_type' ) ) :
function oktan_get_switch_option_type( $switch_array, $option_name, $value = false ) {
	$value = oktan_get_default_section_option_value( $option_name, $value );

	return array_merge($switch_array, array(
		'value' => $value,
		'left-choice' => array(
			'value' => false,
			'label' => esc_html__('No', 'oktan'),
			'color' => '', // #HEX
		),
		'right-choice' => array(
			'value' => true,
			'label' => esc_html__('Yes', 'oktan'),
			'color' => '', // #HEX
		),
	) );
}
endif; //oktan_get_switch_option_type

//section options array for any section
if ( !function_exists( 'oktan_get_section_options_array' ) ) :
	/**
	 * Get any section options
	 * @param string $prefix
	 * @param array $excluded_keys
	 *
	 * @return array
	 */
	function oktan_get_section_options_array( $prefix = '', $excluded_keys = array() ) {

		$options = array(
			$prefix . 'is_fluid' => oktan_get_switch_option_type( array(
					'label' => esc_html__( 'Full Width', 'oktan' ),
					'type'  => 'switch',
				), $prefix . 'is_fluid'
			),
			$prefix . 'background_color' => array(
				'type'    => 'select',
				'value'   => oktan_get_default_section_option_value( $prefix . 'background_color', 'ls' ),
				'label'   => esc_html__( 'Background color', 'oktan' ),
				'help'    => esc_html__( 'Select one of predefined background colors',
					'oktan' ),
				'choices' => array(
					'ls'     => esc_html__( 'Light', 'oktan' ),
					'ls ms'  => esc_html__( 'Light Grey', 'oktan' ),
					'ds'     => esc_html__( 'Dark Grey', 'oktan' ),
					'ds ms'  => esc_html__( 'Dark Muted', 'oktan' ),
                    'ds bg-transparent'  => esc_html__( 'Dark Transparent', 'oktan' ),
					'cs'     => esc_html__( 'Main color', 'oktan' ),
					'cs cs2' => esc_html__( 'Second Main color', 'oktan' ),
				),
			),

			//100 80 60 50 30 25 20 15 10 5 2 1 0
			$prefix . 'columns_padding'  => array(
				'type'    => 'select',
				'value'   => oktan_get_default_section_option_value($prefix . 'columns_padding', '' ),
				'label'   => esc_html__( 'Columns gutter (padding)', 'oktan' ),
				'help'    => esc_html__( 'Choose columns horizontal padding value (gutter)',
					'oktan' ),
				'choices' => array(
					'' => esc_html__( 'Inherited - default', 'oktan' ),
					'c-gutter-0'  => esc_html__( '0', 'oktan' ),
					'c-gutter-1'  => esc_html__( '1px', 'oktan' ),
					'c-gutter-2'  => esc_html__( '2px', 'oktan' ),
					'c-gutter-5'  => esc_html__( '5px', 'oktan' ),
					'c-gutter-10' => esc_html__( '10px', 'oktan' ),
					'c-gutter-20' => esc_html__( '20px', 'oktan' ),
					'c-gutter-25' => esc_html__( '25px', 'oktan' ),
					'c-gutter-30' => esc_html__( '30px', 'oktan' ),
					'c-gutter-50' => esc_html__( '50px', 'oktan' ),
					'c-gutter-60' => esc_html__( '60px', 'oktan' ),
					'c-gutter-80' => esc_html__( '80px', 'oktan' ),
					'c-gutter-100' => esc_html__( '100px', 'oktan' ),
				),
			),
			//0 1 2 5 10 15 20 25 30 40 50 60
			$prefix . 'columns_vertical_margins'  => array(
				'type'    => 'select',
				'value'   => oktan_get_default_section_option_value( $prefix . 'columns_vertical_margins', '' ),
				'label'   => esc_html__( 'Column vertical margins', 'oktan' ),
				'help'    => esc_html__( 'Choose columns vertical margins value',
					'oktan' ),
				'choices' => array(
					''  => esc_html__( 'Top and bottom: 0 - default ', 'oktan' ),
					'c-my-1'  => esc_html__( 'Top and bottom: 1px', 'oktan' ),
					'c-my-2'  => esc_html__( 'Top and bottom: 2px', 'oktan' ),
					'c-my-5'  => esc_html__( 'Top and bottom: 5px', 'oktan' ),
					'c-my-10' => esc_html__( 'Top and bottom: 10px', 'oktan' ),
					'c-my-15' => esc_html__( 'Top and bottom: 15px', 'oktan' ),
					'c-my-20' => esc_html__( 'Top and bottom: 20px', 'oktan' ),
					'c-my-25' => esc_html__( 'Top and bottom: 25px', 'oktan' ),
					'c-my-30' => esc_html__( 'Top and bottom: 30px', 'oktan' ),
					'c-my-40' => esc_html__( 'Top and bottom: 30px', 'oktan' ),
					'c-my-50' => esc_html__( 'Top and bottom: 50px', 'oktan' ),
					'c-my-60' => esc_html__( 'Top and bottom: 60px', 'oktan' ),
					'c-mb-1'  => esc_html__( 'Bottom: 1px', 'oktan' ),
					'c-mb-2'  => esc_html__( 'Bottom: 2px', 'oktan' ),
					'c-mb-5'  => esc_html__( 'Bottom: 5px', 'oktan' ),
					'c-mb-10' => esc_html__( 'Bottom: 10px', 'oktan' ),
					'c-mb-15' => esc_html__( 'Bottom: 15px', 'oktan' ),
					'c-mb-20' => esc_html__( 'Bottom: 20px', 'oktan' ),
					'c-mb-25' => esc_html__( 'Bottom: 25px', 'oktan' ),
					'c-mb-30' => esc_html__( 'Bottom: 30px', 'oktan' ),
					'c-mb-40' => esc_html__( 'Bottom: 30px', 'oktan' ),
					'c-mb-50' => esc_html__( 'Bottom: 50px', 'oktan' ),
					'c-mb-60' => esc_html__( 'Bottom: 60px', 'oktan' ),
					'c-mt-1'  => esc_html__( 'Top: 1px', 'oktan' ),
					'c-mt-2'  => esc_html__( 'Top: 2px', 'oktan' ),
					'c-mt-5'  => esc_html__( 'Top: 5px', 'oktan' ),
					'c-mt-10' => esc_html__( 'Top: 10px', 'oktan' ),
					'c-mt-15' => esc_html__( 'Top: 15px', 'oktan' ),
					'c-mt-20' => esc_html__( 'Top: 20px', 'oktan' ),
					'c-mt-25' => esc_html__( 'Top: 25px', 'oktan' ),
					'c-mt-30' => esc_html__( 'Top: 30px', 'oktan' ),
					'c-mt-40' => esc_html__( 'Top: 30px', 'oktan' ),
					'c-mt-50' => esc_html__( 'Top: 50px', 'oktan' ),
					'c-mt-60' => esc_html__( 'Top: 60px', 'oktan' ),
				),
			),
			$prefix . 'background_image' => array(
				'label'   => esc_html__( 'Background Image', 'oktan' ),
				'help'    => esc_html__( 'Choose the background image for section', 'oktan' ),
				'type'    => 'background-image',
				'choices' => array(//	in future may will set predefined images
				)
			),
			$prefix . 'background_cover' => oktan_get_switch_option_type( array(
					'label' => esc_html__( 'Background Cover', 'oktan' ),
					'desc'    => esc_html__( 'Stretch the image', 'oktan' ),
					'help'    => esc_html__( 'Adds "background-size:cover" CSS rule', 'oktan' ),
					'type'  => 'switch'
				), $prefix . 'background_cover'
			),
			$prefix . 'parallax'  => oktan_get_switch_option_type( array(
				'label' => esc_html__( 'Parallax', 'oktan' ),
				'help'    => esc_html__( 'Adds background parallax effect on section background image', 'oktan' ),
				'type'  => 'switch',
				),
				$prefix . 'parallax'

			),
			$prefix . 'background_overlay' => oktan_get_switch_option_type( array(
				'label' => esc_html__( 'Background Color Overlay', 'oktan' ),
				'help'    => esc_html__( 'Adds semitransparent color overlay on section', 'oktan' ),
				'type'  => 'switch',
				),
				$prefix . 'background_overlay'

			),
			$prefix . 'background_overlay_mobile' => oktan_get_switch_option_type( array(
				'label' => esc_html__( 'Background Color Overlay on mobile', 'oktan' ),
				'help'    => esc_html__( 'Adds semitransparent color overlay on section', 'oktan' ),
				'type'  => 'switch',
			),
				$prefix . 'background_overlay_mobile'

			),
			$prefix . 'background_gradientradial' => oktan_get_switch_option_type( array(
				'label' => esc_html__( 'Background Radial Overlay', 'oktan' ),
				'help'    => esc_html__( 'Adds semitransparent light radial overlay on section', 'oktan' ),
				'type'  => 'switch',
				),
				$prefix . 'background_gradientradial'
			),
			$prefix . 'border_top'      => array(
				'type'    => 'select',
				'value'   => oktan_get_default_section_option_value( $prefix . 'border_top', '' ),
				'label'   => esc_html__( 'Top border', 'oktan' ),
				'desc'    => esc_html__( 'Will be hidden if overlay option is used','oktan' ),
				'help'    => esc_html__( 'Top border will be hidden if overlay option is used', 'oktan' ),
				'choices' => array(
					''   => esc_html__( 'None', 'oktan' ),
					's-bordertop'   => esc_html__( 'Full Width','oktan' ),
					's-bordertop-container'  => esc_html__( 'Container Width', 'oktan' ),
				),
			),
			$prefix . 'border_bottom'      => array(
				'type'    => 'select',
				'value'   => oktan_get_default_section_option_value( $prefix . 'border_bottom' ,'' ),
				'label'   => esc_html__( 'Bottom border', 'oktan' ),
				'choices' => array(
					''   => esc_html__( 'None', 'oktan' ),
					's-borderbottom'   => esc_html__( 'Full Width','oktan' ),
					's-borderbottom-container'  => esc_html__( 'Container Width', 'oktan' ),
				),
			),
			$prefix . 'is_align_vertical'  => oktan_get_switch_option_type( array(
				'label' => esc_html__( 'Vertical align content', 'oktan' ),
				'help'  => esc_html__( 'Align columns content vertically on wide screens', 'oktan' ),
				'type'  => 'switch',
				),
				$prefix . 'is_align_vertical'

			),
			$prefix . 'section_class' => array(
				'type'  => 'text',
				'value' => oktan_get_default_section_option_value( $prefix . 'section_class', '' ),
				'label' => esc_html__( 'Additional CSS class', 'oktan' ),
				'desc'  => esc_html__( 'Add your custom CSS class to section. Useful for Customization', 'oktan' ),
			),
			$prefix . 'section_id' => array(
				'type'  => 'text',
				'value' => oktan_get_default_section_option_value( $prefix . 'section_id', '' ),
				'label' => esc_html__( 'ID attribute', 'oktan' ),
				'desc'  => esc_html__( 'Add ID attribute to section. Useful for single page menu', 'oktan' ),
			),
		);

		if ( $excluded_keys ) {
			foreach ( $excluded_keys as $key ) {
				unset( $options[$prefix . $key] );
			}
		}

		return $options;
	}
endif; //oktan_get_section_options_array

//prepare section HTML attributes
if ( !function_exists( 'oktan_get_section_options' ) ) :
	/**
	 * Prepare section HTML attributes
	 * @param array $options
	 * @param string $prefix
	 *
	 * @return array
	 */
	function oktan_get_section_options( $options, $prefix = '') {
		//$options values that contains CSS class
		$section_class_values = array(
			$prefix . 'background_color'         => $prefix . 'background_color',
			$prefix . 'top_padding'              => $prefix . 'top_padding',
			$prefix . 'bottom_padding'           => $prefix . 'bottom_padding',
			$prefix . 'columns_padding'          => $prefix . 'columns_padding',
			$prefix . 'columns_vertical_margins' => $prefix . 'columns_vertical_margins',
			$prefix . 'border_top'               => $prefix . 'border_top',
			$prefix . 'border_bottom'            => $prefix . 'border_bottom',
			$prefix . 'columns_vertical_margins' => $prefix . 'columns_vertical_margins',
			$prefix . 'section_class'            => $prefix . 'section_class',
			//responsive options
			$prefix . 'hidden_xs'                => $prefix . 'hidden_xs',
			$prefix . 'hidden_sm'                => $prefix . 'hidden_sm',
			$prefix . 'hidden_md'                => $prefix . 'hidden_md',
			$prefix . 'hidden_lg'                => $prefix . 'hidden_lg',
			$prefix . 'hidden_xl'                => $prefix . 'hidden_xl',
			$prefix . 'top_padding_sm'           => $prefix . 'top_padding_sm',
			$prefix . 'bottom_padding_sm'        => $prefix . 'bottom_padding_sm',
			$prefix . 'top_padding_md'           => $prefix . 'top_padding_md',
			$prefix . 'bottom_padding_md'        => $prefix . 'bottom_padding_md',
			$prefix . 'top_padding_lg'           => $prefix . 'top_padding_lg',
			$prefix . 'bottom_padding_lg'        => $prefix . 'bottom_padding_lg',
			$prefix . 'top_padding_xl'           => $prefix . 'top_padding_xl',
			$prefix . 'bottom_padding_xl'        => $prefix . 'bottom_padding_xl',
		);

		//array with section attributes
		$array = array(
			'section_class' => '',
			'section_container_class_suffix' => '',
			'section_row_class_suffix' => '',
			'section_id' => '',
			'section_background_image' => '',
		);

		//skip top border if color overlay or radial gradient is active
		if( !empty( $options[$prefix . 'background_overlay'] ) || !empty( $options[$prefix . 'background_gradientradial'] ) ) {
			unset( $section_class_values[$prefix . 'border_top'] );
		}

		//if background is set for absolute header - making topline, toplogo, header and title section with same background
		if(
			( $prefix === 'topline_' || $prefix === 'toplogo_' || $prefix === 'header_' )
			&&
			( !empty( $options['header_absolute']['enabled'] ) )
		) {
			$options[$prefix . 'background_color'] = $options['header_absolute']['yes']['header_absolute_background_color'];
		}

		//if is page and Unyson is installed - overriding global header and footer options from page settings
		if	( is_page() )  {
			if( $prefix === 'header_' && function_exists( 'fw_get_db_post_option' ) ) {
				$page_options = fw_get_db_post_option( get_the_ID(), 'header_page' );
				if ( ! empty( $page_options['header_page_styles'] ) ) {
					$options = array_merge( $options, $page_options['header_page_custom_styles'] );
				}
			}
			if( $prefix === 'footer_' && function_exists( 'fw_get_db_post_option' ) ) {
				$page_options = fw_get_db_post_option( get_the_ID(), 'footer_page' );
				if ( ! empty( $page_options['footer_page_styles'] ) ) {
					$options = array_merge( $options, $page_options['footer_page_custom_styles'] );
				}
			}
		}

		//building CSS class
		foreach ( $options as $key => $value ) {
			if( in_array( $key, $section_class_values ) ) {
				$array['section_class'] .= ' ' . $value;
			}
		}

		//additional CSS classes
		$array['section_class'] .= ( !empty( $options[$prefix . 'parallax'] ) ) ? ' s-parallax' : '';
		$array['section_class'] .= ( !empty( $options[$prefix . 'background_cover'] ) ) ? ' cover-background' : '';
		$array['section_class'] .= ( !empty( $options[$prefix . 'background_overlay'] ) ) ? ' s-overlay' : '';
		$array['section_class'] .= ( !empty( $options[$prefix . 'background_overlay_mobile'] ) ) ? ' s-overlay mobile-overlay' : '';
		$array['section_class'] .= ( !empty( $options[$prefix . 'background_gradientradial'] ) ) ? ' gradientradial-background' : '';

		//container CSS class
		$array['section_container_class_suffix'] .= ( !empty( $options[$prefix . 'is_fluid'] ) ) ? '-fluid' : '';

		//row CSS class
		$array['section_row_class_suffix'] .= ( !empty( $options[$prefix . 'is_align_vertical'] ) ) ? ' align-items-center' : '';

		//ID attribute
		$array['section_id'] .= ( !empty( $options[$prefix . 'section_id'] ) ) ? $options[$prefix . 'section_id'] : '';

		//bg image
		if ( !empty( $options[$prefix . 'background_image'] ) && !empty( $options[$prefix . 'background_image']['data']['icon'] ) ) {
			$array['section_background_image'] = 'background-image:url(' . $options[$prefix . 'background_image']['data']['icon'] . ');';
		}

		return $array;
	}
endif; //oktan_get_section_options


//default padding values that are set in variables_template SCSS file
if ( !function_exists( 'oktan_unyson_option_section_padding_choices ' ) ) :
	function oktan_unyson_option_section_padding_choices ( $prefix = '' ) {
		//see _variables_template.scss
		$padding_values = array( 0, 1, 2,3, 5, 10, 11, 12, 15, 17, 20, 23, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 105, 110, 115, 120, 125, 130, 135, 140, 145, 147, 150, 155, 157, 160, 165, 170, 180, 195, 200, 205, 210, 230, 250, 280);
		$breakpoins = array('xs', 'sm', 'md', 'lg', 'xl');

		$array = array( '' => esc_html__( 'Inherit', 'oktan' ) );
		foreach ( $padding_values as $value ) {
			$array[ $prefix . $value ] = esc_html__( $value . 'px', 'oktan' );
		}
		return $array;
	}
endif; //oktan_unyson_option_section_padding_choices


//section paddings


//background options
if ( !function_exists( 'oktan_unyson_option_get_section_padding_array' ) ) :
	function oktan_unyson_option_get_section_padding_array( $prefix = '' ) {
		return array(
			//see _variables_template.scss
			//0 1 2 3 5 10 15 20 25 30 50 60 75 100 130
			$prefix . 'top_padding'      => array(
				'type'    => 'select',
				'value'   => oktan_get_default_section_option_value($prefix . 'top_padding', 's-pt-50' ),
				'label'   => esc_html__( 'Top padding', 'oktan' ),
				'help'    => esc_html__( 'Choose top padding value for section',
					'oktan' ),
				'choices' => oktan_unyson_option_section_padding_choices( 's-pt-' ),
			),
			$prefix . 'bottom_padding'   => array(
				'type'    => 'select',
				'value'   => oktan_get_default_section_option_value( $prefix . 'bottom_padding', 's-pb-50' ),
				'label'   => esc_html__( 'Bottom padding', 'oktan' ),
				'help'    => esc_html__( 'Choose bottom padding value for section',
					'oktan' ),
				'choices' => oktan_unyson_option_section_padding_choices( 's-pb-' ),
			),
			$prefix . 'top_padding_sm' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Top padding above 576px screen', 'oktan' ),
				'help'    => esc_html__( 'Choose top padding value for section',
					'oktan' ),
				'choices' => oktan_unyson_option_section_padding_choices( 's-pt-sm-' ),
			),
			$prefix . 'bottom_padding_sm' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Bottom padding above 576px screen', 'oktan' ),
				'help'    => esc_html__( 'Choose bottom padding value for section',
					'oktan' ),
				'choices' => oktan_unyson_option_section_padding_choices( 's-pb-sm-' ),
			),
			$prefix . 'top_padding_md' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Top padding above 768px screen', 'oktan' ),
				'help'    => esc_html__( 'Choose top padding value for section',
					'oktan' ),
				'choices' => oktan_unyson_option_section_padding_choices( 's-pt-md-' ),
			),
			$prefix . 'bottom_padding_md' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Bottom padding above 768px screen', 'oktan' ),
				'help'    => esc_html__( 'Choose bottom padding value for section',
					'oktan' ),
				'choices' => oktan_unyson_option_section_padding_choices( 's-pb-md-' ),
			),
			$prefix . 'top_padding_lg' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Top padding above 992px screen', 'oktan' ),
				'help'    => esc_html__( 'Choose top padding value for section',
					'oktan' ),
				'choices' => oktan_unyson_option_section_padding_choices( 's-pt-lg-' ),
			),
			$prefix . 'bottom_padding_lg' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Bottom padding above 992px screen', 'oktan' ),
				'help'    => esc_html__( 'Choose bottom padding value for section',
					'oktan' ),
				'choices' => oktan_unyson_option_section_padding_choices( 's-pb-lg-' ),
			),
			$prefix . 'top_padding_xl' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Top padding above 1200px screen', 'oktan' ),
				'help'    => esc_html__( 'Choose top padding value for section',
					'oktan' ),
				'choices' => oktan_unyson_option_section_padding_choices( 's-pt-xl-' ),
			),
			$prefix . 'bottom_padding_xl' => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Bottom padding above 1200px screen', 'oktan' ),
				'help'    => esc_html__( 'Choose bottom padding value for section',
					'oktan' ),
				'choices' => oktan_unyson_option_section_padding_choices( 's-pb-xl-' ),
			),
		);
	}
endif; //oktan_unyson_option_get_section_padding_array



//animations
if ( !function_exists( 'oktan_unyson_option_animations' ) ) :
	function oktan_unyson_option_animations() {
		return array(
			''               => esc_html__( 'None', 'oktan' ),
			'slideDown'      => esc_html__( 'slideDown', 'oktan' ),
			'scaleAppear'    => esc_html__( 'scaleAppear', 'oktan' ),
			'fadeInLeft'     => esc_html__( 'fadeInLeft', 'oktan' ),
			'fadeInUp'       => esc_html__( 'fadeInUp', 'oktan' ),
			'fadeInRight'    => esc_html__( 'fadeInRight', 'oktan' ),
			'fadeInDown'     => esc_html__( 'fadeInDown', 'oktan' ),
			'fadeIn'         => esc_html__( 'fadeIn', 'oktan' ),
			'slideRight'     => esc_html__( 'slideRight', 'oktan' ),
			'slideUp'        => esc_html__( 'slideUp', 'oktan' ),
			'slideLeft'      => esc_html__( 'slideLeft', 'oktan' ),
			'expandUp'       => esc_html__( 'expandUp', 'oktan' ),
			'slideExpandUp'  => esc_html__( 'slideExpandUp', 'oktan' ),
			'expandOpen'     => esc_html__( 'expandOpen', 'oktan' ),
			'bigEntrance'    => esc_html__( 'bigEntrance', 'oktan' ),
			'hatch'          => esc_html__( 'hatch', 'oktan' ),
			'tossing'        => esc_html__( 'tossing', 'oktan' ),
			'pulse'          => esc_html__( 'pulse', 'oktan' ),
			'floating'       => esc_html__( 'floating', 'oktan' ),
			'bounce'         => esc_html__( 'bounce', 'oktan' ),
			'pullUp'         => esc_html__( 'pullUp', 'oktan' ),
			'pullDown'       => esc_html__( 'pullDown', 'oktan' ),
			'stretchLeft'    => esc_html__( 'stretchLeft', 'oktan' ),
			'stretchRight'   => esc_html__( 'stretchRight', 'oktan' ),
			'fadeInUpBig'    => esc_html__( 'fadeInUpBig', 'oktan' ),
			'fadeInDownBig'  => esc_html__( 'fadeInDownBig', 'oktan' ),
			'fadeInLeftBig'  => esc_html__( 'fadeInLeftBig', 'oktan' ),
			'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'oktan' ),
			'slideInDown'    => esc_html__( 'slideInDown', 'oktan' ),
			'slideInLeft'    => esc_html__( 'slideInLeft', 'oktan' ),
			'slideInRight'   => esc_html__( 'slideInRight', 'oktan' ),
			'moveFromLeft'   => esc_html__( 'moveFromLeft', 'oktan' ),
			'moveFromRight'  => esc_html__( 'moveFromRight', 'oktan' ),
			'moveFromBottom' => esc_html__( 'moveFromBottom', 'oktan' ),
		);
	}
endif; //oktan_unyson_option_animations

//responsive options
if ( !function_exists( 'oktan_unyson_option_responsive_options_array' ) ) :
	function oktan_unyson_option_responsive_options_array() {
		return array(
			'hidden-xs' => array(
				'type'  => 'switch',
				'value' => '',
				'label' => esc_html__('Hide on Extra small screens (below 576px)', 'oktan'),
				'left-choice' => array(
					'value' => '',
					'label' => esc_html__('Show', 'oktan'),
				),
				'right-choice' => array(
					'value' => 'hidden-xs',
					'label' => esc_html__('Hide', 'oktan'),
				),
			),
			'hidden-sm' => array(
				'type'  => 'switch',
				'value' => '',
				'label' => esc_html__('Hide on Small screens (between 576px and 767px)', 'oktan'),
				'left-choice' => array(
					'value' => '',
					'label' => esc_html__('Show', 'oktan'),
				),
				'right-choice' => array(
					'value' => 'hidden-sm',
					'label' => esc_html__('Hide', 'oktan'),
				),
			),
			'hidden-md' => array(
				'type'  => 'switch',
				'value' => '',
				'label' => esc_html__('Hide on Medium screens (between 768px and 991px)', 'oktan'),
				'left-choice' => array(
					'value' => '',
					'label' => esc_html__('Show', 'oktan'),
				),
				'right-choice' => array(
					'value' => 'hidden-md',
					'label' => esc_html__('Hide', 'oktan'),
				),
			),
			'hidden-lg' => array(
				'type'  => 'switch',
				'value' => '',
				'label' => esc_html__('Hide on Large screens (between 992px and 1199px)', 'oktan'),
				'left-choice' => array(
					'value' => '',
					'label' => esc_html__('Show', 'oktan'),
				),
				'right-choice' => array(
					'value' => 'hidden-lg',
					'label' => esc_html__('Hide', 'oktan'),
				),
			),
			'hidden-xl' => array(
				'type'  => 'switch',
				'value' => '',
				'label' => esc_html__('Hide on Extra Large screens (above 1200px)', 'oktan'),
				'left-choice' => array(
					'value' => '',
					'label' => esc_html__('Show', 'oktan'),
				),
				'right-choice' => array(
					'value' => 'hidden-xl',
					'label' => esc_html__('Hide', 'oktan'),
				),
			),
		);
	}
endif; //oktan_unyson_option_responsive_options_array



//background options
if ( !function_exists( 'oktan_unyson_option_get_backgrounds_array' ) ) :
	function oktan_unyson_option_get_backgrounds_array() {
		return array(
			''         => esc_html__( 'Transparent (No Background)', 'oktan' ),
			'ls'  => esc_html__( 'Light', 'oktan' ),
			'ls ms'  => esc_html__( 'Grey', 'oktan' ),
			'ds'       => esc_html__( 'Dark', 'oktan' ),
			'ds ms'    => esc_html__( 'Dark Grey', 'oktan' ),
			'cs'       => esc_html__( 'Main color', 'oktan' ),
			'cs cs2'   => esc_html__( 'Second Main color', 'oktan' ),
			'cs cs3'   => esc_html__( 'Third Main color', 'oktan' ),
			'bordered' => esc_html__( 'Transparent background with border', 'oktan' ),
		);
	}
endif; //oktan_unyson_option_get_backgrounds_array



//get responsive CSS classes from options array
if ( !function_exists( 'oktan_unyson_options_get_responsive_css_classes' ) ) :
	function oktan_unyson_options_get_responsive_css_classes( $options ) {
		$css_class = '';
		$css_class .= ( !empty( $options['hidden_xs'] ) ) ? ' ' . $options['hidden_xs'] : '';
		$css_class .= ( !empty( $options['hidden_sm'] ) ) ? ' ' . $options['hidden_sm'] : '';
		$css_class .= ( !empty( $options['hidden_md'] ) ) ? ' ' . $options['hidden_md'] : '';
		$css_class .= ( !empty( $options['hidden_lg'] ) ) ? ' ' . $options['hidden_lg'] : '';
		$css_class .= ( !empty( $options['hidden_xl'] ) ) ? ' ' . $options['hidden_xl'] : '';
		return trim ( $css_class );
	}
endif; //oktan_unyson_options_get_responsive_css_classes

//get divider class
if ( !function_exists( 'oktan_unyson_options_get_divider_css_classes' ) ) :
	function oktan_unyson_options_get_divider_css_classes( $options ) {
		$css_class = '';
		$css_class .= ( $options['all'] !== '' ) ? ' divider-' . $options['all'] : '';
		$css_class .= ( $options['sm'] !== '' ) ? ' divider-sm-' . $options['sm'] : '';
		$css_class .= ( $options['md'] !== '' ) ? ' divider-md-' . $options['md'] : '';
		$css_class .= ( $options['lg'] !== '' ) ? ' divider-lg-' . $options['lg'] : '';
		$css_class .= ( $options['xl'] !== '' ) ? ' divider-xl-' . $options['xl'] : '';

		return trim ( $css_class );
	}
endif; //oktan unyson_options_get_responsive_css_classes

//detecting is topline is visible
if ( !function_exists( 'oktan_topline_is_visible' ) ) :
	function oktan_topline_is_visible() {
		$header = oktan_get_option( 'page_header' );
		//array with headers where topline is not shown
		return ( ! in_array( $header, array( '1' , '2' ) ) );
	}
endif; //oktan_topline_is_visible

//detecting is toplogo is visible
if ( !function_exists( 'oktan_toplogo_is_visible' ) ) :
	function oktan_toplogo_is_visible() {
		$header = oktan_get_option( 'page_header' );
		//array with headers where toplogo is not shown
		return ( ! in_array( $header, array( '1', '2', '4' ) ) );
	}
endif; //oktan_toplogo_is_visible

//detecting is copyright secondary text option is visible
if ( !function_exists( 'oktan_copyright_secondary_text_is_visible' ) ) :
	function oktan_copyright_secondary_text_is_visible() {
		$copyright = oktan_get_option( 'page_copyright' );
		//array with copyright where secondary text is visible
		return ( in_array( $copyright, array( '2' ) ) );
	}
endif; //oktan_copyright_secondary_text_is_visible

//detecting is copyright logo option is visible
if ( !function_exists( 'oktan_copyright_logo_is_visible' ) ) :
	function oktan_copyright_logo_is_visible() {
		$copyright = oktan_get_option( 'page_copyright' );
		//array with copyright where copyright logo is visible
		return ( in_array( $copyright, array( '3' ) ) );
	}
endif; //oktan_copyright_logo_is_visible

//detecting if shared buttons section is visible
if ( !function_exists( 'oktan_shared_buttons_options_is_visible' ) ) :
	function oktan_shared_buttons_options_is_visible() {
		return function_exists( 'mwt_share_this' );
	}
endif; //oktan_shared_buttons_options_is_visible

//predefined headers array
if ( !function_exists( 'oktan_get_predefined_headers_array' ) ) :
	function oktan_get_predefined_headers_array() {
		return array(
			'1'  => esc_html__( 'Default - logo and menu', 'oktan' ),
			'2'  => esc_html__( 'Logo, menu and phone number', 'oktan' ),
			'4'  => esc_html__( 'Logo, menu, phone number and social icons', 'oktan' ),
			'3'  => esc_html__( 'Narrow header with top logo and info', 'oktan' ),

		);
	}
endif; //oktan_get_predefined_headers_array

//header options array for customizer and for page options
if ( !function_exists( 'oktan_get_header_options_array_for_customizer_and_page' ) ) :
	function oktan_get_header_options_array_for_customizer_and_page( $defaults ) {
		return array(
			'header_layout'           => array(
				'title'   => esc_html__( 'Header Layout', 'oktan' ),
				//type tab for page options
				'type' => 'tab',
				'options' => array(
					'page_header' => array(
						'type'    => 'select',
						'value'   => $defaults['page_header'],
						'label'   => esc_html__( 'Template Header', 'oktan' ),
						'desc'    => esc_html__( 'Select one of predefined theme headers', 'oktan' ),
						'help'    => esc_html__( 'You can select one of predefined theme headers', 'oktan' ),
						'choices' => oktan_get_predefined_headers_array(),
						'blank'   => false, // (optional) if true, image can be deselected
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'header_absolute' => array(
						'label' => false,
						'desc'  => false,
						'type'  => 'multi-picker',
						'picker' => array(
							'enabled' => array(
								'label' => esc_html__('Position Absolute', 'oktan'),
								'type'  => 'switch',
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__('Enabled', 'oktan')
								),
								'left-choice' => array(
									'value' => '',
									'label' => esc_html__('Disabled', 'oktan')
								),
								'desc'  => esc_html__( 'Make header transparent and positioned inside slider or title section', 'oktan' ),
								'help'  => esc_html__( 'Adds "position:absolute" CSS rule on header', 'oktan' ),
								'wp-customizer-args' => array(
									'active_callback' => '__return_true',
								),
							),

						),
						'choices' => array(
							'yes' => array(
								'header_absolute_background_color' => array(
									'type'    => 'select',
									'value'   => 'ls',
									'label'   => esc_html__( 'Background color', 'oktan' ),
									'desc'    => esc_html__( 'This value will override selected background for Header and Title sections', 'oktan' ),
									'help'    => esc_html__( 'Select one of predefined background colors',
										'oktan' ),
									'choices' => array(
										'ls'     => esc_html__( 'Light', 'oktan' ),
										'ls ms'  => esc_html__( 'Light Grey', 'oktan' ),
										'ds'     => esc_html__( 'Dark Grey', 'oktan' ),
										'ds ms'  => esc_html__( 'Dark Muted', 'oktan' ),
										'ds bg-transparent'  => esc_html__( 'Dark Transparent', 'oktan' ),
										'cs'     => esc_html__( 'Main color', 'oktan' ),
										'cs cs2' => esc_html__( 'Second Main color', 'oktan' ),
									),
									'wp-customizer-args' => array(
										'active_callback' => '__return_true',
									),
								),
								'header_absolute_background_image' => array(
									'label'   => esc_html__( 'Background Image', 'oktan' ),
									'help'    => esc_html__( 'Choose the background image for section', 'oktan' ),
									'type'    => 'background-image',
									'choices' => array(//	in future may will set predefined images
									),
									'wp-customizer-args' => array(
										'active_callback' => '__return_true',
									),
								),
							),
						),
					),
					'header_show_all_menu_items' => array(
						'type'    => 'switch',
						'value'   => false,
						'label'   => esc_html__( 'Always show all menu items', 'oktan' ),
						'desc'    => esc_html__( 'Prevent hiding menu items that do not feet in menu width to sub-menus', 'oktan' ),
						'help'    => esc_html__( 'This option will not work if header with centered logo layout used', 'oktan' ),
						'right-choice' => array(
							'value' => true,
							'label' => esc_html__( 'Yes', 'oktan' )
						),
						'left-choice'  => array(
							'value' => false,
							'label' => esc_html__( 'No', 'oktan' )
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'header_disable_affix_xl' => array(
						'type'    => 'switch',
						'value'   => false,
						'label'   => esc_html__( 'Prevent sticky header on wide screens', 'oktan' ),
						'desc'    => esc_html__( 'Prevent header to be fixed on wide screens', 'oktan' ),
						'right-choice' => array(
							'value' => true,
							'label' => esc_html__( 'Yes', 'oktan' )
						),
						'left-choice'  => array(
							'value' => false,
							'label' => esc_html__( 'No', 'oktan' )
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
					'header_disable_affix_xs' => array(
						'type'    => 'switch',
						'value'   => false,
						'label'   => esc_html__( 'Prevent sticky header on small screens', 'oktan' ),
						'desc'    => esc_html__( 'Prevent header to be fixed on small screens', 'oktan' ),
						'right-choice' => array(
							'value' => true,
							'label' => esc_html__( 'Yes', 'oktan' )
						),
						'left-choice'  => array(
							'value' => false,
							'label' => esc_html__( 'No', 'oktan' )
						),
						'wp-customizer-args' => array(
							'active_callback' => '__return_true',
						),
					),
				),
			),
			'header_section_options'  => array(
				'title'   => esc_html__( 'Header Section Options', 'oktan' ),
				//type tab for page options
				'type' => 'tab',
				'options' => oktan_get_section_options_array( 'header_', array(
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
					'active_callback' => '__return_true',
				),
			),
		);
	}
endif; //oktan_get_header_options_array_for_customizer_and_page

//predefined footers array
if ( !function_exists( 'oktan_get_predefined_footers_array' ) ) :
	function oktan_get_predefined_footers_array() {
		return array(
			'1' => esc_html__( '4 columns footer', 'oktan' ),
			'5' => esc_html__( '4 different columns footer', 'oktan' ),
			'2' => esc_html__( '3 columns footer', 'oktan' ),
			'3' => esc_html__( '2 columns footer', 'oktan' ),
			'4' => esc_html__( '1 column footer', 'oktan' ),
		);
	}
endif; //oktan_get_predefined_footers_array

//footer options array for customizer and for page options
if ( !function_exists( 'oktan_get_footer_options_array_for_customizer_and_page' ) ) :
	function oktan_get_footer_options_array_for_customizer_and_page( $defaults ) {
		return array(
			'footer_layout' => array(
				'title'                  => esc_html__( 'Footer Section Layout', 'oktan' ),
				//type tab for page options
				'type' => 'tab',
				'options'                => array(
					'page_footer' => array(
						'type'    => 'select',
						'value'   => $defaults['page_footer'],
						'label'   => esc_html__( 'Page footer', 'oktan' ),
						'desc'    => esc_html__( 'Select one of predefined page footers.', 'oktan' ),
						'help'    => esc_html__( 'You can select one of predefined theme footers', 'oktan' ),
						'choices' => oktan_get_predefined_footers_array(),
						'blank'   => false, // (optional) if true, image can be deselected
					),
				),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
			'footer_section_options' => array(
				'title'   => esc_html__( 'Footer Section Options', 'oktan' ),
				//type tab for page options
				'type' => 'tab',
				'options' => oktan_get_section_options_array( 'footer_' ),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
			'footer_section_padding' => array(
				'title'   => esc_html__( 'Footer Section Padding', 'oktan' ),
				//type tab for page options
				'type' => 'tab',
				'options' => oktan_unyson_option_get_section_padding_array( 'footer_'),
				'wp-customizer-args' => array(
					'active_callback' => '__return_true',
				),
			),
		);
	}
endif; //oktan_get_footer_options_array_for_customizer_and_page


//categories list default markup
add_filter( 'oktan_get_the_terms_defaults', function ( $args ) {
	$args['before'] = '<div class="cat-links"><i class="fa fa-paperclip" aria-hidden="true"></i>';
	$args['after'] = '</div>';

	return $args;
} );

add_filter( 'oktan_get_comments_counter_defaults', function ( $args ) {

	$options = oktan_get_options();
	if ( ! empty( $options['blog_hide_comments_link'] ) ) {
		$args['print'] = false;
	}

	return $args;
} );


