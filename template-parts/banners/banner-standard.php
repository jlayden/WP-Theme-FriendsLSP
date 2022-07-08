<?php 
$post_id = false;
if ( is_home() ) {
	$post_id = 1162; // ID of blog page (LOCAL 32 & LIVE 1162)
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
} 
else {
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

<section class="banner standard <?php echo $display; ?> <?php echo $color; ?>" <?php if ($display !== 'solid') { ?> style="background-image: url(<?php echo $hero_img[0]; ?>);" <?php } ?>>
    <div class="banner-overlay"></div>
    <?php if ($hero_overlay_graphic && $display == 'image') { ?>
        <div class="image-overlay in-right <?php echo $color; ?>" style="background-image: url(<?php echo $hero_overlay_img[0]; ?>);"></div>
    <?php } ?>
    <?php if ($display === 'transparent' || $display === 'solid') { ?>
    <div class="content-wrapper in-left">
        <div class="content container">
            <div class="content-area col-lg-10 offset-lg-1 col-md-10 col-sm-12 text-<?php echo $hero_overlay_align ?>">
            <?php if (is_home()) {?>
                <?php echo $hero_content; ?>
            <?php } else if (is_front_page()){ ?>
                <?php echo $hero_content; ?>
            <?php } else { ?>
                <h1><?php echo get_the_title(); ?></h1>
                <?php echo $hero_content; ?>
            <?php } ?>
            </div>
        </div>    
    </div>
    <?php } ?>
    <?php if ($display === 'wave') { ?>
        <div class="content-wrapper">
            <div class="content container">
                <div class="content-area col-lg-10 offset-lg-1 text-center">
                <h1><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
        <div class="wave-divider accent <?php echo $color; ?>">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    <?php } ?>
</section>