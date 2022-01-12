<?php $background_image = get_field('background_image'); // image ID ?>
<?php $featured_image = get_field('featured_image'); // image ID ?>
<?php $headline = get_field('headline'); // text ?>
<?php $paragraph = get_field('paragraph'); // text ?>
<?php $button = get_field('button'); // group ?>
<?php 
	$background_size = "full"; // (thumbnail, medium, large, full or custom size)
	$background_img = wp_get_attachment_image_src( $background_image, $background_size );
	$featured_size = "full"; // (thumbnail, medium, large, full or custom size)
	$featured_img = wp_get_attachment_image_src( $featured_image, $featured_size );
?>
<?php if ($background_image) { ?>	
<section class="calloutbar footer">
    <div class="background-image" style="background-image: url('<?php echo $background_img[0]; ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 in-bottom">
                <img src="<?php echo $featured_img[0]; ?>" class="d-block mx-lg-auto img-fluid" alt="<?php echo $headline; ?>" loading="lazy">
                <h2 class="title"><?php echo $headline; ?></h2>
                <p class="large"><?php echo $paragraph; ?></p>
                <div class="cta">
                    <a href="<?php echo $button['link']; ?>" class="btn btn-primary"><?php echo $button['text']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
