<?php
/**
 * The template part for selected header
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$options = oktan_get_options();
$section = oktan_get_section_options( $options, 'header_' );

//get topline


?>
<?php


if( is_active_sidebar( 'sidebar-side-header' ) ){
	?>
	<header class="page_header_side header_slide header-special header_side_right ds">

		<div class="scrollbar-macosx">
			<div class="side_header_inner">
				<p class="text-right mb-0 close-wrapper"><a href="javascript:void(0)">×</a></p>

				<?php dynamic_sidebar( 'sidebar-side-header' ); ?>
			</div>
		</div>
	</header>
<?php

}
?>




<header class="page_header header-1 s-py-10 <?php echo esc_attr( $section['section_class'] ); ?>"
	<?php echo ( !empty( $section['section_id'] ) ) ? 'id="'. esc_attr( $section['section_id'] ) . '"' : ''; ?>
	<?php echo ( !empty( $section['section_background_image'] ) ) ? 'style="'. esc_attr( $section['section_background_image'] ) . '"' : ''; ?>
>
	<div class="container<?php echo esc_attr( $section['section_container_class_suffix'] ); ?>">
		<div class="row d-flex align-items-center justify-content-center">

			<div class="col-xl-3 col-md-4 col-12 text-center">
				<?php get_template_part( 'template-parts/logo/header-logo' ); ?>
			</div>
			<div class="col-xl-6 col-1 text-right">
				<nav class="top-nav">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'     => 'sf-menu nav',
						'container'      => 'ul'
					) );
					?>
				</nav>
			</div>
			<div class="col-xl-3 col-md-7 col-12  d-flex justify-content-md-end">
				<ul class="top-includes">
					<?php if ( ! empty ( $options['meta_phone'] ) ) : ?>
						<li class="metaphone">

							<span>
								 <?php echo esc_html( $options['meta_phone'] ); ?>
							</span>

						</li>
					<?php endif; ?>
					<?php

					if( is_active_sidebar( 'sidebar-side-header' ) ){
						?>
						<li class="special-menu">
							<span class="toggle_menu toggle_menu_side header-slide toggle_menu_side_special"><span></span></span>
						</li>
					<?php
					}
					?>

				</ul>
			</div>

		</div>
	</div>
	<!-- header toggler -->
	<span class="toggle_menu"><span>menu</span></span>
</header>
