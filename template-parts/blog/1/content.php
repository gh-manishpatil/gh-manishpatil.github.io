<?php
/**
 * The default template for displaying content
 *
 * Used for index/archive.
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

$show_post_thumbnail = (post_password_required() || is_attachment() || !has_post_thumbnail()) ? false : true;
$post_thumbnail = get_the_post_thumbnail(get_the_ID());
$additional_post_class = ($post_thumbnail) ? '' : '';
$blog_align='';
if (oktan_get_option('blog_centered')) {
	$blog_align='text-center';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('ls vertical-item  rounded' . $additional_post_class.' '.$blog_align); ?>>
	<?php oktan_post_thumbnail(); ?>
	<div class="item-content">
		<header class="entry-header">
			<div class="entry-meta">
				<div class="byline">
					<?php
					if ('post' == get_post_type()) :
						oktan_posted_on();
					endif;
					?>
				</div>
				<?php
				if (in_array('category', get_object_taxonomies(get_post_type())) && oktan_categorized_blog() && !oktan_get_option('blog_hide_categories')) :
					oktan_the_categories();
				endif; //categories
				?>
			</div>
			<?php

			the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
			?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			//hidding "more link" in content
			the_content(esc_html__('', 'oktan'));


			wp_link_pages(array(
				'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'oktan') . '</span>',
				'after' => '</div>',
				'link_before' => '<span>',
				'link_after' => '</span>',
			));
			?>
		</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php
				if (!oktan_get_option('blog_hide_tags') || !oktan_get_option('blog_hide_comments_link')) {
				?>
				<div class="after-meta">
					<?php
					if (!oktan_get_option('blog_hide_tags')) :
						?>


						<?php
						the_tags('<div class="cat-links"><span><i class="fa fa-tags" aria-hidden="true"></i></span>', ', ', ' </div>');
						?>

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
				<a class="btn btn-gradient big-btn" href="<?php echo esc_url(get_permalink());?>"><?php esc_html_e( 'read more', 'oktan' ); ?></a>

			</footer>


	</div><!-- eof .item-content -->
</article><!-- #post-## -->
