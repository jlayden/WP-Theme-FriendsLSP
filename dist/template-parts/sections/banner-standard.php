<?php $display = get_field('hero_display'); // checkbox ?>
<?php $hero_content = get_field('hero_content'); // image ID ?>
<?php $hero_image = get_field('hero_image'); // image ID ?>
<?php $hero_overlay_graphic = get_field('hero_overlay_graphic'); // image ID ?>
<?php $hero_overlay_align = get_field('hero_overlay_align'); // select ?>
<?php 
	$hero_size = "hero-large"; // (thumbnail, medium, large, full or custom size)
	$hero_img = wp_get_attachment_image_src( $hero_image, $hero_size );
	$hero_overlay_size = "full"; // (thumbnail, medium, large, full or custom size)
	$hero_overlay_img = wp_get_attachment_image_src( $hero_overlay_graphic, $hero_overlay_size );
?>

<?php if ($display !== 'hidden') { ?>
<section class="banner standard <?php echo $display; ?>">
    <div class="banner-overlay"></div>
    <div class="banner-image" style="background-image: url('<?php echo $hero_img[0]; ?>');"></div>
    <?php if ($hero_overlay_graphic) { ?>	
        <div class="overlay-wrapper">
            <div class="logo-overlay">
                <img src="<?php echo $hero_overlay_img[0]; ?>" alt="hero overlay" width="600" height="300" />
            </div>
        </div>
    <?php } ?>
    <?php if ($hero_content) { ?>
    <div class="content-wrapper">
        <div class="content container">
            <div class="content-area col-md-10 offset-md-1">
                <?php if ($hero_content) { echo $hero_content; }?>
            </div>
        </div>
    <?php if ($display === 'contact') { ?>
        <div class="form-wrapper container">
            <div class="form col-md-4 offset-md-1">
                <?php get_template_part('/template-parts/atoms/form-volunteer' );?>
            </div>
        </div>
    <?php } ?>
    </div>
    <?php } ?>
</section>
<?php } ?>
