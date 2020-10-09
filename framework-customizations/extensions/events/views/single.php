<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
get_header();
global $post;
$options        = fw_get_db_post_option( $post->ID, fw()->extensions->get( 'events' )->get_event_option_id() );
$column_classes = oktan_get_columns_classes();

$option_events =  fw_get_db_post_option( $post->ID );
$gallery_images =  $option_events['post-featured-gallery'];
?>
	<div id="content" class="<?php echo esc_attr( $column_classes['main_column_class'] ); ?>">
		<?php
		// Start the Loop.
		while ( have_posts() ) : the_post(); ?>
			<article
				id="post-<?php the_ID(); ?>" <?php post_class( 'event-single vertical-item content-padding muted-bg' ); ?>>
					<?php if ( ! empty( $gallery_images ) ) : ?>
						<div class="item-media entry-thumbnail">
							<div class="owl-carousel"
							     data-items="1"
							     data-responsive-xs="1"
							     data-responsive-sm="1"
							     data-responsive-md="1"
							     data-responsive-lg="1"
							     data-nav="true"
							     data-dots="true"
							>

							<?php foreach ( $gallery_images as $image ) : ?>
								<div>
									<img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($post->title); ?>">
								</div>
							<?php endforeach; ?>
							</div>
						</div>
						<?php
						else:
							oktan_post_thumbnail();
						endif;
					?>
				<div class="item-content">
					<header class="entry-header">
						<div class="entry-meta item-meta">
							<?php

							echo get_the_term_list( $post->ID, 'fw-event-taxonomy-name', '<span class="cat-links">', ' ', '</span>' );

							oktan_posted_on();

							if ( function_exists( 'fw_ext_feedback' ) ) {
								fw_ext_feedback();
							}
							?>
						</div><!-- .entry-meta -->


						<h1 class="entry-title"><?php the_title(); ?></h1>

						<div class="hero-bg post-adds">
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

					</header><!-- .entry-header -->

					<div class="entry-content">

						<!-- additional information about event -->
						<div class="event-info">
							<p class="event-place">
								<?php
								if ( $options['event_location']['location'] ) : ?>
									<strong class="grey"><?php esc_html_e( 'Place', 'oktan' ) ?>:</strong>
									<?php
									echo esc_html( $options['event_location']['location'] );
								endif;

								if ( $options['event_location']['venue'] ) :
									echo esc_html( ', ' . $options['event_location']['venue'] );
								endif;
								?>
							</p><!-- .event-place-->
							<?php

							foreach ( $options['event_children'] as $key => $row ) : ?>
								<?php if ( empty( $row['event_date_range']['from'] ) or empty( $row['event_date_range']['to'] ) ) : ?>
									<?php continue; ?>
								<?php endif; ?>

								<div class="pull-right">
									<button class="btn btn-maincolor small_button"
									        data-uri="<?php echo add_query_arg( array(
										        'row_id'   => $key,
										        'calendar' => 'google'
									        ), fw_current_url() ); ?>" type="button"><?php esc_html_e( 'Google Calendar',
											'oktan' ) ?></button>
									<button class="btn btn-maincolor2 small_button" data-uri="<?php echo add_query_arg( array(
										'row_id'   => $key,
										'calendar' => 'ical'
									), fw_current_url() ); ?>" type="button"><?php esc_html_e( 'Ical Export',
											'oktan' ) ?></button>
								</div>
								<ul class="list-unstyled">
									<li><strong class="grey"><?php esc_html_e( 'Start', 'oktan' ) ?>
											:</strong> <?php echo wp_kses_post ( $row['event_date_range']['from'] ); ?></li>
									<li><strong class="grey"><?php esc_html_e( 'End', 'oktan' ) ?>
											:</strong> <?php echo wp_kses_post ( $row['event_date_range']['to'] ); ?></li>

								</ul>
							<?php endforeach; ?>
						</div>
						<!-- .additional information about event -->

						<?php
						//tags
						echo get_the_term_list( $post->ID, 'fw-event-tag', '<span class="cat-links">', ' ', '</span>' );
						?>


						<?php the_content(); ?>

						<?php
						$map = fw_ext_events_render_map();
						if ( $map ):
							?>
							<div class="event-map">
								<?php echo fw_ext_events_render_map(); ?>
							</div>
							<?php
						endif; //map
						?>

						<?php do_action( 'oktan_ext_events_after_content' ); ?>
					</div><!-- .entry-content -->
				</div><!-- .item-content -->
			</article>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile; ?>

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