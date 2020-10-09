<?php
/**
 * The template part for selected header
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$options = oktan_get_options();
$section = oktan_get_section_options( $options, 'topline_' );

//if page_header layout is 2 - adding additional CSS classes
if( $options['page_header'] == 2 ) {
    $section['section_class'] .= '';
}

//topline section with social icons and search button
?>
<section class="page_topline topline-1 py-9 <?php echo esc_attr( $section['section_class'] ); ?>"
	<?php echo ( !empty( $section['section_id'] ) ) ? 'id="'. esc_attr( $section['section_id'] ) . '"' : ''; ?>
	<?php echo ( !empty( $section['section_background_image'] ) ) ? 'style="'. esc_attr( $section['section_background_image'] ) . '"' : ''; ?>
>
	<div class="container<?php echo esc_attr( $section['section_container_class_suffix'] ); ?>">
		<div class="row align-items-center">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 text-md-left text-center ">
				<?php
					if ( !empty ( $options['social_icons'] ) && !empty ( $options['fw'] ) ) :
				?>
				<span class="social-icons">
				<?php
					//get icons-social shortcode to render icons in team member item
					$shortcodes_extension = fw()->extensions->get( 'shortcodes' );
					if ( ! empty( $shortcodes_extension ) ) :
						echo fw_ext( 'shortcodes' )->get_shortcode( 'icons_social' )->render( array( 'social_icons' => $options['social_icons'] ) );
					endif; //
					?>
				</span>
				<?php endif; //social_icons ?>
			</div>
			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 d-flex justify-content-md-end justify-content-center align-items-center">
				<ul class="top-includes">
					<?php if ( ! empty ( $options['meta_phone'] ) ) : ?>
						<li>
						<span class="icon-inline">
							<span class="icon-styled color-main">
								<i class="fa fa-phone"></i>
							</span>
							<strong class="color-darkgrey">
								<?php esc_html_e( 'Phone:', 'oktan' ); ?>
							</strong>
							<span>
								 <?php echo esc_html( $options['meta_phone'] ); ?>
							</span>
						</span>
						</li>
					<?php endif; ?>
					<?php if ( ! empty ( $options['meta_email'] ) ) : ?>
						<li>
						<span class="icon-inline">
							<span class="icon-styled color-main">
								<i class="fa fa-envelope"></i>
							</span>
							<strong class="color-darkgrey">
								<?php esc_html_e( 'Email:', 'oktan' ); ?>
							</strong>
							<span>
								<a href="mailto:<?php echo esc_attr( $options['meta_email'] ); ?>">
									<?php echo esc_html( $options['meta_email'] ); ?>
								</a>
							</span>
						</span>
						</li>
					<?php endif; ?>
					<?php if ( ! empty ( $options['meta_address'] ) ) : ?>
						<li>
						<span class="icon-inline">
							<span class="icon-styled color-main">
								<i class="fa fa-map-marker"></i>
							</span>
							<strong class="color-darkgrey">
								<?php esc_html_e( 'Address:', 'oktan' ); ?>
							</strong>
							<span>
								<?php echo esc_html( $options['meta_address'] ); ?>
							</span>
						</span>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</section><!-- .page_topline -->