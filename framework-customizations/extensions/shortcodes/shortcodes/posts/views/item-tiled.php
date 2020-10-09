<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Shortcode Posts - extended item layout
 */

?>

<div <?php post_class( "vertical-item ls rounded" ); ?>>
	<?php if ( get_the_post_thumbnail() ) : ?>

		<div class="item-media entry-thumbnail post-thumbnail  ">
			<?php
			the_post_thumbnail( 'oktan-full-width' );
			?>
			<div class="media-links">
				<a class="abs-link" href="<?php the_permalink(); ?>"></a>
			</div>
		</div>

	<?php endif; //eof thumbnail check ?>
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
			</div>
			<h4 class="entry-title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h4>

			<!-- .entry-meta -->
		</header>
		<!-- .entry-header -->

		<div class="entry-content">
			<?php
			oktan_the_excerpt( array(
				'length' => 50,
				'before' => '<p>',
				'after'  => '</p>',
				'more'  => '.',
			) );
			?>
		</div><!-- .entry-content -->
	</div>

</div><!-- eof vertical-item -->
