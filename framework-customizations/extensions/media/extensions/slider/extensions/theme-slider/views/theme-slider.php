<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
	if ( isset( $data['slides'] ) ):
	$class = ( ! empty ($data['settings']['extra']['class'] ) ) ? $data['settings']['extra']['class'] : '';
	$dots = ( ! empty ($data['settings']['extra']['dots'] ) ) ? $data['settings']['extra']['dots'] : '';
	$nav = ( ! empty ($data['settings']['extra']['nav'] ) ) ? $data['settings']['extra']['nav'] : '';
	$speed = ( ! empty ($data['settings']['extra']['speed'] ) ) ? $data['settings']['extra']['speed'] : '';
?>
<section class="intro_section page_slider <?php echo esc_attr( $class ); ?>">
	<div class="flexslider"
		<?php if ( ! empty( $dots) ) : ?>
			data-dots="<?php echo esc_attr( $dots ) ?>"
		<?php endif; ?>
		<?php if ( ! empty( $nav) ) : ?>
			data-nav="<?php echo esc_attr( $nav ) ?>"
		<?php endif; ?>
		<?php if ( ! empty( $speed) ) : ?>
			data-speed="<?php echo esc_attr( $speed ) ?>"
		<?php endif; ?>
	>
		<ul class="slides">
			<?php foreach ( $data['slides'] as $id => $slide ):
			$slide_background = isset( $slide['extra']['slide_background'] ) ? $slide['extra']['slide_background'] : false;
			$slide_align      = isset( $slide['extra']['slide_align'] ) ? $slide['extra']['slide_align'] : '';
			$slide_vertical_align      = isset( $slide['extra']['slide_vertical_align'] ) ? $slide['extra']['slide_vertical_align'] : '';
			$slide_class      = isset( $slide['extra']['class'] ) ? $slide['extra']['class'] : '';
			$slide_layers     = isset( $slide['extra']['slide_layers'] ) ? $slide['extra']['slide_layers'] : false;

			$button = ! empty( $slide['extra']['button'] ) ? $slide['extra']['button'] : false;
			$show_button = ! empty( $button['show_button'] ) ? true : false;
			?>
			<li class="<?php echo esc_attr( $slide_background . ' ' . $slide_align . ' ' . $slide_class ); ?>">
				<?php if ( $slide['multimedia_type'] == 'video' ) :
						//get the YouTube video ID:
						preg_match( '/(embed\/|v=|\.be\/|\/v\/)([0-9a-zA-Z_-]*)/i', trim( $slide['src'] ), $matches );
						$youtube_video_id = !empty($matches[2]) ? $matches[2] : '';
					?>
					<div class="embed-responsive embed-responsive-16by9">
					<?php
	// you can use this to disable controls and autoplay and disable sound: 'feature=oembed&showinfo=0&autoplay=1&controls=0&mute=1&loop=1&playlist=' . $youtube_video_id
	//short version 'feature=oembed&showinfo=0'
						$iframe = wp_oembed_get( $slide['src'] );
						echo str_replace('feature=oembed', 'feature=oembed&showinfo=0&autoplay=1&controls=0&mute=1&loop=1&playlist=' . $youtube_video_id, $iframe );
					?>
					</div>
				<?php else: ?>
					<img src="<?php echo esc_attr( $slide['src'] ); ?>" alt="<?php echo esc_attr( $slide['title'] ); ?>">
				<?php endif; ?>
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12">
							<div class="intro_layers_wrapper <?php echo esc_attr( $slide_vertical_align ); ?>">
								<div class="intro_layers">
								<?php if ( $slide_layers || $button ) : ?>
									<?php foreach ( $slide_layers as $layer ):
										$layer_class =  ! empty( $layer['class'] ) ? $layer['class'] : '';
									?>
									<div class="intro-layer <?php echo esc_attr( $layer_class ); ?>"
										 data-animation="<?php echo esc_attr( $layer['layer_animation'] ); ?>"
									>
										<<?php echo esc_html( $layer['layer_tag'] ); ?> class="<?php echo( 'p' == $layer['layer_tag'] ) ? 'big' : ''; ?> <?php echo esc_attr( $layer['layer_text_color'] . ' ' . $layer['layer_text_weight'] . ' ' . $layer['layer_text_transform'] ); ?>">
										<?php echo wp_kses_post( $layer['layer_text'] ) ?>
									</<?php echo esc_html( $layer['layer_tag'] ); ?>>
									<?php
										if ( ! empty( $layer['next_event'] )
											&& class_exists( 'Oktan_Unyson_Events_Extends' )
											&& ( ! empty( fw_ext( 'events' ) ) )
										) :
											$e = new Oktan_Unyson_Events_Extends();
											if ( ! empty( $e->next_event ) ) : ?>
												<div class="comingsoon-countdown" data-date="<?php echo esc_attr( $e->next_event['from_timestamp'] * 1000 ); ?>"></div>
											<?php
											//no upcoming event
											else:
												echo esc_html__( 'No upcoming event', 'oktan' );
											endif;
										endif;
									?>
									</div>
								<?php endforeach; //$slide_layers
									if ( $show_button ) :
										$button_animation =  ! empty( $button['button']['button_animation'] ) ? $button['button']['button_animation'] : '';
										?>
										<div class="intro-layer"
											data-animation="<?php echo esc_attr( $button_animation ); ?>"
										>
											<a href="<?php echo esc_url( $button['button']['link'] ); ?>"
											   target="<?php echo esc_attr( $button['button']['target'] ); ?>"
											   class="<?php echo esc_attr( $button['button']['color'] ); ?>">
												<?php echo esc_html( $button['button']['label'] ); ?>
											</a>
										</div>
									<?php endif; //$slide_button
								endif; //$slide_layers || $slide_button ?>
							</div> <!-- eof .intro_layers -->
						</div> <!-- eof .intro_layers_wrapper -->
					</div> <!-- eof .col-* -->
				</div><!-- eof .row -->
			</div><!-- eof .container -->
		</li>
	<?php endforeach; ?>
	</ul>
	</div> <!-- eof flexslider -->
</section> <!-- eof intro_section -->
<?php endif; ?>