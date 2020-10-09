<?php
/**
 * The default template for displaying content
 *
 * Used for index/archive.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$show_post_thumbnail = ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) ? false : true;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'vertical-item' ); ?>>
	<?php oktan_post_thumbnail(); ?>
	<div class="item-content entry-content">

		<header class="entry-header">
			<?php
				the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			?>
			<div class="entry-meta"><?php
				if ( 'post' == get_post_type() ) :
					oktan_posted_on();

					oktan_comments_counter(
						array(
							'before' => '<span class="comments-link links-darkgrey pull-right">',
							'after' => '</span>',
							'password_protected' => false,
							'comments_are_closed' => false,
						)
					);
				endif; //'post' == get_post_type()

				if ( ! is_search() && function_exists( 'mwt_post_like_count' ) && false ) : ?>
					<div class="muted-bg post-adds">
						<?php
							oktan_share_this();
							oktan_post_like_button( get_the_ID() );
							oktan_post_like_count( get_the_ID() );
						?>
						<span class="views-count bg-maincolor">
						<?php
							oktan_show_post_views_count();
						?>
						</span>
					</div> <!-- eof .post-adds -->
				<?php endif; //is_search 
				?></div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			//hidding "more link" in content
			the_content( esc_html__( 'More...', 'oktan' ) );

			//categories
			if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && oktan_categorized_blog() &&  ! oktan_get_option( 'blog_hide_categories' ) ) :
				oktan_the_categories();
			endif; //categories

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'oktan' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
			?>
		</div><!-- .entry-content -->
	</div><!-- eof .item-content -->
</article><!-- #post-## -->
