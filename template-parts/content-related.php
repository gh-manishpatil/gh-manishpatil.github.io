<?php
/**
 * The default template for displaying related posts
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$show_post_thumbnail = ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) ? false : true;

$post_thumbnail        = get_the_post_thumbnail( get_the_ID() );
$additional_post_class = ( $post_thumbnail ) ? 'has-post-thumbnail' : '';
?>
<article <?php post_class( "vertical-item content-padding hero-bg text-center" . $additional_post_class ); ?>>
	<?php if ( get_the_post_thumbnail() ) : ?>
		<div class="item-media">
			<?php
			echo get_the_post_thumbnail();
			?>
			<div class="media-links">
				<a class="abs-link" href="<?php the_permalink(); ?>"></a>
			</div>
		</div>
	<?php endif; //eof thumbnail check ?>
	<div class="item-content">
		<h3 class="item-title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
		<?php oktan_posted_on();

		oktan_the_categories();

		oktan_the_excerpt( array(
			'length' => 15,
			'before' => '<div class="excerpt">',
			'after'  => '</div>',
		) );
		?>
	</div>
	<?php if( function_exists( 'mwt_post_like_button' ) ) : ?>
		<div class="item-icons links-grey">
			<div>
				<i class="fa fa-eye color-main"></i>
				<?php
				oktan_show_post_views_count();
				?>
			</div>
			<?php
			// Set up and print post meta information.
			if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
				?>
				<div>
				<span class="comments-link">
					<i class="fa fa-comment color-main"></i>
					<?php comments_popup_link( esc_html__( '0', 'oktan' ), esc_html__( '1', 'oktan' ), esc_html__( '%', 'oktan' ) ); ?>
				</span>
				</div>
			<?php
			endif; //password
			?>
			<div>
				<i class="fa fa-heart color-main"></i>
				<?php
				oktan_post_like_button( get_the_ID() );
				oktan_post_like_count( get_the_ID() );
				?>
			</div>
		</div>
	<?php endif; //mwt_post_like_button ?>
</article><!-- eof vertical-item -->