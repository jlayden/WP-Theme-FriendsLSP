<?php $display = get_field('display'); // checkbox ?>
<?php $background_image = get_field('background_image'); // image ID ?>
<?php $featured_image = get_field('featured_image'); // image ID ?>
<?php $title = get_field('headline'); // text ?>
<?php $subtitle = get_field('subtitle'); // text ?>
<?php $button = get_field('button'); // group ?>
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
                <img src="<?php echo $featured_img[0]; ?>" class="d-block mx-lg-auto img-fluid" alt="<?php echo $headline; ?>" loading="lazy">
                <h2 class="title"><?php echo $title; ?></h2>
                <p class="large"><?php echo $subtitle; ?></p>
                <div class="cta">
                    <a href="<?php echo $button['link']; ?>" class="btn btn-primary"><?php echo $button['text']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
