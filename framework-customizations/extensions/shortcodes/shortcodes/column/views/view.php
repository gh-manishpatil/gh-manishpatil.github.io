<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$class = fw_ext_builder_get_item_width( 'page-builder', $atts['width'] . '/frontend_class' );

$class .= ( ! empty( $atts['column_animation'] ) && $atts['column_animation'] ) ? ' animate' : '';
$class .= ( ! empty( $atts['column_align'] ) ) ? ' ' . $atts['column_align'] : '';
$class .= ( ! empty( $atts['text_align_sm'] ) ) ? ' ' . $atts['text_align_sm'] : '';
$class .= ( ! empty( $atts['text_align_md'] ) ) ? ' ' . $atts['text_align_md'] : '';
$class .= ( ! empty( $atts['text_align_lg'] ) ) ? ' ' . $atts['text_align_lg'] : '';
$class .= ( ! empty( $atts['text_align_xl'] ) ) ? ' ' . $atts['text_align_xl'] : '';
$class .= ( ! empty( $atts['hidden_xs'] ) ) ? ' ' . $atts['hidden_xs'] : '';
$class .= ( ! empty( $atts['hidden_sm'] ) ) ? ' ' . $atts['hidden_sm'] : '';
$class .= ( ! empty( $atts['hidden_md'] ) ) ? ' ' . $atts['hidden_md'] : '';
$class .= ( ! empty( $atts['hidden_lg'] ) ) ? ' ' . $atts['hidden_lg'] : '';
$class .= ( ! empty( $atts['hidden_xl'] ) ) ? ' ' . $atts['hidden_xl'] : '';
$class .= ( ! empty( $atts['background_color'] ) ) ? ' ' . $atts['background_color'] : '';
$class .= ( ! empty( $atts['column_additional_class'] ) ) ? ' ' . $atts['column_additional_class'] : '';
$column_overlay = ( ! empty( $atts['column_overlay'] ) ) ? ' ' . $atts['column_overlay'] : '';
$data_animation = ( ! empty( $atts['column_animation'] ) && $atts['column_animation'] ) ? 'data-animation="' . esc_attr( $atts['column_animation'] ) . '"' : '';
?>


<div class="<?php echo esc_attr( $class ); ?>"  <?php echo wp_kses_post( $data_animation ); ?>>

	<?php
	if ( ! empty( $atts['column_padding'] ) || ! empty( $atts['special_column'] ) || ! empty( $column_overlay ) || !empty ($atts['column_image']['url']) ) : ?>
	<div class="<?php echo esc_attr( $atts['column_padding'] . ' ' . $atts['special_column']. ' ' . $column_overlay. ' ' . $atts['background_color'] ); ?>  <?php echo esc_attr( ($atts['column_image']) ? 'cover-image position-relative' : '' )?>">
		<?php if ( !empty ($atts['column_image']['url']) ) : ?>
			<img class="d-none" src="<?php echo esc_attr($atts['column_image']['url'] )?>" alt="<?php echo esc_attr( 'bg-image' ); ?>">
		<?php endif; ?>
	<?php endif; //column_padding

		//showing column content
		echo do_shortcode( $content );

	if ( ! empty( $atts['column_padding'] ) || ! empty( $atts['special_column'] ) || ! empty( $column_overlay ) || !empty ($atts['column_image']['url']) ) : //closing optional column_padding div ?>
	</div>
	<?php endif; ?>
</div><!-- .col-* -->
