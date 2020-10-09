<?php

/**
 * TGM Plugin Activation
 */
require_once OKTAN_THEME_PATH . '/inc/tgm-plugin-activation/class-tgm-plugin-activation.php';

if ( ! function_exists( 'oktan_action_register_required_plugins' ) ):
	/** @internal */
	function oktan_action_register_required_plugins() {
		tgmpa( array (
			array (
				'name'             => 'Unyson',
				'slug'             => 'unyson',
				'required'         => true,
			),
			array (
				'name'             => 'Revolution Slider',
				'slug'             => 'rev-slider',
				'source'           => esc_url( 'http://webdesign-finder.com/remote-demo-content/common-plugins-original/revslider.zip' ),
				'required'         => true, // please do not turn to false!
			),
			array (
				'name'             => esc_html__( 'Snazzy Maps', 'oktan' ),
				'slug'             => 'snazzy-maps',
				'source'           => 'http://webdesign-finder.com/remote-demo-content/common-plugins-original/snazzy-maps.1.1.5.zip',
				'required'         => true,
				'version'          => '1.1.5',
			),
			array(
				'name'             => esc_html__( 'Contact Form 7', 'oktan' ),
				'slug'             => 'contact-form-7',
				'required'         => true,
			),
			array (
				'name'             => esc_html__('RVM - Responsive Vector Maps', 'oktan'),
				'slug'             => 'responsive-vector-maps',
				'required'         => true,
			),
			array (
				'name'             => 'Classic editor',
				'slug'             => 'classic-editor',
				'required'         => true,
			),
			array (
				'name'             => 'MWTemplates Theme Addons',
				'slug'             => 'mwt-addons',
				'source'           => esc_url('http://webdesign-finder.com/oktan/plugins/mwt-addons.zip'),
				'required'         => true,
				'version'          => '1.1',
			),
			array (
				'name'             => 'MWTemplates Theme Helpers',
				'slug'             => 'mwt-helpers',
				'source'           => esc_url('http://webdesign-finder.com/oktan/plugins/mwt-helpers.zip'),
				'required'         => true,
				'version'          => '1.0',
			),
			array (
				'name'             => 'MailChimp',
				'slug'             => 'mailchimp-for-wp',
				'required'         => true,
			),
			array(
				'name'             => 'WooCommerce',
				'slug'             => 'woocommerce',
				'required'         => false,
			),
			array (
				'name'             => 'Envato Market',
				'slug'             => 'envato-market',
				'source'           => esc_url('https://envato.github.io/wp-envato-market/dist/envato-market.zip'),
				'required'         => true, // please do not turn to false!
			),
			array(
				'name'             => 'WP-SCSS',
				'slug'             => 'wp-scss',
				'required'         => false,
			),
		),
			array(
				'domain'       => 'oktan',
				'dismissable'  => false,
				'is_automatic' => false
			) );
	}
endif;
add_action( 'tgmpa_register', 'oktan_action_register_required_plugins' );