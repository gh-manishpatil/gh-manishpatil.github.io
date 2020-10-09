<?php
/**
 * Template for displaying search forms
 *
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<label>
            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'oktan' ); ?></span>
			<input type="search" class="search-field form-control"
			       placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'oktan' ); ?>"
			       value="<?php echo get_search_query(); ?>" name="s"
			       title="<?php echo esc_attr_x( 'Search for:', 'label', 'oktan' ); ?>"/>
		</label>
	</div>
	<button type="submit" class="search-submit">
		<span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'oktan' ); ?></span>
	</button>
</form>
