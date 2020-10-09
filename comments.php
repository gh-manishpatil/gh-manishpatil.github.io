<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$options = oktan_get_options();

//fields are hooked in inc/hooks.php
$title_reply = ( have_comments() )
	? sprintf( _n( esc_html__( 'One comment' , 'oktan' ), esc_html__( '%1$s comments', 'oktan' ), get_comments_number(), 'oktan' ), number_format_i18n( get_comments_number() ) )
	: esc_html__( 'No comments', 'oktan' );
$req = get_option( 'require_name_email' );
$html_req = ( $req ? " required='required'" : '' );

$args = array(

	'fields'               =>  array(
		'author'  => '<p class="comment-form-author form-group has-placeholder">' . '<label for="author">' . esc_html__( 'Name', 'oktan' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
					 '<i class="fa fa-user"></i><input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $html_req . '   placeholder="' . esc_attr__( 'Name', 'oktan' ) . '"/></p>',
		'email'   => '<p class="comment-form-email form-group has-placeholder"><label for="email">' . esc_html__( 'Email', 'oktan' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
					 '<i class="fa fa-envelope"></i><input id="email" name="email" class="form-control"  type="email"  value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" maxlength="100" ' . $html_req . '   placeholder="' . esc_attr__( 'Email', 'oktan' ) . '" /></p>',

	),
    'comment_field'        => '<p class="comment-form-comment form-group has-placeholder"><label for="comment">' . _x( 'Comment', 'noun', 'oktan' ) . '</label><i class="fa fa-pencil-square-o"></i> <textarea id="comment"  class="form-control" name="comment" cols="45" rows="8"  aria-required="true" required="required"  placeholder="' . esc_attr__( 'Comment', 'oktan' ) . '"></textarea></p>',
	'logged_in_as'         => '<p class="logged-in-as">' .
	                          sprintf(
	                          /* translators: 1: edit user link, 2: accessibility text, 3: user name, 4: logout URL */
		                          esc_html__( 'Logged in as ', 'oktan' ) . '<a href="%1$s" aria-label="%2$s">%3$s' .  '</a>. <a href="%4$s">' . esc_html__( 'Log out?', 'oktan' ) . '</a>',
		                          get_edit_user_link(),
		                          /* translators: %s: user name */
		                          esc_attr( sprintf( esc_html__( 'Logged in as %s. Edit your profile.', 'oktan' ), $user_identity ) ),
		                          $user_identity,
		                          wp_logout_url( apply_filters( 'the_permalink', get_permalink( get_the_ID() ) ) )
	                          ) . '</p>',
	'comment_notes_before' => '',
	'class_form'           => 'comment-form',
	'cancel_reply_link'    => esc_html__( 'Cancel reply', 'oktan' ),
	'label_submit'         => esc_html__( 'Send a comment', 'oktan' ),
	'title_reply'          => $title_reply,
	'title_reply_before'   => '<div class=" ' . esc_attr( $options['version'] ) . '"><h4 class="comment-reply-title">',
	'title_reply_after'    => '</h4>',
	'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="btn btn-gradient big-btn %3$s">%4$s</button>',
	'submit_field'         => '<p class="form-submit  mb-0 mt-20 mt-lg-50">%1$s %2$s</p>',
	'format'               => 'html5',
);

//$args = false;

//closing div, that was opened in $args in 'title_reply_before'
add_action( 'comment_form_after', 'oktan_echo_closing_div' );

?>
<div id="comments" class="comments-area">




	<?php if ( have_comments() ) : ?>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-above" class="nav-links" role="navigation">
				<?php paginate_comments_links( array(
					'prev_text' => '<i class="fa fa-chevron-left"></i>',
					'next_text' => '<i class="fa fa-chevron-right"></i>',
				) ); ?>
			</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'walker'      => oktan_return_comments_walker(),
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 80,
			) );
			?>
		</ol><!-- .comment-list -->



		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-below" class="nav-links" role="navigation">
				<?php paginate_comments_links( array(
                    'prev_text' => '<i class="fa fa-chevron-left"></i>',
                    'next_text' => '<i class="fa fa-chevron-right"></i>',
                    )
                ); ?>
			</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'oktan' ); ?></p>
		<?php endif; //comments_open() ?>

	<?php endif; // have_comments() ?>
	<?php comment_form( $args ); ?>
</div><!-- #comments -->