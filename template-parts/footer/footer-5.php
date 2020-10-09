<?php
/**
 * The template part for selected footer
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$options = oktan_get_options();
$section = oktan_get_section_options( $options, 'footer_' );

?>
<footer class="page_footer text-sm-left text-center <?php echo esc_attr( $section['section_class'] ); ?>"
	<?php echo ( !empty( $section['section_id'] ) ) ? 'id="'. esc_attr( $section['section_id'] ) . '"' : ''; ?>
	<?php echo ( !empty( $section['section_background_image'] ) ) ? 'style="'. esc_attr( $section['section_background_image'] ) . '"' : ''; ?>
>
	<div class="container<?php echo esc_attr( $section['section_container_class_suffix'] ); ?>">
		<div class="row justify-content-center<?php echo esc_attr( $section['section_row_class_suffix'] ); ?>">
			<div class="col-lg-4 col-md-6 order-1 order-lg-1">
				<div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
				<?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
				<div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-30"></div>
			</div>
			<div class="col-lg-4 col-md-12 ls order-3 order-lg-2 footer-special-column text-center">
				<?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
				<h6 class="fs-12 text-uppercase">
					<?php echo ( ! empty ( $options['copyright_text'] ) )
						? wp_kses_post( $options['copyright_text'] )
						: esc_html__( 'Powered by WordPress', 'oktan' ) . ' &copy; ' . date('Y' ); ?>
				</h6>
			</div>
			<div class="col-lg-4 col-md-6 order-2 order-lg-3">
				<div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90"></div>
				<?php dynamic_sidebar( 'sidebar-footer-3' ); ?>
				<div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-60 divider-30"></div>
			</div>


		</div>
	</div>
</footer><!-- .page_footer -->