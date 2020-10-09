<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}
/**
 * Include static files: javascript and css
 */

//removing default font awesome css style - we using our "font-awesome.css" file which contain font awesome
wp_deregister_style( 'fw-font-awesome' );
wp_deregister_style( 'font-awesome' );

//Add Theme Fonts
wp_enqueue_style(
	'font-awesome',
	OKTAN_THEME_URI . '/css/font-awesome.css',
	array(),
	OKTAN_THEME_VERSION
);

//Add Flaticon Fonts
wp_enqueue_style(
	'flaticon',
	OKTAN_THEME_URI . '/css/flaticon.css',
	array(),
	OKTAN_THEME_VERSION
);
wp_enqueue_style(
	'fontello',
	OKTAN_THEME_URI . '/css/fontello.css',
	array(),
	OKTAN_THEME_VERSION
);
wp_enqueue_style(
	'icomoon',
	OKTAN_THEME_URI . '/css/icomoon.css',
	array(),
	OKTAN_THEME_VERSION
);


if ( is_admin_bar_showing() ) {
	//Add Frontend admin styles
	wp_register_style(
		'oktan-admin_bar',
		OKTAN_THEME_URI . '/css/admin-frontend.css',
		array(),
		OKTAN_THEME_VERSION
	);
	wp_enqueue_style( 'oktan-admin_bar' );
}

//styles and scripts below only for frontend: if in dashboard - exit
if ( is_admin() ) {
	return;
}

/**
 * Enqueue scripts and styles for the front end.
 */
// Add theme google font, used in the main stylesheet.
wp_enqueue_style(
	'oktan-google-font',
	oktan_google_font_url(),
	array(),
	OKTAN_THEME_VERSION
);

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

if ( is_singular() && wp_attachment_is_image() ) {
	wp_enqueue_script(
		'oktan-keyboard-image-navigation',
		OKTAN_THEME_URI . '/js/keyboard-image-navigation.js',
		array( 'jquery' ),
		OKTAN_THEME_VERSION
	);
}

//plugins theme script
wp_enqueue_script(
	'oktan-modernizr',
	OKTAN_THEME_URI . '/js/vendor/modernizr-custom.js',
	false,
	'2.6.2',
	false
);

//plugins theme script

