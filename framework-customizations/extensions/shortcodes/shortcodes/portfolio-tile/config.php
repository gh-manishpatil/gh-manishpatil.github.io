<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$portfolio = fw()->extensions->get( 'portfolio' );
if ( empty( $portfolio ) ) {
	return;
}


$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Portfolio Tile', 'oktan' ),
		'description' => esc_html__( 'Portfolio projects in Tile view', 'oktan' ),
		'tab'         => esc_html__( 'Widgets', 'oktan' )
	)
);