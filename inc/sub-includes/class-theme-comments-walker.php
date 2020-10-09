<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

if ( class_exists( 'Oktan_Comments_Walker' ) ) {
	return;
}

/**
 * Walker for comments
 */
class Oktan_Comments_Walker extends Walker_Comment {

	/**
	 * Outputs a comment in the HTML5 format.
	 *
	 * @since 3.6.0
	 *
	 * @see   wp_list_comments()
	 *
	 * @param WP_Comment $comment Comment to display.
	 * @param int        $depth   Depth of the current comment.
	 * @param array      $args    An array of arguments.
	 */
	protected function html5_comment( $comment, $depth, $args ) {
		$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
		?>
		<<?php echo esc_attr( $tag ); ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children
			? 'parent' : '', $comment ); ?>>
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<header class="comment-meta">
				<div class="comment-meta-left">
					<span class="comment-metadata">
						<?php oktan_comment_date( array(
							'days_ago' => true
						) ) ?>

					</span><!-- .comment-metadata -->
					<span class="comment-author vcard">
						<?php if ( 0 != $args['avatar_size'] ) {
							echo get_avatar( $comment, $args['avatar_size'] );
						} ?>
						<?php
						/* translators: %s: comment author link */
						printf( __( '%s ', 'oktan' ),
							sprintf( '<b class="fn">%s</b>',
								get_comment_author_link( $comment ) )
						);
						?>
					</span><!-- .comment-author -->
				</div>
				<div class="comment-meta-right">
					<?php edit_comment_link( esc_html__( 'Edit', 'oktan' ),
						'<span class="edit-link">', '</span>' ); ?>
					<?php
					comment_reply_link( array_merge( $args, array(
						'add_below' => 'div-comment',
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
						'before'    => '<span class="reply">',
						'after'     => '</span>'
					) ) );
					?>
				</div>




			</header><!-- .comment-meta -->

			<div class="comment-content">
				<?php comment_text(); ?>
				<?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation color-main"><?php esc_html_e( 'Your comment is awaiting moderation.', 'oktan' ); ?></p>
				<?php endif; ?>
			</div><!-- .comment-content -->


		</article><!-- .comment-body -->
		<?php
	}
}