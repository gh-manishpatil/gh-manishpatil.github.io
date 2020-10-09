<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Signature', 'oktan' ),
	'description' => esc_html__( 'Add a signature', 'oktan' ),
	'tab'         => esc_html__( 'Content Elements', 'oktan' )
);