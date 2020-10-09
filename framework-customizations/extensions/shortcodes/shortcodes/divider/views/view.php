<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/** Responsive Visibility **/
$extra_class = oktan_unyson_options_get_responsive_css_classes( $atts );

if ( 'line' === $atts['style']['ruler_type'] ): ?>
	<div class="fw-divider-line <?php echo esc_attr( $extra_class ); ?>"><hr/></div>
<?php endif; ?>

<?php if ( 'space' === $atts['style']['ruler_type'] ): ?>
	<div class="fw-divider-space <?php echo esc_attr( $extra_class ); ?>" style="margin-top: <?php echo (int) $atts['style']['space']['height']; ?>px;"></div>
<?php endif; ?>

<?php if ( 'line_custom' === $atts['style']['ruler_type'] ):?>
    <div class="divider-line <?php echo esc_attr( $extra_class ); ?> <?php echo esc_attr( $atts['style']['line_custom']['line_color']);?> <?php echo esc_attr( $atts['style']['line_custom']['line_position']);?>"></div>
<?php endif; ?>
