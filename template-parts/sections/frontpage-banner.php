<?php $background_image = get_field('background_image'); // image ID ?>
<?php $wordmark_image = get_field('wordmark_image'); // image ID ?>
<?php $headline = get_field('headline'); // text ?>
<?php $paragraph = get_field('paragraph'); // text ?>
<?php $button = get_field('button'); // group ?>
<?php 
	$header_size = "full"; // (thumbnail, medium, large, full or custom size)
	$header_img = wp_get_attachment_image_src( $background_image, $header_size );
	$wordmark_size = "full"; // (thumbnail, medium, large, full or custom size)
	$wordmark_img = wp_get_attachment_image_src( $wordmark_image, $wordmark_size );
?>
<?php if ($background_image) { ?>	
<section class="banner standard">
    <div class="banner-image" style="background-image: url('<?php echo $header_img[0]; ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 in-left">
            <img src="<?php echo $wordmark_img[0]; ?>" class="d-block mx-lg-auto img-fluid" alt="<?php echo $headline; ?>" loading="lazy">
                <h1 class="title"><?php echo $headline; ?></h1>
                <p class="large"><?php echo $paragraph; ?></p>
                <div class="cta">
                    <a href="<?php echo $button['link']; ?>" class="btn btn-primary"><?php echo $button['text']; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="wave-divider">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div> -->
</section>
<?php } ?>
