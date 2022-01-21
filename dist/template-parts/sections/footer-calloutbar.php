<?php $display = get_field('callout_footer_display'); // checkbox ?>
<?php $background_image = get_field('callout_footer_background_image'); // image ID ?>
<?php $featured_image = get_field('callout_footer_featured_image'); // image ID ?>
<?php $button = get_field('callout_footer_button'); // group ?>
<?php 
	$background_size = "full"; // (thumbnail, medium, large, full or custom size)
	$background_img = wp_get_attachment_image_src( $background_image, $background_size );
	$featured_size = "full"; // (thumbnail, medium, large, full or custom size)
	$featured_img = wp_get_attachment_image_src( $featured_image, $featured_size );
?>
<?php if ($display == 'visible') { ?>	
<section class="calloutbar footer">
    <div class="background-image" style="background-image: url('<?php echo $background_img[0]; ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="content col-sm-8 offset-sm-2 in-bottom">
                <img src="<?php echo $featured_img[0]; ?>" class="d-block mx-lg-auto img-fluid" alt="overlay image" loading="lazy">
                <div class="cta">
                    <a href="<?php echo $button['link']; ?>" class="btn btn-primary"><?php echo $button['text']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