wp_enqueue_script( 'bootstrap-bundle', OKTAN_THEME_URI . '/js/vendor/bootstrap.bundle.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'affix', OKTAN_THEME_URI . '/js/vendor/affix.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'appear', OKTAN_THEME_URI . '/js/vendor/jquery.appear.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'cookie', OKTAN_THEME_URI . '/js/vendor/jquery.cookie.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'easing', OKTAN_THEME_URI . '/js/vendor/jquery.easing.1.3.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'hoverIntent', OKTAN_THEME_URI . '/js/vendor/jquery.hoverIntent.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'superfish', OKTAN_THEME_URI . '/js/vendor/superfish.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'progressbar', OKTAN_THEME_URI . '/js/vendor/bootstrap-progressbar.min.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'countdown', OKTAN_THEME_URI . '/js/vendor/jquery.countdown.min.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'countTo', OKTAN_THEME_URI . '/js/vendor/jquery.countTo.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'easypiechart', OKTAN_THEME_URI . '/js/vendor/jquery.easypiechart.min.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'scrollbar', OKTAN_THEME_URI . '/js/vendor/jquery.scrollbar.min.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'localScroll', OKTAN_THEME_URI . '/js/vendor/jquery.localScroll.min.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'scrollTo', OKTAN_THEME_URI . '/js/vendor/jquery.scrollTo.min.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'totop', OKTAN_THEME_URI . '/js/vendor/jquery.ui.totop.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'parallax', OKTAN_THEME_URI . '/js/vendor/jquery.parallax-1.1.3.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'isotope', OKTAN_THEME_URI . '/js/vendor/isotope.pkgd.min.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'flexslider', OKTAN_THEME_URI . '/js/vendor/jquery.flexslider-min.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'owlcarousel', OKTAN_THEME_URI . '/js/vendor/owl.carousel.min.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'photoswipe', OKTAN_THEME_URI . '/js/vendor/photoswipe.js', array('jquery'), OKTAN_THEME_VERSION, true );
wp_enqueue_script( 'photoswipe-default', OKTAN_THEME_URI . '/js/vendor/photoswipe-ui-default.min.js', array('jquery'), OKTAN_THEME_VERSION, true );

//getting theme color scheme number
$color_scheme_number = oktan_get_option('color_scheme_number', '' );

//TODO woo gallery scripts handle
//if WooCommerce - remove prettyPhoto - we have one in "compressed.js"
if ( class_exists( 'WooCommerce' ) ) :

	// Add Theme Woo Styles and Scripts
	wp_enqueue_style(
		'oktan-woo',
		OKTAN_THEME_URI . '/css/shop' . esc_attr( $color_scheme_number ) . '.css',
		array(),
		OKTAN_THEME_VERSION
	);

	//you can include Woo related scripts here

endif; //WooCommerce

//main theme script
wp_enqueue_script(
	'oktan-main',
	OKTAN_THEME_URI . '/js/main.js',
	array( 'jquery' ),
	OKTAN_THEME_VERSION,
	true
);

//if AccessPress is active
if ( class_exists( 'SC_Class' ) ) :
	wp_deregister_style( 'fontawesome-css' );
	wp_deregister_style( 'apsc-frontend-css' );
	wp_enqueue_style(
		'oktan-accesspress',
		OKTAN_THEME_URI . '/css/accesspress.css',
		array(),
		OKTAN_THEME_VERSION
	);
endif; //AccessPress

//Add Theme Booked Styles
if( class_exists('booked_plugin')) {
	wp_dequeue_style('booked-styles');
	wp_dequeue_style('booked-responsive');
	wp_enqueue_style(
		'oktan-booked',
		OKTAN_THEME_URI . '/css/booked' . esc_attr( $color_scheme_number ) . '.css',
		array(),
		OKTAN_THEME_VERSION
	);
}//Booked

// Add Bootstrap Style
wp_enqueue_style(
	'bootstrap',
	OKTAN_THEME_URI . '/css/bootstrap.min.css',
	array(),
	OKTAN_THEME_VERSION
);

// Add Animations Style
wp_enqueue_style(
	'oktan-animations',
	OKTAN_THEME_URI . '/css/animations.css',
	array(),
	OKTAN_THEME_VERSION
);

// Add Theme Style
wp_enqueue_style(
	'oktan-main',
	OKTAN_THEME_URI . '/css/main' . esc_attr( $color_scheme_number ) . '.css',
	array(),
	OKTAN_THEME_VERSION
);

// Add Theme stylesheet.
wp_enqueue_style( 'oktan-style', get_stylesheet_uri(), array(), OKTAN_THEME_VERSION );

wp_add_inline_style( 'oktan-main', oktan_add_font_styles_in_head() );
wp_add_inline_style( 'oktan-main', oktan_custom() );

if( defined('FW') ) :

	//function for enqueue styles and scripts for section video background
	if (! function_exists( 'oktan_unyson_enqueue_section_video_background_scripts' ) ) :
		function oktan_unyson_enqueue_section_video_background_scripts() {

			// fixes https://github.com/ThemeFuse/Unyson/issues/1552
			{
				global $is_safari;

				if ($is_safari) {
					wp_enqueue_script('youtube-iframe-api', 'https://www.youtube.com/iframe_api');
				}
			}

			wp_enqueue_style(
				'oktan-shortcode-section-background-video',
				OKTAN_THEME_URI . '/framework-customizations/extensions/shortcodes/shortcodes/section/static/css/background.css'
			);

			wp_enqueue_script(
				'oktan-shortcode-section-formstone-core',
				OKTAN_THEME_URI . '/framework-customizations/extensions/shortcodes/shortcodes/section/static/js/core.js',
				array( 'jquery' ),
				false,
				true
			);
			wp_enqueue_script(
				'oktan-shortcode-section-formstone-transition',
				OKTAN_THEME_URI . '/framework-customizations/extensions/shortcodes/shortcodes/section/static/js/transition.js',
				array( 'jquery' ),
				false,
				true
			);
			wp_enqueue_script(
				'oktan-shortcode-section-formstone-background',
				OKTAN_THEME_URI . '/framework-customizations/extensions/shortcodes/shortcodes/section/static/js/background.js',
				array( 'jquery' ),
				false,
				true
			);
			wp_enqueue_script(
				'oktan-shortcode-section',
				OKTAN_THEME_URI . '/framework-customizations/extensions/shortcodes/shortcodes/section/static/js/background.init.js',
				array(
					'oktan-shortcode-section-formstone-core',
					'oktan-shortcode-section-formstone-transition',
					'oktan-shortcode-section-formstone-background'
				),
				false,
				true
			);
		}
	endif;
endif;
