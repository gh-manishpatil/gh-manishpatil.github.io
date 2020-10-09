<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

if ( ! function_exists( 'oktan_show_post_views_count' ) ) :
	function oktan_show_post_views_count() {
		if ( function_exists( 'mwt_show_post_views_count' ) ) {
			mwt_show_post_views_count();
		}
	} //oktan_show_post_views_count()
endif;
