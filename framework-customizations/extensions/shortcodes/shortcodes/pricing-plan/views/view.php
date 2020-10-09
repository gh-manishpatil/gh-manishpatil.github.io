<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var $atts The shortcode attributes
 */

switch ( $atts['layout'] ) :
	case '2':
?>
<div class="pricing-plan bordered <?php echo esc_attr( $atts['featured'] ); ?>">
	<?php if( ! empty( $atts['title'] ) ) : ?>
		<div class="plan-name">
			<h3>
				<?php echo wp_kses_post( $atts['title'] ); ?>
			</h3>
		</div>
	<?php endif; ?>
	<div class="price-wrap bg-maincolor">
		<?php if( ! empty( $atts['currency'] ) ) : ?>
			<span class="plan-sign"><?php echo wp_kses_post( $atts['currency'] ); ?></span>
		<?php endif; ?>
		<?php if( ! empty( $atts['price'] ) ) : ?>
			<span class="plan-price"><?php echo wp_kses_post( $atts['price'] ); ?></span>
		<?php endif; ?>
		<?php if( ! empty( $atts['price_after'] ) ) : ?>
			<span class="plan-decimals"><?php echo wp_kses_post( $atts['price_after'] ); ?></span>
		<?php endif; ?>
	</div>
	<?php if( ! empty( $atts['description'] ) ) : ?>
		<div class="plan-description small-text bg-maincolor">
			<?php echo wp_kses_post( $atts['description'] ); ?>
		</div>
	<?php endif; ?>
	<?php if( ! empty( $atts['features'] ) ) : ?>
		<div class="plan-features">
			<ul class="list-bordered">
				<?php foreach( ( $atts['features'] ) as $feature ) : ?>
					<li class="<?php echo esc_attr( $feature['feature_checked'] ); ?>">
						<?php echo wp_kses_post( $feature['feature_name'] ); ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
	<div class="plan-button">
		<?php
		$wide_button = ( ! empty( $atts['wide_button'] ) ? 'wide_button' : '' )
		?>
		<a href="<?php echo esc_attr( $atts['link'] ) ?>" target="<?php echo esc_attr( $atts['target'] ) ?>"
		   class="<?php echo esc_attr( $atts['color'] . ' ' . $wide_button ); ?>">
			<span><?php echo esc_html( $atts['label'] ); ?></span>
		</a>
	</div>
</div>
<?php
	//2
	break;
	case '3':
?>
<div class="pricing-plan bordered <?php echo esc_attr( $atts['featured'] ); ?>">
	<?php if( ! empty( $atts['title'] ) ) : ?>
		<div class="plan-name bg-maincolor">
			<h3>
				<?php echo wp_kses_post( $atts['title'] ); ?>
			</h3>
		</div>
	<?php endif; ?>
	<div class="price-wrap color-darkgrey">
		<?php if( ! empty( $atts['currency'] ) ) : ?>
			<span class="plan-sign"><?php echo wp_kses_post( $atts['currency'] ); ?></span>
		<?php endif; ?>
		<?php if( ! empty( $atts['price'] ) ) : ?>
			<span class="plan-price"><?php echo wp_kses_post( $atts['price'] ); ?></span>
		<?php endif; ?>
		<?php if( ! empty( $atts['price_after'] ) ) : ?>
			<span class="plan-decimals"><?php echo wp_kses_post( $atts['price_after'] ); ?></span>
		<?php endif; ?>
	</div>
	<?php if( ! empty( $atts['description'] ) ) : ?>
		<div class="plan-description small-text color-darkgrey">
			<?php echo wp_kses_post( $atts['description'] ); ?>
		</div>
	<?php endif; ?>
	<?php if( ! empty( $atts['features'] ) ) : ?>
		<div class="plan-features">
			<ul class="list-bordered">
				<?php foreach( ( $atts['features'] ) as $feature ) : ?>
					<li class="<?php echo esc_attr( $feature['feature_checked'] ); ?>">
						<?php echo wp_kses_post( $feature['feature_name'] ); ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
	<div class="plan-button">
		<?php
		$wide_button = ( ! empty( $atts['wide_button'] ) ? 'wide_button' : '' )
		?>
		<a href="<?php echo esc_attr( $atts['link'] ) ?>" target="<?php echo esc_attr( $atts['target'] ) ?>"
		   class="<?php echo esc_attr( $atts['color'] . ' ' . $wide_button ); ?>">
			<span><?php echo esc_html( $atts['label'] ); ?></span>
		</a>
	</div>
</div>
<?php
	//3
	break;
	default:
?>
<div class="pricing-plan bordered <?php echo esc_attr( $atts['featured'] ); ?>">
	<?php if( ! empty( $atts['title'] ) ) : ?>
	<div class="plan-name">
		<h3>
			<?php echo wp_kses_post( $atts['title'] ); ?>
		</h3>
	</div>
	<?php endif; ?>
	<div class="price-wrap color-darkgrey">
	<?php if( ! empty( $atts['currency'] ) ) : ?>
		<span class="plan-sign"><?php echo wp_kses_post( $atts['currency'] ); ?></span>
	<?php endif; ?>
	<?php if( ! empty( $atts['price'] ) ) : ?>
		<span class="plan-price"><?php echo wp_kses_post( $atts['price'] ); ?></span>
	<?php endif; ?>
	<?php if( ! empty( $atts['price_after'] ) ) : ?>
		<span class="plan-decimals"><?php echo wp_kses_post( $atts['price_after'] ); ?></span>
	<?php endif; ?>
	</div>
	<?php if( ! empty( $atts['description'] ) ) : ?>
	<div class="plan-description small-text color-darkgrey">
		<?php echo wp_kses_post( $atts['description'] ); ?>
	</div>
	<?php endif; ?>
	<?php if( ! empty( $atts['features'] ) ) : ?>
	<div class="plan-features">
		<ul class="list-bordered">
		<?php foreach( ( $atts['features'] ) as $feature ) : ?>
			<li class="<?php echo esc_attr( $feature['feature_checked'] ); ?>">
				<?php echo wp_kses_post( $feature['feature_name'] ); ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
	<?php endif; ?>
	<div class="plan-button">
	<?php
		$wide_button = ( ! empty( $atts['wide_button'] ) ? 'wide_button' : '' )
	?>
		<a href="<?php echo esc_attr( $atts['link'] ) ?>" target="<?php echo esc_attr( $atts['target'] ) ?>"
		   class="<?php echo esc_attr( $atts['color'] . ' ' . $wide_button ); ?>">
			<span><?php echo esc_html( $atts['label'] ); ?></span>
		</a>
	</div>
</div>
<?php endswitch;