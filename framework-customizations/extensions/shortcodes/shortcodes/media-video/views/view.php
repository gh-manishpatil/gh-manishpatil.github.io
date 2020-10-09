<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

global $wp_embed;
$unique_id = uniqid();


$link = $atts['media_link'];
$video_side = $atts['media_video'];
$video_frame = $video_side ? wp_oembed_get( $video_side ) : false;
?>

<div class="video-shortcode">

	<a href="<?php echo esc_url( $link ); ?>" <?php echo ( !empty( $video_frame ) ) ? ' class="photoswipe-link embed-placeholder" data-iframe="' . esc_attr( $video_frame ) . '"' : '' ?>></a>
</div>