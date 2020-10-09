<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

?>

<div class="<?php echo esc_attr( $atts['countdown_variant']); ?>" id="comingsoon-countdown" data-date="<?php echo esc_attr( $atts["datetime"] );?>"></div>