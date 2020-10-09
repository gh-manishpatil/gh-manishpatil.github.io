<?php if (!defined('FW')) {
    die('Forbidden');
}

$id = uniqid('testimonials-');

?>

<?php if (!empty($atts['title'])): ?>
    <h3 class="fw-testimonials-title text-center"><?php echo esc_html($atts['title']); ?></h3>
<?php endif; ?>
<div class="row">
    <div class="col-lg-6">
        <div class="owl-carousel sync1 testimonials-image"
             data-responsive-lg="3"
             data-responsive-md="3"
             data-responsive-sm="3"
             data-responsive-xs="2"
             data-center="false"
             data-loop="true"
             data-autoplay="false"
             data-margin="30"
             data-nav="false"
             data-dots="true">
            <?php foreach ($atts['testimonials'] as $testimonial): ?>
                <div class="quote-item">
                    <div class="quote-image">
                        <?php
                        $author_image_url = !empty($testimonial['author_avatar']['url'])
                            ? $testimonial['author_avatar']['url']
                            : fw_get_framework_directory_uri('/static/img/no-image.png');
                        ?>
                        <img src="<?php echo esc_attr($author_image_url); ?>"
                             alt="<?php echo esc_attr($testimonial['author_name']); ?>"/>
                    </div>
                    <span class="quote-name">
                        <?php echo esc_html($testimonial['author_name']); ?>
                    </span>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
    <div class="col-lg-6">
        <div class="owl-carousel sync2 testimonials-content"
             data-nav="false"
             data-margin="0"
             data-loop="true"
             data-draggable="false"
             data-responsive-lg="1"
             data-responsive-md="1"
             data-responsive-sm="1"
             data-responsive-xs="1">

            <?php foreach ($atts['testimonials'] as $testimonial): ?>
                <blockquote>
                    <p>
                        <?php echo esc_html($testimonial['content']); ?>
                    </p>
                    <cite class="color-main"><?php echo esc_html($testimonial['author_date']); ?></cite>
                </blockquote>
            <?php endforeach; ?>


        </div>
    </div>
</div>


