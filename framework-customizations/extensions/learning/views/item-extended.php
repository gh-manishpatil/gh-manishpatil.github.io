<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}
/**
 * Portfolio - extended item layout
 */

//wrapping in div for carousel layout
?>
<div class="vertical-item content-padding hero-bg text-center">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="item-media">
			<?php
			$full_image_src = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
			oktan_post_thumbnail();
			?>
			<div class="media-links">
				<a class="abs-link" href="<?php the_permalink(); ?>"></a>
			</div>
		</div>
	<?php endif; //has_post_thumbnail ?>
	<div class="item-content">
		<h3 class="item-title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
		<?php
		oktan_the_categories( array(
			'taxonomy' => 'fw-learning-courses-taxonomy',
			'items_separator' => ' ',
		) );

		the_excerpt( array(
			'length' => 15,
			'before' => '<div class="excerpt">',
			'after'  => '</div>',
		) );
		?>
		<div class="item-button">
			<a href="<?php the_permalink(); ?>" class="btn btn-outline-darkgrey">
				<?php esc_html_e( 'Learn More', 'oktan' ); ?>
			</a>
		</div>
	</div>
</div><!-- eof vertical-item -->
