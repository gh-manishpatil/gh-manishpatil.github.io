<?php

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

//header products counter ajax refresh
add_filter( 'woocommerce_add_to_cart_fragments', 'oktan_woocommerce_cart_count_fragments', 10, 1 );
if ( ! function_exists( 'oktan_woocommerce_cart_count_fragments' ) ) :
function oktan_woocommerce_cart_count_fragments( $fragments ) {
	$fragments['span.cart-count'] = '<span class="badge bg-maincolor2 cart-count">';
	if (! empty( WC()->cart->get_cart_contents_count() ) ) {
		$fragments['span.cart-count'] .= WC()->cart->get_cart_contents_count();
	}
	$fragments['span.cart-count'] .= '</span>';
	return $fragments;
}
endif;

//remove page title in shop page
add_filter( 'woocommerce_show_page_title', 'oktan_filter_remove_shop_title_in_content' );
if ( ! function_exists( 'oktan_filter_remove_shop_title_in_content' ) ) :
	function oktan_filter_remove_shop_title_in_content() {
		return false;
	}
endif;

//remove wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

//wrap in col-sm- and .columns-2 all products on shop page
add_action( 'woocommerce_before_shop_loop', 'oktan_action_echo_div_columns_before_shop_loop' );
if ( ! function_exists( 'oktan_action_echo_div_columns_before_shop_loop' ) ) :
	function oktan_action_echo_div_columns_before_shop_loop() {
		$column_classes = oktan_get_columns_classes();
		echo '<div id="content_products" class="' . esc_attr( $column_classes[ 'main_column_class' ] ) . '">';

	}
endif;

add_action( 'woocommerce_before_shop_loop_item', 'oktan_action_echo_div_inner_item', 9 );
if ( ! function_exists( 'oktan_action_echo_div_inner_item' ) ) :
	function oktan_action_echo_div_inner_item() {

		echo '<div class="product-inner">';

	}
endif;

add_action( 'woocommerce_after_shop_loop_item', 'oktan_action_echo_div_inner_item_close', 15 );
if ( ! function_exists( 'oktan_action_echo_div_inner_item_close' ) ) :
	function oktan_action_echo_div_inner_item_close() {

		echo '</div> </div>';

	}
endif;


add_action( 'woocommerce_before_shop_loop', 'oktan_action_echo_div_wrap_style_selector', 15 );
if ( ! function_exists( 'oktan_action_echo_div_wrap_style_selector' ) ) :
	function oktan_action_echo_div_wrap_style_selector() {

		echo '<div class="products-selection">';

	}
endif;


add_action( 'woocommerce_before_shop_loop', 'oktan_action_echo_div_wrap_style_selector_close', 35 );
if ( ! function_exists( 'oktan_action_echo_div_wrap_style_selector_close' ) ) :
	function oktan_action_echo_div_wrap_style_selector_close() {


		echo '</div>';

	}
endif;


add_action( 'woocommerce_before_shop_loop_item_title', 'oktan_action_echo_div_wrap_content_product', 11 );
if ( ! function_exists( 'oktan_action_echo_div_wrap_content_product' ) ) :
	function oktan_action_echo_div_wrap_content_product() {

		echo '<div class="product-wrap"><div class="wrap-right">';

	}
endif;
add_action( 'woocommerce_after_shop_loop_item_title', 'oktan_action_echo_div_right_wrap', 6 );
if ( ! function_exists( 'oktan_action_echo_div_right_wrap' ) ) :
	function oktan_action_echo_div_right_wrap() {

		echo '</div><div class="wrap-left">';

	}
endif;
add_action( 'woocommerce_after_shop_loop_item', 'oktan_action_echo_div_left_wrap', 11 );
if ( ! function_exists( 'oktan_action_echo_div_left_wrap' ) ) :
	function oktan_action_echo_div_left_wrap() {

		echo '</div>';

	}
endif;

add_action( 'woocommerce_template_loop_add_to_cart', 'oktan_action_echo_div_wrap_content_product_close', 18 );
if ( ! function_exists( 'oktan_action_echo_div_wrap_content_product_close' ) ) :
	function oktan_action_echo_div_wrap_content_product_close() {

		echo '</div>';

	}
endif;









add_action( 'woocommerce_after_shop_loop', 'oktan_action_echo_div_columns_after_shop_loop' );
if ( ! function_exists( 'oktan_action_echo_div_columns_after_shop_loop' ) ):
	function oktan_action_echo_div_columns_after_shop_loop() {


		echo '</div><!-- eof #content_products -->';
		$column_classes = oktan_get_columns_classes();
		if ( $column_classes[ 'sidebar_class' ] ): ?>
			<!-- main aside sidebar -->
			<aside class="<?php echo esc_attr( $column_classes[ 'sidebar_class' ] ); ?>">
				<?php get_sidebar(); ?>
			</aside>
			<!-- eof main aside sidebar -->
			<?php
		endif;
	}
endif;

// single product in shop loop

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

add_action( 'woocommerce_before_shop_loop_item_title', 'oktan_action_echo_markup_before_shop_loop_item_title' );
if ( ! function_exists( 'oktan_action_echo_markup_before_shop_loop_item_title' ) ):
	function oktan_action_echo_markup_before_shop_loop_item_title() {
		woocommerce_template_loop_product_link_close();

	}
