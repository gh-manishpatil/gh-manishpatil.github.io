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
<section class="page_title <?php echo esc_attr( $section['section_class'] ); ?>"
    <?php echo ( !empty( $section['section_id'] ) ) ? 'id="'. esc_attr( $section['section_id'] ) . '"' : ''; ?>
    <?php echo ( !empty( $section['section_background_image'] ) ) ? 'style="'. esc_attr( $section['section_background_image'] ) . '"' : ''; ?>
>
	<div class="container<?php echo esc_attr( $section['section_container_class_suffix'] ); ?>">
		<div class="row align-items-center">
			<div class="col-lg-12">
                <div class="d-lg-flex justify-content-start align-items-center">
                    <h1 class="bold title-inline">
                    <?php
                        get_template_part( 'template-parts/title/page-title-text' );
                    ?>
                    </h1>

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
