<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Shortcode Posts - extended item layout
 */

$terms          = get_the_terms( get_the_ID(), 'category' );
$filter_classes = '';
foreach ( $terms as $term ) {
	$filter_classes .= ' filter-' . $term->slug;
}
?>
<div <?php post_class( "vertical-item content-padding side-item with-shadow rounded text-center" . $filter_classes ); ?>>
	<?php if ( get_the_post_thumbnail() ) : ?>
        <div class="item-media">
			<?php
			the_post_thumbnail('oktan-square');
			?>
            <div class="media-links">
                <a class="abs-link" href="<?php the_permalink(); ?>"></a>
            </div>
        </div>
	<?php endif; //eof thumbnail check ?>
    <div class="item-content">
        <h4 class="item-title">
            <a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
            </a>
        </h4>
		<?php
		the_excerpt();
		?>
    </div>
	<?php
	// Set up and print post meta information.
	if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
		?>
        <div>
				<span class="comments-link">
					<i class="fa fa-comment color-main"></i>
					<?php comments_popup_link( esc_html__( '0', 'oktan' ), esc_html__( '1', 'oktan' ), esc_html__( '%', 'oktan' ) ); ?>
				</span>
        </div>
	<?php endif; //password   ?>
    <span><?php the_author() ?></span>
</div><!-- eof vertical-item -->
