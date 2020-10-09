<?php
	/**
	 * The template part for selected header
	 */
	
	if ( !defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
	
	$options = oktan_get_options();
	$section = oktan_get_section_options( $options, 'topline_' );
	
	//topline section with contact info and search button
?>
<section class="page_topline c-my-10 <?php echo esc_attr( $section['section_class'] ); ?>"
	<?php echo ( !empty( $section['section_id'] ) ) ? 'id="' . esc_attr( $section['section_id'] ) . '"' : ''; ?>
	<?php echo ( !empty( $section['section_background_image'] ) ) ? 'style="' . esc_attr( $section['section_background_image'] ) . '"' : ''; ?>
>
	<div class="container<?php echo esc_attr( $section['section_container_class_suffix'] ); ?>">
		<div class="row align-items-center">
			<div class="col-12 text-center">
				<?php if ( !empty ( $options['social_icons'] ) && !empty ( $options['fw'] ) ) : ?>
					<span class="social-icons">
				<?php
					//get icons-social shortcode to render icons in team member item
					$shortcodes_extension = fw()->extensions->get( 'shortcodes' );
					if ( !empty( $shortcodes_extension ) ) :
						echo fw_ext( 'shortcodes' )->get_shortcode( 'icons_social' )->render( array( 'social_icons' => $options['social_icons'] ) );
					endif; //?>
				</span>
				<?php endif; //social_icons ?>
			</div>
		</div>
	</div>
</section><!-- .page_topline -->
