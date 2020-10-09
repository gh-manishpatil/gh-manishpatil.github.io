<?php
/**
 * Requires the WP-SCSS plugin to be installed and activated.
 */

//current selected colors for customizer.php
if ( ! function_exists( 'oktan_get_theme_current_colors' ) ) :
	function oktan_get_theme_current_colors() {
		/* Colors */
		$current_colors = array(
			'accent_color_1' => oktan_get_option( 'accent_color_1' ),
			'accent_color_2' => oktan_get_option( 'accent_color_2' ),
			'accent_color_3' => oktan_get_option( 'accent_color_3' ),
			'accent_color_4' => oktan_get_option( 'accent_color_4' )
		);
		return apply_filters( 'oktan_theme_current_colors', $current_colors );
	}
endif;

//check for wp_scss plugin activated for options in customizer.php
if ( ! function_exists( 'oktan_wp_scss_is_installed' ) ) :
	function oktan_wp_scss_is_installed() {
		return class_exists('Wp_Scss');
	}
endif;

//following code only if Wp_Scss plugin is active
if ( class_exists('Wp_Scss') ) {
	//load recompile script
	add_action('customize_register', 'oktan_action_customizer_enqueue_scss_compile_script');
	add_action('customize_preview_init', 'oktan_action_customizer_enqueue_scss_compile_script');

	//live preview color scripts - will be loaded only if Wp_Scss class exists below
	if ( ! function_exists( 'oktan_action_customizer_enqueue_scss_compile_script' ) ) :
		function oktan_action_customizer_enqueue_scss_compile_script() {

			wp_register_script(
				'oktan-customizer-scss',
				OKTAN_THEME_URI . '/js/theme-customizer-scss.js',
				array( 'jquery','customize-preview' ),
				OKTAN_THEME_VERSION,
				true
			);

			wp_localize_script('oktan-customizer', 'oktan_customizer_text', array(
				'button_text' => esc_html__( 'Override first color scheme!', 'oktan' ),
				'button_reset_text' => esc_html__( 'Reset first color scheme', 'oktan' ),
				'error_text' => esc_html__( 'Error. Did you set up your WP SCSS plugin directories correctly?', 'oktan' ),
			));

			wp_enqueue_script(
				'oktan-customizer-scss'
			);
		}
	endif;


	/* oktan_scss_set_variables */
	if ( !function_exists( 'oktan_scss_set_variables' ) ) :
		function oktan_scss_set_variables() {
			/* Colors */
			//default value not needed because they are set in _varialbes_template.scss
			$accent_color_1  = oktan_get_option( 'accent_color_1' );
			$accent_color_2  = oktan_get_option( 'accent_color_2' );
			$accent_color_3  = oktan_get_option( 'accent_color_3' );
			$accent_color_4  = oktan_get_option( 'accent_color_4' );

			//if isset $_POST with this variables - overriding
			if ( !empty($_POST['action'])) {
				if ($_POST['action'] == 'oktan_compile_scss' ) {
					$accent_color_1 = esc_attr( $_POST['accent_color_1'] );
					$accent_color_2 = esc_attr( $_POST['accent_color_2'] );
					$accent_color_3 = esc_attr( $_POST['accent_color_3'] );
					$accent_color_4 = esc_attr( $_POST['accent_color_4'] );
				}
			}

			/* Variables */
			$variables = array(

				/* Theme color scheme */
				'colorMain'  => $accent_color_1,
				'colorMain2' => $accent_color_2,
				'colorMain3' => $accent_color_3,
				'colorMain4' => $accent_color_4,

			);

			return $variables;
		}
	endif; //oktan_scss_set_variables
	add_filter( 'wp_scss_variables', 'oktan_scss_set_variables' );

	//ajax customizer compiling SCSS files
	add_action( 'wp_ajax_oktan_compile_scss', 'oktan_compile_scss' );

	//compile scss via ajax
	if ( !function_exists( 'oktan_compile_scss' ) ) :
		function oktan_compile_scss() {

			check_ajax_referer( 'preview-customize_' . get_stylesheet(), 'customize_preview_nonce', true );

			//compiling
			wp_scss_compile();

			//processing errors
			global $wpscss_compiler;
			$error_string = '';
			foreach ( $wpscss_compiler->compile_errors as $error ) {
				$error_string .= $error['file'] . ' - ' . $error['message'];
			}
			if ( ! empty( $error_string ) ) {
				wp_send_json_error( $error_string, 500);
			}
			wp_die();
		}
	endif;


}