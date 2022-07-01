<?php $background_image = get_field('homepage_banner_background_image'); // image ID ?>
<?php $wordmark_image = get_field('homepage_banner_wordmark_image'); // image ID ?>
<?php $headline = get_field('homepage_banner_headline'); // text ?>
<?php $paragraph = get_field('homepage_banner_paragraph'); // text ?>
<?php $button = get_field('homepage_banner_button'); // group ?>
<?php 
	$header_size = "full"; // (thumbnail, medium, large, full or custom size)
	$header_img = wp_get_attachment_image_src( $background_image, $header_size );
	$wordmark_size = "full"; // (thumbnail, medium, large, full or custom size)
	$wordmark_img = wp_get_attachment_image_src( $wordmark_image, $wordmark_size );
?>
<?php if ($background_image) { ?>	
<section class="banner standard hero">
    <div class="banner-image" style="background-image: url('<?php echo $header_img[0]; ?>');"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 in-left">
            <img src="<?php echo $wordmark_img[0]; ?>" class="wordmark d-block mx-lg-auto img-fluid" alt="<?php echo $headline; ?>">
                <h1 class="title visuallyhidden" aria-label="<?php echo $headline; ?>"><?php echo $headline; ?></h1>
                <p class="large"><?php echo $paragraph; ?></p>
                <div class="cta">
                    <a href="<?php echo $button['link']; ?>" class="btn btn-primary btn-wide lime"><?php echo $button['text']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
