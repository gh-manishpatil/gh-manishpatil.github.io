<?php
/**
 * The template part for selected copyrights section
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$options = oktan_get_options();
$section = oktan_get_section_options( $options, 'copyright_' );
?>
<section class="page_copyright <?php echo esc_attr( $section['section_class'] ); ?>"
	<?php echo ( !empty( $section['section_id'] ) ) ? 'id="'. esc_attr( $section['section_id'] ) . '"' : ''; ?>
	<?php echo ( !empty( $section['section_background_image'] ) ) ? 'style="'. esc_attr( $section['section_background_image'] ) . '"' : ''; ?>
>
	<div class="container<?php echo esc_attr( $section['section_container_class_suffix'] ); ?>">
		<div class="row align-items-center">
			<div class="col-sm-12 text-center">
				<?php echo ( ! empty ( $options['copyright_text'] ) )
					? wp_kses_post( $options['copyright_text'] )
					: esc_html__( 'Powered by WordPress', 'oktan' ) . ' &copy; ' . date('Y' ); ?>
			</div>
		</div>
	</div>
</section><!-- .page_copyright -->