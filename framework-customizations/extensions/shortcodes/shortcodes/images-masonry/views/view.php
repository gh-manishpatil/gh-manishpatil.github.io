<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


/**
 * @var array $atts
 * @var array $posts
 */

//1 - col-*-12
//2 - col-*-6
//3 - col-*-4
//4 - col-*-3
//6 - col-*-2

//bootstrap col-lg-* class
$lg_class = '';
switch ( $atts['responsive_lg'] ) :
	case ( 1 ) :
		$lg_class = 'col-lg-12';
		break;

	case ( 2 ) :
		$lg_class = 'col-lg-6';
		break;

	case ( 3 ) :
		$lg_class = 'col-lg-4';
		break;

	case ( 4 ) :
		$lg_class = 'col-lg-3';
		break;
	//6
	default:
		$lg_class = 'col-lg-2';
endswitch;

//bootstrap col-md-* class
$md_class = '';
switch ( $atts['responsive_md'] ) :
	case ( 1 ) :
		$md_class = 'col-md-12';
		break;

	case ( 2 ) :
		$md_class = 'col-md-6';
		break;

	case ( 3 ) :
		$md_class = 'col-md-4';
		break;

	case ( 4 ) :
		$md_class = 'col-md-3';
		break;
	//6
	default:
		$md_class = 'col-md-2';
endswitch;

//bootstrap col-sm-* class
$sm_class = '';
switch ( $atts['responsive_sm'] ) :
	case ( 1 ) :
		$sm_class = 'col-sm-12';
		break;

	case ( 2 ) :
		$sm_class = 'col-sm-6';
		break;

	case ( 3 ) :
		$sm_class = 'col-sm-4';
		break;

	case ( 4 ) :
		$sm_class = 'col-sm-3';
		break;
	//6
	default:
		$sm_class = 'col-sm-2';
endswitch;

//bootstrap col-xs-* class
$xs_class = '';
switch ( $atts['responsive_xs'] ) :
	case ( 1 ) :
		$xs_class = 'col-xs-12';
		break;

	case ( 2 ) :
		$xs_class = 'col-xs-6';
		break;

	case ( 3 ) :
		$xs_class = 'col-xs-4';
		break;

	case ( 4 ) :
		$xs_class = 'col-xs-3';
		break;
	//6
	default:
		$xs_class = 'col-xs-2';
endswitch;

//column paddings class
//margin values:
//0
//1
//2
//10
//30
$margin_class = '';
$columns_class = '';
switch ( $atts['margin'] ) :
	case ( 0 ) :
		$margin_class = 'c-gutter-0';
		$columns_class = 'c-mb-0';
		break;

	case ( 1 ) :
		$margin_class = 'c-gutter-1';
		$columns_class = 'c-mb-1';
		break;

	case ( 2 ) :
		$margin_class = 'c-gutter-2';
		$columns_class = 'c-mb-2';
		break;

	case ( 10 ) :
		$margin_class = 'c-gutter-5';
		$columns_class = 'c-mb-5';
		break;
    case ( 20 ) :
        $margin_class = 'c-gutter-10';
        $columns_class = 'c-mb-10';
        break;
    case ( 30 ) :
        $margin_class = 'c-gutter-15';
        $columns_class = 'c-mb-15';
        break;
    case ( 40 ) :
        $margin_class = 'c-gutter-20';
        $columns_class = 'c-mb-20';
        break;
    case ( 60 ) :
        $margin_class = 'c-gutter-30';
        $columns_class = 'c-mb-30';
        break;
	//6
	default:
		$margin_class = 'c-gutter-30';
		$columns_class = 'c-mb-30';
endswitch;

$unique_id = uniqid();
$items         = $atts['items'];


?>
<div class="isotope-wrapper images-grid isotope row masonry-layout <?php echo esc_attr( $margin_class . ' ' . $columns_class ); ?>">
	<?php
	if ( !empty( $items ) ) :
		foreach ( $items as $item ) :
			?>
			<?php
			$width  = ( is_numeric( $item['width'] ) && ( $item['width'] > 0 ) ) ? $item['width'] : '';
			$height = ( is_numeric( $item['height'] ) && ( $item['height'] > 0 ) ) ? $item['height'] : '';
			$decoration=(!empty($item['style']))?$item['style']:'';
			if ( empty( $item['image'] ) ) {
				$image = fw_get_framework_directory_uri( '/static/img/no-image.png' );
			} else {
				if ( ! empty( $width ) && ! empty( $height ) ) {
					$image = fw_resize( $item['image']['url'], $width, $height, true );
				} else {
					$image = $item['image']['url'];
				}
			}
			?>
			<div class="isotope-item  <?php echo esc_attr( $lg_class . ' ' . $md_class . ' ' . $sm_class . ' ' . $xs_class); ?>">

				<a href="<?php echo esc_url( $item['url'] ); ?>">
					<div class="<?php echo esc_attr($decoration,'oktan'); ?>">
						<img src="<?php echo esc_attr($image, 'oktan') ;?>" alt="img">
					</div>
				</a>

			</div>

		<?php
		endforeach;
	endif;
	?>
</div><!-- eof .isotope-wrapper -->
<div class="mt--<?php echo esc_attr($atts['margin']/2,'oktan'); ?>"></div>