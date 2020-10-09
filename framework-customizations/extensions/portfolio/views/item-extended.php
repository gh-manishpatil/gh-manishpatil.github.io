<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}
/**
 * Portfolio - extended item layout
 */

//wrapping in div for carousel layout
?>

<div class="vertical-item text-center content-padding bordered rounded overflow-hidden">
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="item-media">
            <?php
            $full_image_src = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
            the_post_thumbnail('oktan-gallery-2');
            ?>
            <div class="media-links">
                <div class="links-wrap">
                    <a class="link-zoom photoswipe-link"
                       href="<?php echo esc_attr( $full_image_src ); ?>"></a>
					<a class="link-anchor" href="<?php the_permalink(); ?>"></a>
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

     <?php
     oktan_the_excerpt( array(
         'length' => 15,
         'before' => '<p>',
         'after'  => '</p>',
         'more'  => '',
     ) );
     ?>

    </div>
</div>

