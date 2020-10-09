<?php
/**
 *    The Header Logo for our theme
 *
 *    Displays logo in header section
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$options = oktan_get_options();
$section = oktan_get_section_options( $options, 'header_' );

$logo_image_key = 'logo_image';
//if dark or color section background - take inverse image
if( ( strpos($section['section_class'], 'ds' ) !== false ) || ( strpos($section['section_class'], 'cs' ) !== false ) ) {
	$logo_image_key = 'logo_image_inverse';
}

$logo_image = oktan_get_option( $logo_image_key, '' );
$logo_text  = oktan_get_option( 'logo_text', get_option( 'blogname' ) );
$logo_subtext  = oktan_get_option( 'logo_subtext');
$logo_class = 'logo';
if ( ! $logo_text ) {
	$logo_class .= ' logo_image_only';
}
if ( ! $logo_image ) {
	$logo_class .= ' logo_text_only';
}
if ( $logo_image && $logo_text ) {
	$logo_class .= ' logo_image_and_text';
}
?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
   rel="home" class="<?php echo esc_attr( $logo_class ); ?>">
	<?php if ( $logo_image ) : ?>
		<img src="<?php echo esc_attr( $logo_image['url'] ); ?>" alt="<?php echo esc_attr( $logo_text ); ?>">
	<?php endif; //logo_image	?>
	<span class="d-flex flex-column">
		<?php if ( $logo_text ) : ?>
			<span class="logo-text">
				<?php echo esc_html( $logo_text ); ?>
			</span>
		<?php endif; //logo_text	?>
		<?php if ( $logo_subtext ) : ?>
			<span class="logo-subtext">
				<?php echo esc_html( $logo_subtext ); ?>
			</span>
		<?php endif; //logo_text	?>

	</span>

</a>