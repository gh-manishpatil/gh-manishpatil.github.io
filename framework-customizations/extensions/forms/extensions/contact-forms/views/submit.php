<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var int $form_id
 * @var string $submit_button_text
 * @var array $extra_data
 */
?>
<div class="wrap-forms">
	<div class="row">
		<div class="col-12 col-sm-12 mb-0 mt-30 mt-lg-60">
			<input class="btn btn-gradient big-btn" type="submit"
			       value="<?php echo esc_attr( $submit_button_text ) ?>"/>
			<?php if ( $extra_data['reset_button_text'] ) : ?>
				<input class="btn btn-darkgrey big-btn" type="reset"
				       value="<?php echo esc_attr( $extra_data['reset_button_text'] ); ?>"/>
			<?php endif; ?>
		</div>
	</div>
</div>