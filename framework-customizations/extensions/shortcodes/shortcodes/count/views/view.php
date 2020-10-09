<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$count = ( !empty( $atts['counter'] ) )	?	$atts['counter']	:	'';
$coefficient = ( !empty( $atts['coefficient'] ) )	?	$atts['coefficient']	:	'';
$title = ( !empty( $atts['title'] ) )	?	$atts['title']	:	'';
$sub_title = ( !empty( $atts['sub_title'] ) )	?	$atts['sub_title']	:	'';


?>



<div class="simple-counter">
	<h3 class="special-heading counter-wrap">
		<span class="counter color-main thin big" data-from="0" data-to="<?php echo esc_attr( $count ); ?>" data-speed="1800"><?php echo esc_attr( $count ); ?></span>
		<?php
		if ( !empty( $coefficient ) ){
			?>
			<span class="counter-add thin color-main big"><?php echo esc_attr( $coefficient ); ?></span>
		<?php
		}
		?>

	</h3>

	<?php
	if ( !empty( $title ) ){
		?>
		<p class="special-heading bold color-darkgrey">
			<span>
				<?php echo esc_attr( $title ); ?>
			</span>
		</p>
		<?php
	}

	if ( !empty( $sub_title ) ){
		?>
		<h6 class="special-heading text-capitalize">
			<span>
				<?php echo esc_attr( $sub_title ); ?>
			</span>
		</h6>
		<?php
	}
	?>

</div>