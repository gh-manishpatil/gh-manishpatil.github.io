<?php
/**
 * The Template for displaying all single posts
 */

get_header();
$column_classes = oktan_get_columns_classes();

$show_post_thumbnail = (post_password_required() || is_attachment() || !has_post_thumbnail()) ? false : true;


?>
	<div id="content" class="<?php echo esc_attr($column_classes['main_column_class']); ?>">
		<?php
		// Start the Loop.
		while (have_posts()) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('vertical-item single-post bordered'); ?>>
				<?php

				oktan_post_thumbnail();

				?>
				<?php if (has_post_thumbnail() || get_post_format() === 'gallery') : ?>
				<?php endif; ?>


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

					</header><!-- .entry-header -->
					<div class="entry-content">
					<?php
					the_content(esc_html__('More...', 'oktan'));
					?>
					<?php
					wp_link_pages(array(
						'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'oktan') . '</span>',
						'after' => '</div>',
						'link_before' => '<span>',
						'link_after' => '</span>',
					));
					?>
				</div><!-- .entry-content -->
			<?php
			if (!oktan_get_option('blog_hide_tags') || !oktan_get_option('blog_hide_comments_link') || function_exists('mwt_share_this' )) {
				?>
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
							<?php
							if( function_exists('oktan_share_this' ) ){
								?>
								<div class="share">

									<?php oktan_share_this(true); ?>
								</div>

								<?php
							}
							?>
						</footer>
				<?php
			}
			?>


				</div>
			</article><!-- #post-## -->


			<?php


			// Previous/next post navigation. Uncomment following line if you need post navigation


			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) {
				comments_template();
			}
			// Previous/next post navigation. Uncomment following line if you need post navigation


		endwhile; ?>
	</div><!--eof #content -->

<?php if ($column_classes['sidebar_class']): ?>
	<!-- main aside sidebar -->
	<aside class="<?php echo esc_attr($column_classes['sidebar_class']); ?>">
		<?php get_sidebar(); ?>
	</aside>
	<!-- eof main aside sidebar -->
<?php
endif;
get_footer();