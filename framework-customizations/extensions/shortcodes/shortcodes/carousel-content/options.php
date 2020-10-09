<?php if (!defined('FW')) {
    die('Forbidden');
}
$image_carousel = fw_ext('shortcodes')-> get_shortcode('images_carousel');
$image_carousel_options = $image_carousel->get_options();

$special_heading = fw_ext('shortcodes')->get_shortcode('special_heading');
$special_heading_options = $special_heading->get_options();
$special_heading_options['headings'] += ['limit' => 1];

$button = fw_ext('shortcodes')->get_shortcode('button');
$button_options = $button -> get_options();


$options = array(
    'layout' => array(
        'type' => 'select',
        'value' => 'layout_1',
        'label' => esc_html__('Choose Layout', 'oktan'),
        'desc' => esc_html__('Choose a layout view', 'oktan'),
        'choices' => array(
            'layout_1' => esc_html__('Layout 1', 'oktan'),
            'layout_2' => esc_html__('Layout 2', 'oktan'),
        ),
    ),
    $image_carousel_options,
    $special_heading_options,
    'divider' => array(
        'type' => 'switch',
        'value' => '',
        'label' => esc_html__('Add line divider', 'oktan'),
        'desc' => esc_html__('Add line divider after heading', 'oktan'),
        'left-choice' => array(
            'value' => false,
            'label' => esc_html__('No', 'oktan'),
        ),
        'right-choice' => array(
            'value' => true,
            'label' => esc_html__('Yes', 'oktan'),
        ),
    ),
    'content' => array(
        'type' => 'wp-editor',
        'label' => esc_html__('Content', 'oktan'),
    ),
    'button' => array(
        'type'    => 'multi-picker',
        'label'   => false,
        'desc'    => false,
        'value'   => false,
        'picker'  => array(
            'show_button' => array(
                'type'         => 'switch',
                'label'        => esc_html__( 'Show button', 'oktan' ),
                'left-choice'  => array(
                    'value' => '',
                    'label' => esc_html__( 'No', 'oktan' ),
                ),
                'right-choice' => array(
                    'value' => 'button',
                    'label' => esc_html__( 'Yes', 'oktan' ),
                ),
            ),
        ),
        'choices' => array(
            ''       => array(),
            'button' => $button_options,
        ),
    )
);