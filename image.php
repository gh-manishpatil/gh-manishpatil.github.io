<?php
/**
 * The template for displaying image attachments
 */

get_header();

// Retrieve attachment metadata.
$metadata       = wp_get_attachment_metadata();
$column_classes = oktan_get_columns_classes(); ?>
	<div id="content" class="<?php echo esc_attr( $column_classes['main_column_class'] ); ?> content-area image-attachment">
		<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<div class="entry-attachment">
						<div class="attachment">
							<?php oktan_the_attached_image(); ?>
						</div><!-- .attachment -->

						<?php if ( has_excerpt() ) : ?>
							<div class="entry-caption">
								<?php the_excerpt(); ?>
							</div><!-- .entry-caption -->
						<?php endif; ?>
					</div><!-- .entry-attachment -->
					<header class="entry-header">
						<div class="entry-meta item-meta">
							<span class="full-size-link cat-links"><a
									href="<?php echo wp_get_attachment_url(); ?>"><?php echo esc_html( $metadata['width'] ); ?> &times; <?php echo esc_html( $metadata['height'] ); ?></a></span>
							<?php oktan_posted_on( true, true ); ?>
							<?php esc_html_e( 'in', 'oktan' ); ?> <span class="parent-post-link links-darkgrey"><a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php echo get_the_title( $post->post_parent ); ?></a></span>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->
					<?php
					the_content();
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'oktan' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<nav id="image-navigation"
			     class="navigation image-navigation hero-bg p-40 links-darkgrey">
				<div class="display_table">
					<div class="display_table_cell">
						<?php previous_image_link( false, '<div class="previous-image">' . esc_html__( 'Previous Image', 'oktan' ) . '</div>' ); ?>
					</div>
					<div class="display_table_cell text-right">
						<?php next_image_link( false, '<div class="next-image">' . esc_html__( 'Next Image', 'oktan' ) . '</div>' ); ?>
					</div>
				</div><!-- .nav-links -->
			</nav><!-- #image-navigation -->

			<?php comments_template(); ?>

		<?php endwhile; // end of the loop. ?>
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