<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */


?>
<div class="steps-vertical">
	<?php
	if ( !empty( $atts['steps'] ) ) :
		foreach ( $atts['steps'] as $key => $step ) :?>
			<div class="step-wrap">
				<div class="step-wrap__text">
					<h4>
						<?php echo wp_kses_post( $step['title'] ); ?>
					</h4>
					<p>
						<?php echo wp_kses_post( $step['content'] ); ?>
					</p>
				</div>
				<div class="step-wrap__title">
					<h6><?php echo wp_kses_post( $step['month'] ); ?></h6>
					<h3 class="color-main thin"><?php echo wp_kses_post( $step['year'] ); ?></h3>
				</div>

				<div class="step-wrap__image">
					<img src="<?php echo esc_url( $step['image']['url'] ); ?>"
						 alt="<?php echo esc_attr( $step['title'] ); ?>">
				</div>
			</div>
		<?php endforeach;
		endif; ?>
</div>