<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var array $atts
 */
$items = $atts['items'];
$loop = $atts['loop'];
$nav = $atts['nav'];
$dots = $atts['dots'];
$center = $atts['center'];
$autoplay = $atts['autoplay'];
$responsive_lg = $atts['responsive_lg'];
$responsive_md = $atts['responsive_md'];
$responsive_sm = $atts['responsive_sm'];
$responsive_xs = $atts['responsive_xs'];
$margin = $atts['margin'];

$show_button = (!empty($atts['button']['show_button'])) ? true : false;

switch ($atts['layout']):
    //        Start layout_1
    case 'layout_1':
        ?>
        <div class="row">
            <div class="col-lg-6 col-12">
                <?php
                if ( ! empty( $atts['headings'] ) ) {
                foreach ($atts['headings'] as $key => $heading) :
                $class = '';
                //for headings
                if ($heading['heading_tag'] !== 'p') :
                    $class .= 'special-heading';
                else:
                    $class .= 'special-heading';
                endif;
                //for paragraph

                $icon_array = oktan_get_unyson_icon_type_v2_array_for_special_heading($atts, $key);
                $heading_text_type = !empty($heading['heading_text_type']) ? $heading['heading_text_type'] : '';
                ?>
                <<?php echo esc_html($heading['heading_tag']); ?>
                class="<?php echo esc_attr($class . ' ' . $atts['heading_align']); ?>">
                <?php if (!empty($icon_array)) :
                    echo wp_kses_post($icon_array['icon_html']);
                endif; ?>
                <span class="<?php echo esc_attr(trim(
                        $heading['heading_text_color']
                        . ' ' .
                        $heading['heading_text_weight']
                        . ' ' .
                        $heading['heading_text_transform']
                        . ' ' .
                        $heading['heading_text_size'])
                    . ' ' .
                    $heading_text_type
                );
                ?>">
		        <?php echo wp_kses_post($heading['heading_text']) ?>
	            </span>
            </<?php echo esc_html($heading['heading_tag']); ?>>
            <?php endforeach;
			} ?>


            <?php
            if ($atts['divider'] == true) {
                ?>
                <div class="divider-line bg-maincolor text-sm-left text-center"></div>
                <?php
            }
            ?>

            <div class="divider-50 hidden-below-lg"></div>
            <div class="divider-30 hidden-above-lg"></div>
            <?php
            echo wp_kses_post($atts['content']);
            ?>
            <?php if ($show_button) : ?>
                <div class="divider-50 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <a href="<?php echo esc_attr($atts['button']['button']['link']) ?>"
                   target="<?php echo esc_attr($atts['button']['button']['target']) ?>"
                   class="<?php echo esc_attr($atts['button']['button']['color'] . ' ' . $atts['button']['button']['size']); ?>">
                    <span><?php echo esc_html($atts['button']['button']['label']); ?></span>
                </a>
            <?php endif; ?>
            <div class="divider-50 hidden-below-lg"></div>
            <div class="divider-30 hidden-above-lg"></div>
            <div class="owl-carousel sync1"
                 data-items="<?php echo esc_attr($responsive_lg); ?>"
                 data-loop="<?php echo esc_attr($loop); ?>"
                 data-nav="<?php echo esc_attr($nav); ?>"
                 data-dots="<?php echo esc_attr($dots); ?>"
                 data-center="<?php echo esc_attr($center); ?>"
                 data-autoplay="<?php echo esc_attr($autoplay); ?>"
                 data-responsive-lg="<?php echo esc_attr($responsive_lg); ?>"
                 data-responsive-md="<?php echo esc_attr($responsive_md); ?>"
                 data-responsive-sm="<?php echo esc_attr($responsive_sm); ?>"
                 data-responsive-xs="<?php echo esc_attr($responsive_xs); ?>"
                 data-margin="<?php echo esc_attr($margin); ?>"
            >
                <?php
                if ( ! empty( $items ) ) :
	                foreach ($items as $item) :
	                    ?>
	                    <div class="text-center">
	                        <?php if ($item['url']):
	                        $oembed = wp_oembed_get($item['url']);
	                        $oembed_url = strtok(substr($oembed, strpos($oembed, '"http') + 1), '"');
	                        ?>
	                        <a href="<?php echo esc_url($item['url']); ?>"<?php
	                        if (!empty($item['lightbox']) && !empty($oembed)) : ?>
	                            class="photoswipe-link"
	                            data-width="800"
	                            data-height="800"
	                            data-iframe="<?php echo esc_url($oembed_url) ?>"
	                        <?php
	                        endif; //lightbox
	                        ?>>
	                            <?php endif; //url
	                            ?>
	                            <img class="rounded" src="<?php echo esc_url($item['image']['url']); ?>"
	                                 alt="<?php echo esc_attr($item['title']); ?>">
	                            <?php if ($item['url']): ?>
	                        </a>
	                    <?php endif; //url
	                    ?>
	                    </div>
	                <?php
                    endforeach;
                endif; ?>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="divider-30 hidden-above-lg"></div>
            <div class="owl-carousel sync2" data-center="false" data-draggable="false" data-nav="false" data-margin="10"
                 data-loop="true" data-responsive-lg="1" data-responsive-md="1"
                 data-responsive-sm="1" data-responsive-xs="1">
                <?php
	                if ( ! empty( $items ) ) :
	                foreach ($items as $item) :
	                    ?>
	                    <div class="text-center">
	                        <?php if ($item['url']):
	                        $oembed = wp_oembed_get($item['url']);
	                        $oembed_url = strtok(substr($oembed, strpos($oembed, '"http') + 1), '"');
	                        ?>
	                        <a href="<?php echo esc_url($item['url']); ?>"<?php
	                        if (!empty($item['lightbox']) && !empty($oembed)) : ?>
	                            class="photoswipe-link"
	                            data-width="800"
	                            data-height="800"
	                            data-iframe="<?php echo esc_url($oembed_url) ?>"
	                        <?php
	                        endif; //lightbox
	                        ?>>
	                            <?php endif; //url
	                            $attr = array(
	                                'class' => 'rounded',
	                            );
	                            echo wp_get_attachment_image($item['image']['attachment_id'], 'oktan-small-width2', '', $attr);

	                            if ($item['url']): ?>
	                        </a>
	                    <?php endif; //url
	                    ?>
	                    </div>
	                <?php
	                endforeach;
                endif; ?>
            </div>
        </div>
        </div>
        <?php
        break;
