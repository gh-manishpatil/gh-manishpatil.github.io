<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

if ( ! function_exists( 'oktan_post_like_button' ) ) :
	/**
	 * Print like button
	 */
	function oktan_post_like_button( $postID ) {
		if ( function_exists( 'mwt_post_like_button' ) ) {
			mwt_post_like_button( $postID );
		}
	} //oktan_post_like_button()
endif;

if ( ! function_exists( 'oktan_post_like_count' ) ) :
	/**
	 * Print like counter value
	 */
	function oktan_post_like_count( $postID ) {
		if ( function_exists( 'mwt_post_like_count' ) ) {
			mwt_post_like_count( $postID );
		}
	} //oktan_post_like_count()
endif;
