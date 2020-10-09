<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$events = fw()->extensions->get( 'events' );
if ( empty( $events ) ) {
	return;
}

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Events Weekly Tabs', 'oktan' ),
	'description' => esc_html__( 'Show weekly events in tabs', 'oktan' ),
	'tab'         => esc_html__( 'Widgets', 'oktan' )
);