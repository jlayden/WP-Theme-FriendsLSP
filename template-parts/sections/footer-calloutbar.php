<?php
$display = get_field('callout_footer_display'); // checkbox 
$content = get_field('callout_footer_overlay_content'); // wysiwig 
$background_image = get_field('callout_footer_background_image'); // image ID 
$background_color = get_field('callout_footer_background_color'); // image ID 
$featured_image = get_field('callout_footer_featured_image'); // image ID 
$link = get_field('callout_footer_button');
if ($link) :
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
$background_size = "full"; // (thumbnail, medium, large, full or custom size)
$background_img = wp_get_attachment_image_src($background_image, $background_size);
$featured_size = "full"; // (thumbnail, medium, large, full or custom size)
$featured_img = wp_get_attachment_image_src($featured_image, $featured_size);

if ($display !== 'hidden' && $display == 'standard') { ?>
    <section class="calloutbar <?php echo $display ?> <?php echo $background_color; ?>" style="background-image: url('<?php echo $background_img[0]; ?>');">
        <div class="container">
            <div class="row">
                <div class="content-wrapper in-bottom">
                    <div class="col-sm-12 offset-md-1 col-md-10 col-lg-8 offset-lg-2">

                        <?php if ($featured_image) { ?>
                            <img src="<?php echo $featured_img[0]; ?>" class="d-block mx-lg-auto img-fluid img-overlay" alt="overlay image" loading="lazy">
                        <?php } ?>
                        <div class="content">
                            <?php echo $content; ?>
                        </div>
                        <?php if ($link) { ?>
                            <div class="cta">
                                <a class="btn btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    </section>
<?php } else { ?>
    <section class="calloutbar <?php echo $display; ?> <?php echo $background_color; ?>" style="background-image: url('<?php echo $background_img[0]; ?>');">
        <?php if ($featured_image) { ?>
            <img src="<?php echo $featured_img[0]; ?>" class="d-block mx-lg-auto img-fluid img-overlay" alt="overlay image" loading="lazy">
        <?php } ?>
        <div class="content-wrapper">
            <?php echo $content; ?>
            <?php if ($link) { ?>
                <div class="cta">
                    <a class="btn btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>