<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Shortcode Posts - title item layout
 */

$terms          = get_the_terms( get_the_ID(), 'category' );
$filter_classes = '';
foreach ( $terms as $term ) {
	$filter_classes .= ' filter-' . $term->slug;
}

//wrapping in div for carousel layout
?>
<article class="widget_blog-post-item <?php echo esc_attr( $filter_classes ); ?>">
	<div <?php post_class( "vertical-item gallery-title-item" ); ?>>
		<?php if ( get_the_post_thumbnail() ) : ?>
			<div class="item-media">
				<?php
				$full_image_src = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
				echo get_the_post_thumbnail();
				?>
                <div class="media-links">
                    <a class="abs-link" href="<?php the_permalink(); ?>"></a>
                </div>
			</div>
		<?php endif; //eof thumbnail check ?>
	</div>
	<div class="item-title text-left">
		<h6 class="item-title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h6>
        <div class="post-adds small-text">
			<?php
			oktan_comments_counter(
				array(
					'before'              => '<span class="comments-link">',
					'after'               => '</span>',
					'password_protected'  => false,
					'comments_are_closed' => false,
				)
			);
			if ( function_exists( 'mwt_post_like_count' ) ) : ?>
                <span class="likes-count">
                    <?php
                        oktan_post_like_count( get_the_ID() );
                    ?>
                </span>
                <span class="post-views-count">
                    <?php
                        oktan_show_post_views_count();
                    ?>
                </span>
			<?php endif; ?>
        </div> <!-- eof .post-adds -->
	</div><!-- eof vertical-item -->
</article><!-- eof blog-post-item -->