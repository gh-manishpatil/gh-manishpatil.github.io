<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'message' => array(
		'label' => esc_html__( 'Message', 'oktan' ),
		'desc'  => esc_html__( 'Notification message', 'oktan' ),
		'type'  => 'textarea',
		'value' => esc_html__( 'Message!', 'oktan' ),
	),
	'type'    => array(
		'label'   => esc_html__( 'Type', 'oktan' ),
		'desc'    => esc_html__( 'Notification type', 'oktan' ),
		'type'    => 'select',
		'choices' => array(
			'success' => esc_html__( 'Congratulations', 'oktan' ),
			'info'    => esc_html__( 'Information', 'oktan' ),
			'warning' => esc_html__( 'Alert', 'oktan' ),
			'danger'  => esc_html__( 'Error', 'oktan' ),
		)
	),
);