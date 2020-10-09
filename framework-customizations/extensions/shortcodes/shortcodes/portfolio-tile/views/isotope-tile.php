<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$portfolio = fw()->extensions->get( 'portfolio' );
if ( empty( $portfolio ) ) {
	return;
}
/**
 * @var array $atts
 * @var array $posts
 */

$unique_id = uniqid();

//get all terms for filter
$terms = get_terms( array( 'post_type ' => 'fw-portfolio-category' ) );


if ( count( $terms ) > 1 && $atts['show_filters'] ) { ?>
	<div class="filters isotope_filters-<?php echo esc_attr( $unique_id ); ?> text-center">
		<a href="#" data-filter="*" class="selected"><?php esc_html_e( 'All', 'oktan' ); ?></a>
		<?php
		foreach ( $terms as $term_key => $term_id ) {
			$current_term = get_term( $term_id, 'fw-portfolio-category' );
			?>
			<a href="#"
			   data-filter=".<?php echo esc_attr( $current_term->slug ); ?>"><?php echo esc_html( $current_term->name ); ?></a>
			<?php
		} //foreach
		?>
	</div>
	<?php
} //count subcategories check
    $var=4;
    $thumb='';
    $tiled_class='';
?>

<div class="isotope-wrapper portfolio isotope row masonry-layout c-gutter-10 c-mb-10"
     data-filters=".isotope_filters-<?php echo esc_attr( $unique_id ); ?>">
    <?php while ( $posts->have_posts() ) : $posts->the_post();
        //get categories slugs for isotope filters
        $post_terms       = get_the_terms( get_the_ID(), 'fw-portfolio-category' );
        $post_terms_class = '';

        if ( ! empty ( $post_terms ) ) :
            foreach ( $post_terms as $post_term ) :
                $post_terms_class .= $post_term->slug . ' ';
            endforeach;
        endif;
        //get item size



        if ( ( $posts->current_post === 0 ) || ( $posts->current_post === 1 ) || ( $posts->current_post === 0 + $var ) || ( $posts->current_post === 1 + $var ) ) {
            $tiled_class='col-md-6';
        }else{
            $tiled_class='col-md-3';
        }
        if ( ( $posts->current_post === 0 ) || ( $posts->current_post === 2 ) || ( $posts->current_post === 3 ) || ( $posts->current_post === 0 + $var ) || ( $posts->current_post === 2 + $var )  || ( $posts->current_post === 3 + $var ) ) {
            $thumb='oktan-gallery-1';
        }else{
            $thumb='oktan-gallery-2';
        }
        ?>

        <div
            class="isotope-item <?php echo esc_attr( 'item-layout-tile' . ' ' . $tiled_class . ' ' . $post_terms_class ); ?>">
            <?php
            //include item layout view file
            if ( has_post_thumbnail() ) { ?>
                <div class="vertical-item gallery-item content-absolute text-center ds">
                    <div class="item-media">
                        <?php
                        $full_image_src = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
                        the_post_thumbnail( $thumb );
                        ?>
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="abs-link" href="<?php the_permalink(); ?>"></a>
                                <a class="link-zoom photoswipe-link"
                                   href="<?php echo esc_attr( $full_image_src ); ?>"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                    </div>
                </div>
            <?php
            } else {
                include( fw()->extensions->get( 'portfolio' )->locate_view_path( 'item-extended' ) );
            }
            ?>
        </div>
    <?php endwhile; ?>
    <?php //removed reset the query ?>
</div><!-- eof .istotpe-wrapper -->
<div class="mb--10"></div>