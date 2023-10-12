<?php $testimonial_image = get_field('testimonial_image'); // image ID ?>
<?php $quote_icon = get_field('quote_icon'); // image ID ?>
<?php $order = get_field('order'); // select ?>
<?php $headline = get_field('headline'); // text ?>
<?php $paragraph = get_field('paragraph'); // text ?>
<?php 
	$testimonial_size = "large"; // (thumbnail, medium, large, full or custom size)
	$testimonial_img = wp_get_attachment_image_src( $testimonial_image, $testimonial_size );
	$quote_icon = wp_get_attachment_image_src( $overlay_graphic, "full" );
?>
<section class="featured">
    <div class="container">
            <div class="col-lg-6 <?php echo $order; ?>">
                <img src="<?php echo $testimonial_img[0]; ?>" alt="<?php echo $headline; ?>" width="100%" height="auto" />
            </div>
            <div class="col-lg-6 <?php echo $order; ?>">
                <div class="quote-icon" style="background-image: url('<?php echo $quote_icon[0]; ?>');"></div>
                <h2 class="title"><?php echo $headline; ?></h2>
                <p class="large"><?php echo $paragraph; ?></p>
            </div>
		</div>
    </div>
</section>