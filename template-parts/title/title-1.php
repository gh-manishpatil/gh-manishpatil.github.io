<?php
/**
 * The template part for selected title (breadcrubms) section
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$options = oktan_get_options();
$section = oktan_get_section_options($options, 'title_');
?>
<section class="page_title ttt <?php echo esc_attr( $section['section_class'] ); ?>"
    <?php echo ( !empty( $section['section_id'] ) ) ? 'id="'. esc_attr( $section['section_id'] ) . '"' : ''; ?>
    <?php echo ( !empty( $section['section_background_image'] ) ) ? 'style="'. esc_attr( $section['section_background_image'] ) . '"' : ''; ?>
>
	<div class="container<?php echo esc_attr( $section['section_container_class_suffix'] ); ?>">
		<div class="row<?php echo esc_attr( $section['section_row_class_suffix'] ); ?>">
			<div class="col-md-12 text-center">
				<h1>
                <?php
					get_template_part( 'template-parts/title/page-title-text' );
                ?>
				</h1>
				<div class="breadcrumb-wrap">
					<?php
					if ( function_exists( 'fw_ext_breadcrumbs' ) ) {
						fw_ext_breadcrumbs();
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section><!--.page_title-->