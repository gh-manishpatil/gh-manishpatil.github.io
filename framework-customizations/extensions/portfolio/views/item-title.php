<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}
/**
 * Widget Portfolio - title item layout
 */

//wrapping in div for carousel layout
?>

<div class="vertical-item bordered rounded overflow-hidden text-center">
    <div class="item-media">
        <?php
        $full_image_src = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
        the_post_thumbnail('oktan-gallery-2');
        ?>
        <div class="media-links">
            <div class="links-wrap">
                <a class="link-zoom photoswipe-link"
                   href="<?php echo esc_attr( $full_image_src ); ?>"></a>
				<a class="link-anchor"  href="<?php the_permalink(); ?>"></a>
            </div>
        </div>
    </div>
    <div class="item-content small-padding">
        <h6>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h6>
    </div>
</div>



