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
<article id="post-<?php the_ID(); ?>" <?php post_class( 'vertical-item content-padding bordered' ); ?>>
	<?php oktan_post_thumbnail(); ?>
	<div class="item-content entry-content">

		<header class="entry-header">
			<?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
			<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() ) :
					oktan_posted_on();

					oktan_comments_counter(
						array(
							'before' => '<span class="comments-link links-darkgrey pull-right">',
							'after' => '</span>'
						)
					);
				endif; //'post' == get_post_type()
			?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_excerpt();
			//categories
			if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && oktan_categorized_blog() &&  ! oktan_get_option( 'blog_hide_categories' ) ) :
				oktan_the_categories();
			endif; //categories ?>
		</div><!-- .entry-content -->

	</div><!-- eof .item-content -->
</article><!-- #post-## -->
