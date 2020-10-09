<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'number'        => array(
		'type'       => 'slider',
		'value'      => 6,
		'properties' => array(
			'min'  => 1,
			'max'  => 12,
			'step' => 1, // Set slider step. Always > 0. Could be fractional.
		),
		'label'      => esc_html__( 'Items number', 'oktan' ),
		'desc'       => esc_html__( 'Number of posts to display', 'oktan' ),
	),
	'nav'           => array(
		'type'         => 'switch',
		'value'        => 'true',
		'label'        => esc_html__( 'Show Navigation', 'oktan' ),
		'left-choice'  => array(
			'value' => 'false',
			'label' => esc_html__( 'No', 'oktan' ),
		),
		'right-choice' => array(
			'value' => 'true',
			'label' => esc_html__( 'Yes', 'oktan' ),
		),
	),
	'margin'        => array(
		'label'   => esc_html__( 'Horizontal item margin (px)', 'oktan' ),
		'desc'    => esc_html__( 'Select horizontal item margin', 'oktan' ),
		'value'   => '30',
		'type'    => 'select',
		'choices' => array(
			'0'  => esc_html__( '0', 'oktan' ),
			'1'  => esc_html__( '1px', 'oktan' ),
			'2'  => esc_html__( '2px', 'oktan' ),
			'10' => esc_html__( '10px', 'oktan' ),
			'30' => esc_html__( '30px', 'oktan' ),
			'60' => esc_html__( '60px', 'oktan' ),
		)
	),
	'layout'        => array(
		'label'   => esc_html__( 'Post Layout', 'oktan' ),
		'desc'    => esc_html__( 'Choose post layout', 'oktan' ),
		'value'   => 'carousel',
		'type'    => 'select',
		'choices' => array(
			'carousel' => esc_html__( 'Carousel', 'oktan' ),
			'isotope'  => esc_html__( 'Masonry Grid', 'oktan' ),
			'tiled'  => esc_html__( 'Tiled (special layout)', 'oktan' ),
		)
	),
	'item_layout'   => array(
		'label'   => esc_html__( 'Item layout', 'oktan' ),
		'desc'    => esc_html__( 'Choose Item layout for carousel type', 'oktan' ),
		'value'   => 'item-regular',
		'type'    => 'select',
		'choices' => array(
			'item-regular'  => esc_html__( 'Regular (just image)', 'oktan' ),
			'item-title'    => esc_html__( 'Image with title', 'oktan' ),
			'item-extended' => esc_html__( 'Image with title and excerpt', 'oktan' ),
		)
	),
	'responsive_lg' => array(
		'label'   => esc_html__( 'Columns on large screens', 'oktan' ),
		'desc'    => esc_html__( 'Select items number on wide screens (>1200px)', 'oktan' ),
		'value'   => '4',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'oktan' ),
			'2' => esc_html__( '2', 'oktan' ),
			'3' => esc_html__( '3', 'oktan' ),
			'4' => esc_html__( '4', 'oktan' ),
			'6' => esc_html__( '6', 'oktan' ),
		)
	),
	'responsive_md' => array(
		'label'   => esc_html__( 'Columns on middle screens', 'oktan' ),
		'desc'    => esc_html__( 'Select items number on middle screens (>992px)', 'oktan' ),
		'value'   => '3',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'oktan' ),
			'2' => esc_html__( '2', 'oktan' ),
			'3' => esc_html__( '3', 'oktan' ),
			'4' => esc_html__( '4', 'oktan' ),
			'6' => esc_html__( '6', 'oktan' ),
		)
	),
	'responsive_sm' => array(
		'label'   => esc_html__( 'Columns on small screens', 'oktan' ),
		'desc'    => esc_html__( 'Select items number on small screens (>768px)', 'oktan' ),
		'value'   => '2',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'oktan' ),
			'2' => esc_html__( '2', 'oktan' ),
			'3' => esc_html__( '3', 'oktan' ),
			'4' => esc_html__( '4', 'oktan' ),
			'6' => esc_html__( '6', 'oktan' ),
		)
	),
	'responsive_xs' => array(
		'label'   => esc_html__( 'Columns on extra small screens', 'oktan' ),
		'desc'    => esc_html__( 'Select items number on extra small screens (<767px)', 'oktan' ),
		'value'   => '1',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'oktan' ),
			'2' => esc_html__( '2', 'oktan' ),
			'3' => esc_html__( '3', 'oktan' ),
			'4' => esc_html__( '4', 'oktan' ),
			'6' => esc_html__( '6', 'oktan' ),
		)
	),
	'show_filters'  => array(
		'type'         => 'switch',
		'value'        => false,
		'label'        => esc_html__( 'Show filters', 'oktan' ),
		'desc'         => esc_html__( 'Hide or show categories filters', 'oktan' ),
		'left-choice'  => array(
			'value' => false,
			'label' => esc_html__( 'No', 'oktan' ),
		),
		'right-choice' => array(
			'value' => true,
			'label' => esc_html__( 'Yes', 'oktan' ),
		),
	),
	'cat' => array(
		'type'  => 'multi-select',
		'label' => esc_html__('Select categories', 'oktan'),
		'desc'  => esc_html__('You can select one or more categories', 'oktan'),
		'population' => 'taxonomy',
		'source' => 'category',
		'prepopulate' => 10,
		'limit' => 100,
	)
);