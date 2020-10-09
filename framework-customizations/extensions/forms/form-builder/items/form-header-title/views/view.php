<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var string $title
 * @var string $subtitle
 */

if ( empty( $title ) ) {
	return;
}
?>
<div class="col-12 form-title text-center form-builder-item">
	<div class="header title">
		<h4><?php echo wp_kses_post( $title ); ?></h4>
		<?php if ( ! empty( $subtitle ) ) : ?>
			<p><?php echo wp_kses_post( $subtitle ); ?></p>
		<?php endif ?>
	</div>
</div>