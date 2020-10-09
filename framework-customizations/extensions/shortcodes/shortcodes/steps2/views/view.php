<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */


?>
<div class="step-gorizontal">
	<?php
	if ( !empty( $atts['steps'] ) ) :
	foreach ( $atts['steps'] as $key => $step ) :?>

		<div class="step <?php echo esc_attr($step['align']);?>">
			<div class="step-number">
				<h3>
					<?php echo wp_kses_post( $step['number'] ); ?>
				</h3>
			</div>
			<h5>
				<?php echo wp_kses_post( $step['title'] ); ?>
			</h5>
			<p>
				<?php echo wp_kses_post( $step['content'] ); ?>
			</p>
		</div>
	<?php endforeach;
	endif; ?>
</div>