<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>


<div class="signature">
	<?php if ( !empty( $atts['image_author']['url'] ) ) : ?>
		<div class="signature-image">
			<img src="<?php echo esc_url( $atts['image_author']['url'] ); ?>" alt="<?php echo esc_attr( $atts['image_author']['url'] ); ?>">
		</div>
	<?php endif; ?>
	<div class="signature-content">
		<span><?php echo wp_kses_post($atts['name_author']) ?></span>
		<?php if ( !empty( $atts['image_signature']['url'] ) ) : ?>
			<img src="<?php echo esc_url( $atts['image_signature']['url'] ); ?>" alt="<?php echo esc_attr( $atts['image_signature']['url'] ); ?>">
		<?php endif; ?>
	</div>
</div>