<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}
/**
 *  Portfolio - regular item layout
 */
?>
<div class="vertical-item gallery-item content-absolute text-center ds">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="item-media">
			<?php
			$full_image_src = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
			the_post_thumbnail($thumb);
			?>
			<div class="media-links">
				<div class="links-wrap">
					<a class="link-zoom photoswipe-link"
					   href="<?php echo esc_attr( $full_image_src ); ?>"></a>
				</div>
			</div>
		</div>
	<?php endif; //has_post_thumbnail ?>
	<div class="item-content">
        <h6>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h6>

	</div>
</div>