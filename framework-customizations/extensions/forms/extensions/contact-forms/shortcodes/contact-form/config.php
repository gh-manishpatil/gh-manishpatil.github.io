<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Contact form', 'oktan' ),
	'description' => esc_html__( 'Build contact forms', 'oktan' ),
	'tab'         => esc_html__( 'Content Elements', 'oktan' ),
	'popup_size'  => 'large',
	'type'        => 'special'
);