endif;

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'oktan_action_woocommerce_template_loop_product_title', 10 );
if ( ! function_exists( 'oktan_action_woocommerce_template_loop_product_title' ) ):
	function oktan_action_woocommerce_template_loop_product_title() {
		echo '<h2 class="woocommerce-loop-product__title">';
		woocommerce_template_loop_product_link_open();
		the_title();
		woocommerce_template_loop_product_link_close();
		echo '</h2>';
	}
endif;



add_action( 'woocommerce_before_single_product', 'oktan_action_echo_div_columns_before_single_product' );
if ( ! function_exists( 'oktan_action_echo_div_columns_before_single_product' ) ):
	function oktan_action_echo_div_columns_before_single_product() {
		$column_classes = oktan_get_columns_classes();
		echo '<div id="content_product" class="' . esc_attr( $column_classes[ 'main_column_class' ] ) . '">';
	}
endif;

add_action( 'woocommerce_after_single_product', 'oktan_action_echo_div_columns_after_single_product' );
if ( ! function_exists( 'oktan_action_echo_div_columns_after_single_product' ) ):
	function oktan_action_echo_div_columns_after_single_product() {
		echo '</div> <!-- eof .col- -->';
		$column_classes = oktan_get_columns_classes();
		if ( $column_classes[ 'sidebar_class' ] ): ?>
			<!-- main aside sidebar -->
			<aside class="<?php echo esc_attr( $column_classes[ 'sidebar_class' ] ); ?>">
				<?php get_sidebar(); ?>
			</aside>
			<!-- eof main aside sidebar -->
			<?php
		endif;
	}
endif;

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

add_filter( 'woocommerce_single_product_image_html', 'oktan_filter_put_onsale_span_in_main_image' );
if ( ! function_exists( 'oktan_filter_put_onsale_span_in_main_image' ) ):
	function oktan_filter_put_onsale_span_in_main_image( $html ) {
		return $html . woocommerce_show_product_sale_flash();
	}
endif;




//elements in single product summary
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 8 );
add_action( 'woocommerce_single_product_summary', 'oktan_action_echo_template_single_meta', 9 );
if ( ! function_exists( 'oktan_action_echo_template_single_meta' ) ):
	function oktan_action_echo_template_single_meta() {
		echo '<div class="color-darkgrey">';
		woocommerce_template_single_meta();
		echo '</div>';
	}
endif;

add_action( 'woocommerce_before_add_to_cart_button', 'oktan_action_echo_open_div_before_add_to_cart_button' );
if ( ! function_exists( 'oktan_action_echo_open_div_before_add_to_cart_button' ) ):
	function oktan_action_echo_open_div_before_add_to_cart_button() {
		echo '<div class="add-to-cart">';
	}
endif;

add_action( 'woocommerce_after_add_to_cart_button', 'oktan_action_echo_open_div_after_add_to_cart_button' );
if ( ! function_exists( 'oktan_action_echo_open_div_after_add_to_cart_button' ) ):
	function oktan_action_echo_open_div_after_add_to_cart_button() {
		echo '</div>';
	}
endif;

//account navigation
add_action( 'woocommerce_before_account_navigation', 'oktan_action_woocommerce_before_account_navigation' );
if ( ! function_exists( 'oktan_action_woocommerce_before_account_navigation' ) ):
	function oktan_action_woocommerce_before_account_navigation() {
		echo '<div class="buttons">';
	}
endif;

add_action( 'woocommerce_after_account_navigation', 'oktan_action_woocommerce_after_account_navigation' );
if ( ! function_exists( 'oktan_action_woocommerce_after_account_navigation' ) ):
	function oktan_action_woocommerce_after_account_navigation() {
		echo '</div><!-- eof .buttons -->';
	}
endif;


//mini cart
add_filter( 'woocommerce_cart_item_thumbnail', 'oktan_filter_minicart_thumbnail', 10, 3 );
if ( ! function_exists( 'oktan_filter_minicart_thumbnail') ):
	function oktan_filter_minicart_thumbnail( $product_image,  $cart_item, $cart_item_key  ){
		$link = get_permalink( $cart_item['product_id'] );
		$html = $product_image;
		if ( !empty( $link) ) {
			$html .= '</a>';
		}
		$html .= '<div class="minicart-product-meta">';
		if ( !empty( $link) ) {
			$html .= '<a href="' . esc_url( $link ) . '">';
		}
		return $html;
	}
endif;

add_filter( 'woocommerce_widget_cart_item_quantity', 'oktan_filter_minicart_item_quantity', 10, 3 );
if ( ! function_exists( 'oktan_filter_minicart_item_quantity') ):
	function oktan_filter_minicart_item_quantity( $span,  $cart_item, $cart_item_key  ){
		$link = get_permalink( $cart_item['product_id'] );
		$html = '' ;
		if ( !empty( $link) ) {
			$html .= '</a>';
		}
		$html .= $span . '</div><!-- .minicart-product-meta -->';
		return $html;
	}
endif;