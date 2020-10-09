<?php
/**
 * The default template for displaying quote content
 *
 * Used for both index/archive/.
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$show_post_thumbnail = ( post_password_required() || is_attachment() || !has_post_thumbnail() ) ? false : true;
$post_thumbnail = get_the_post_thumbnail(get_the_ID());
$blog_align='';
if (oktan_get_option('blog_centered')) {
	$blog_align='text-center';
}
$additional_post_class = ($post_thumbnail) ? 'cover-image ds s-overlay rounded' : 'ls content-padding rounded';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('vertical-item    ' . $additional_post_class.' '.$blog_align); ?>>
    <?php
    echo empty ($post_thumbnail) ? '<div class="bg_overlay"></div>' : '';
    echo wp_kses_post($post_thumbnail);
    ?>
	<div class="item-content">
		<header class="entry-header">
			<?php
			the_title('<h3 class="entry-title">', '</h3>');
			?>
			<div class="entry-meta">
				<div class="quote-image">
					<?php
					global $post;

					echo get_avatar( $post->post_author );
					?>
				</div>

				<span class="avtar-name">
				<?php
				echo get_the_author_meta( 'nickname', $post->post_author );
				?>
			</span>
			</div>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			the_content(esc_html__('', 'oktan'));

			?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<div class="entry-meta">
				<?php
				if ('post' == get_post_type()) {
					oktan_posted_on(true, true);
				}
				?>
			</div><!-- .entry-meta -->
			<?php
			if(! oktan_get_option( 'blog_hide_tags' ) || ! oktan_get_option( 'blog_hide_comments_link' )){
				?>
				<div class="after-meta">
					<?php
					if (  ! oktan_get_option( 'blog_hide_tags' ) ) :
						?>
						<div class="cat-links">
							<span><i class="fa fa-tags" aria-hidden="true"></i></span>
							<?php
							the_tags('', ', ', '');
							?>
						</div>
					<?php
					endif; //tags
					?>

					<?php
					if ('post' == get_post_type()) :oktan_comments_counter(array('before' => '<div class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i>', 'after' => '</div>'));
					endif; //'post' == get_post_type()
					?>

				</div>
				<?php
			}
			?>
		</footer>
	</div>



</article><!-- #post-## -->