//        END od layout_1

//        Start layout_2
    case 'layout_2':
        ?>
        <div class="row">
            <div class="col-lg-6 col-12 col-xl-6 offset-xl-1">
                <div class="owl-carousel sync2" data-center="false" data-draggable="false" data-nav="false" data-margin="10"
                     data-loop="true" data-responsive-lg="1" data-responsive-md="1"
                     data-responsive-sm="1" data-responsive-xs="1">
                    <?php
					if ( ! empty( $items ) ) :
	                    foreach ($items as $item) :
	                        ?>
	                        <div class="text-center">
	                            <?php if ($item['url']):
	                            $oembed = wp_oembed_get($item['url']);
	                            $oembed_url = strtok(substr($oembed, strpos($oembed, '"http') + 1), '"');
	                            ?>
	                            <a href="<?php echo esc_url($item['url']); ?>"<?php
	                            if (!empty($item['lightbox']) && !empty($oembed)) : ?>
	                                class="photoswipe-link"
	                                data-width="800"
	                                data-height="800"
	                                data-iframe="<?php echo esc_url($oembed_url) ?>"
	                            <?php
	                            endif; //lightbox
	                            ?>>
	                                <?php endif; //url
	                                $attr = array(
	                                    'class' => 'rounded',
	                                );
	                                echo wp_get_attachment_image($item['image']['attachment_id'], 'oktan-small-width2', '', $attr);

	                                if ($item['url']): ?>
	                            </a>
	                        <?php endif; //url
	                        ?>
	                        </div>
	                    <?php
	                    endforeach;
                    endif; ?>
                </div>
            </div>
            <div class="col-lg-6 col-12 col-xl-4">
                <div class="divider-30 hidden-above-lg"></div>
                <?php
                if (!$atts['headings']) {
                    return;
                }
                foreach ($atts['headings'] as $key => $heading) :
                $class = '';
                //for headings
                if ($heading['heading_tag'] !== 'p') :
                    $class .= 'special-heading';
                else:
                    $class .= 'special-heading';
                endif;
                //for paragraph

                $icon_array = oktan_get_unyson_icon_type_v2_array_for_special_heading($atts, $key);
                $heading_text_type = !empty($heading['heading_text_type']) ? $heading['heading_text_type'] : '';
                ?>
                <<?php echo esc_html($heading['heading_tag']); ?>
                class="<?php echo esc_attr($class . ' ' . $atts['heading_align']); ?>">
                <?php if (!empty($icon_array)) :
                    echo wp_kses_post($icon_array['icon_html']);
                endif; ?>
                <span class="<?php echo esc_attr(trim(
                        $heading['heading_text_color']
                        . ' ' .
                        $heading['heading_text_weight']
                        . ' ' .
                        $heading['heading_text_transform']
                        . ' ' .
                        $heading['heading_text_size'])
                    . ' ' .
                    $heading_text_type
                );
                ?>">
		        <?php echo wp_kses_post($heading['heading_text']) ?>
	            </span>
            </<?php echo esc_html($heading['heading_tag']); ?>>
            <?php endforeach;
            ?>
            <?php
            if ($atts['divider'] == true) {
                ?>
                <div class="divider-line bg-maincolor text-sm-left text-center"></div>
                <?php
            }
            ?>
                <div class="divider-50 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
            <?php
            echo wp_kses_post($atts['content']);
            if ($show_button) : ?>
                <div class="divider-50 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <a href="<?php echo esc_attr($atts['button']['button']['link']) ?>"
                   target="<?php echo esc_attr($atts['button']['button']['target']) ?>"
                   class="<?php echo esc_attr($atts['button']['button']['color'] . ' ' . $atts['button']['button']['size']); ?>">
                    <span><?php echo esc_html($atts['button']['button']['label']); ?></span>
                </a>
            <?php endif; ?>
            </div>
            <div class="col-12 col-xl-10 offset-xl-1">
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <div class="owl-carousel sync1"
                     data-items="<?php echo esc_attr($responsive_lg); ?>"
                     data-loop="<?php echo esc_attr($loop); ?>"
                     data-nav="<?php echo esc_attr($nav); ?>"
                     data-dots="<?php echo esc_attr($dots); ?>"
                     data-center="<?php echo esc_attr($center); ?>"
                     data-autoplay="<?php echo esc_attr($autoplay); ?>"
                     data-responsive-lg="<?php echo esc_attr($responsive_lg); ?>"
                     data-responsive-md="<?php echo esc_attr($responsive_md); ?>"
                     data-responsive-sm="<?php echo esc_attr($responsive_sm); ?>"
                     data-responsive-xs="<?php echo esc_attr($responsive_xs); ?>"
                     data-margin="<?php echo esc_attr($margin); ?>"
                >
                    <?php
                    foreach ($items as $item) :
                        ?>
                        <div class="text-center">
                            <?php if ($item['url']):
                            $oembed = wp_oembed_get($item['url']);
                            $oembed_url = strtok(substr($oembed, strpos($oembed, '"http') + 1), '"');
                            ?>
                            <a href="<?php echo esc_url($item['url']); ?>"<?php
                            if (!empty($item['lightbox']) && !empty($oembed)) : ?>
                                class="photoswipe-link"
                                data-width="800"
                                data-height="800"
                                data-iframe="<?php echo esc_url($oembed_url) ?>"
                            <?php
                            endif; //lightbox
                            ?>>
                                <?php endif; //url
                                $attr = array(
                                    'class' => 'rounded',
                                );
                                echo wp_get_attachment_image($item['image']['attachment_id'], 'oktan-small-width2', '', $attr);
                            if ($item['url']): ?>
                            </a>
                        <?php endif; //url
                        ?>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
        <?php
        break;
//        END of layout_2
endswitch;
?>

