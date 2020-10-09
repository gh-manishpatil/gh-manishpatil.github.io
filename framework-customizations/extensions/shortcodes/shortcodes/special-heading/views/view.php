<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var $atts
 */

if ( ! $atts['headings'] ) {
	return;
}

foreach ( $atts['headings'] as $key => $heading ) :
	$class = '';
	//for headings
	if ( $heading['heading_tag'] !== 'p' ) :
		$class .= 'special-heading';
	else:
		$class .= 'special-heading';
	endif;
	//for paragraph

	$icon_array = oktan_get_unyson_icon_type_v2_array_for_special_heading( $atts, $key );
	$heading_text_type = !empty($heading['heading_text_type']) ? $heading['heading_text_type'] : '';
	?>
	<<?php echo esc_html( $heading['heading_tag'] ); ?> class="<?php echo esc_attr( $class . ' ' . $atts['heading_align'] ); ?>">
	<?php if ( !empty( $icon_array ) ) :
		echo wp_kses_post( $icon_array['icon_html'] );
	endif; ?>
	<span class="<?php echo esc_attr( trim (
			$heading['heading_text_color']
			. ' ' .
			$heading['heading_text_weight']
			. ' ' .
			$heading['heading_text_transform']
			. ' ' .
			$heading['heading_text_size'] )
		. ' ' .
		$heading_text_type
	);
	?>">
		<?php echo wp_kses_post( $heading['heading_text'] ) ?>
	</span>
	</<?php echo esc_html( $heading['heading_tag'] ); ?>>
<?php endforeach; ?>