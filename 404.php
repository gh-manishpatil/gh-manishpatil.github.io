<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header();

$options = oktan_get_options();
$section = oktan_get_section_options($options, '404_');
?>
<section class="page_404 <?php echo esc_attr( $section['section_class'] ); ?>"
	<?php echo ( !empty( $section['section_id'] ) ) ? 'id="'. esc_attr( $section['section_id'] ) . '"' : ''; ?>
	<?php echo ( !empty( $section['section_background_image'] ) ) ? 'style="'. esc_attr( $section['section_background_image'] ) . '"' : ''; ?>
>
	<div class="container<?php echo esc_attr( $section['section_container_class_suffix'] ); ?>">
		<div class="row<?php echo esc_attr( $section['section_row_class_suffix'] ); ?>">
<?php
//true - no sidebar on 404 page
$column_classes = oktan_get_columns_classes( true ); ?>
	<div id="content" class="<?php echo esc_attr( $column_classes['main_column_class'] ); ?> text-center">

			<?php echo (!empty($options['404_image_text'])) ? '<img src="'.esc_url($options['404_image_text']['url']).'" alt="'. esc_attr('img') .'">' : ''?>
			<?php echo (!empty($options['404_text']) || empty($options['404_image_text'])) ? '<h2  class="special-heading  text-center ">'.esc_attr($options['404_text']).'</h2>' : '';?>

				<h3 class="text-center"> <?php esc_html_e( 'The Page You Requested Cannot Be Found!', 'oktan' ); ?></h3>
				 <div class="widget widget_search">
					<?php get_search_form(); ?>
				</div>
				<div class="divider-60 hidden-below-lg"></div>
				<div class="divider-30 hidden-above-lg"></div>
				<div class="d-flex flex-wrap justify-content-center">
				 <a href="<?php echo esc_url( home_url( '/')); ?>" class="btn btn-darkgrey big-btn">
			    	<?php esc_html_e( 'Go back home', 'oktan' ); ?>
            	</a>
				<?php

				if(!empty($options['buttons_404'])){
				 foreach ($options['buttons_404'] as $key=>$button) :?>

					<?php
						 $wide_button = ( ! empty( $button['wide_button'] ) ? 'wide_button' : '' )
					?>
					<a href="<?php echo esc_attr( $button['link'] ) ?>"
						target="<?php echo esc_attr( $button['target'] ) ?>"
						class="<?php echo esc_attr( $button['color'] . ' ' . $wide_button.' '.$button['size'] ); ?>">
						<span><?php echo esc_html( $button['label'] ); ?></span>
					</a>

                <?php endforeach;}?>

				</div>
	</div><!--eof #content -->

<?php if ( $column_classes['sidebar_class'] ): ?>
	<!-- main aside sidebar -->
	<aside class="<?php echo esc_attr( $column_classes['sidebar_class'] ); ?>">
		<?php get_sidebar(); ?>
	</aside>
	<!-- eof main aside sidebar -->
	<?php
endif;
get_footer();