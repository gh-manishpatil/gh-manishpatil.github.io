<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="icon-inline">
    <?php if ( $atts['icon'] ): ?>
        <div class="icon-styled icon-top bordered <?php echo esc_attr( $atts['icon_class'] ); ?>">
            <i class="<?php echo esc_attr( $atts['icon'] . ' ' . $atts['icon_style'] ); ?> fontsize_16"></i>
        </div>
    <?php endif; //icon
    ?>
    <p>
        <?php if ( ! empty ( $atts['title'] ) ) : ?>
        <strong class="color-darkgrey">
            <?php echo wp_kses_post( $atts['title'] ); ?>
        </strong>
        <?php endif; ?>
        <?php echo wp_kses_post( $atts['text'] ); ?>
    </p>
</div>
