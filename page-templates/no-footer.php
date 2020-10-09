<?php
/**
 * Template Name: No Footer Page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();

//If Unyson not installed - adding regular section with full width column
if ( ! defined( 'FW' ) ) :
	$options = oktan_get_options();
	?>
	<section class="<?php echo esc_attr( $options['version'] ); ?> page_content s-pt-100 s-pb-75 c-gutter-60">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
	<?php
endif; //FW check
// Start the Loop.
while ( have_posts() ) : the_post();
	// Include the page content template.
	if ( is_search() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php
	else :
		//hidding "more link" in content
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'oktan' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		) );
	endif; //is_search

	// If comments are open or we have at least one comment, load up the comment template.

endwhile;

if ( ! defined( 'FW' ) ) : ?>
				</div><!-- eof .col-sm-12 -->
			</div><!-- eof .row -->
		</div><!-- eof .container -->
	</section><!-- eof section -->
	<?php
endif; //FW check

get_footer();