<?php 

$post_id = false;

if ( is_home() ) {
	$post_id = 13; // specif ID of home page
    $display = get_field('hero_display', $post_id); // dropdown
    $color = get_field('hero_color', $post_id); // image ID 
    $hero_content = get_field('hero_content', $post_id); // image ID 
    $hero_image = get_field('hero_image', $post_id); // image ID 
    $hero_overlay_graphic = get_field('hero_overlay_graphic', $post_id); // image ID
    $hero_overlay_align = get_field('hero_overlay_align', $post_id); // select
    $hero_size = "hero-large"; // (thumbnail, medium, large, full or custom size)
    $hero_img = wp_get_attachment_image_src( $hero_image, $hero_size );
    $hero_overlay_size = "full"; // (thumbnail, medium, large, full or custom size)
    $hero_overlay_img = wp_get_attachment_image_src( $hero_overlay_graphic, $hero_overlay_size );
} else {
	$post_id = 13; // specif ID of home page
    $display = get_field('hero_display'); // dropdown
    $color = get_field('hero_color'); // image ID 
    $hero_content = get_field('hero_content'); // image ID 
    $hero_image = get_field('hero_image'); // image ID 
    $hero_overlay_graphic = get_field('hero_overlay_graphic'); // image ID
    $hero_overlay_align = get_field('hero_overlay_align'); // select
    $hero_size = "hero-large"; // (thumbnail, medium, large, full or custom size)
    $hero_img = wp_get_attachment_image_src( $hero_image, $hero_size );
    $hero_overlay_size = "full"; // (thumbnail, medium, large, full or custom size)
    $hero_overlay_img = wp_get_attachment_image_src( $hero_overlay_graphic, $hero_overlay_size );
}
?>

<section class="banner standard <?php echo $display; ?> <?php echo $color; ?>" 
<?php if ($display !== 'solid') { ?> style="background-image: url(<?php echo $hero_img[0]; ?>);" <?php } ?>>
    <a class="logo-link" href="https://friendslsp.org/" title="FLSP | Home">
        <img src="http://friendslsp.org/wp-content/uploads/2022/01/FLSP_Logo_White_Border_No_Wordmark.jpg" alt="FLSP Logo"/>
    </a>
    <div class="banner-overlay"></div>
    <?php if ($hero_overlay_graphic) { ?>	
        <div class="overlay-wrapper in-bottom">
            <div class="logo-overlay">
                <img src="<?php echo $hero_overlay_img[0]; ?>" alt="hero overlay" width="600" height="300" />
            </div>
        </div>
    <?php } ?>
    <?php if ($hero_content) { ?>
    <div class="content-wrapper in-left">
        <div class="content container">
            <div class="content-area col-md-8 offset-md-2 text-center">
                <?php echo $hero_content; ?>
            </div>
        </div>
    <?php if ($display === 'contact') { ?>
        <div class="form-wrapper container">
            <div class="form col-md-4 offset-md-2">
                <?php get_template_part('/template-parts/atoms/form-volunteer' );?>
            </div>
        </div>
    <?php } ?>
    </div>
    <?php } ?>
    <?php if ($display === 'wave') { ?>
        <div class="wave-divider <?php echo $color; ?>">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="wave-divider accent <?php echo $color; ?>">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    <?php } ?>
</section>