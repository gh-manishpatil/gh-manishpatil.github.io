<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( ! fw()->extensions->get( 'portfolio' ) ) {
	return;
}


class FW_Shortcode_Portfolio_Tile extends FW_Shortcode {
	protected function _render( $atts, $content = null, $tag = '' ) {

		$posts = $this->fw_get_posts_with_info( array(
			'sort'  => 'post_date',
			'items' => $atts['number'],
		) );

		$view_path = $this->locate_path( '/views/isotope-tile.php' );

		return fw_render_view( $view_path, array(
				'atts'  => $atts,
				'posts' => $posts
			)
		);
	}

	//add shotrcode image sizes
	protected function _init() {
		add_action( 'init', 'FW_Shortcode_Portfolio_Tile::add_portfolio_tile_image_sizes' );
	}
	public static function add_portfolio_tile_image_sizes() {
		add_image_size( 'oktan-portfolio-shortcode-tile-square', 800, 800, true );
		add_image_size( 'oktan-portfolio-shortcode-tile-half-square-horizontal', 800, 400, true );
	}

	/**
	 * @param array $args
	 *
	 * @return WP_Query
	 */
	public function fw_get_posts_with_info( $args = array() ) {
		$defaults = array(
			'sort'        => 'recent',
			'items'       => 5,
			'image_post'  => true,
			'date_post'   => true,
			'date_format' => 'F jS, Y',
			'post_type'   => 'fw-portfolio',

		);

		extract( wp_parse_args( $args, $defaults ) );

		$query = new WP_Query( array(
			'post_type'           => $post_type,
			'orderby'             => $sort,
			'order '              => 'DESC',
			'ignore_sticky_posts' => true,
			'posts_per_page'      => $items,
		) );

		//wp reset query removed

		return $query;
	}
}