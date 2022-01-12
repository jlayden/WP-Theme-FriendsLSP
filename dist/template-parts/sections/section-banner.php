<?php $header_image = get_field('header_image'); // image ID ?>
<?php $overlay_graphic = get_field('overlay_graphic'); // image ID ?>
<?php $overlay_align = get_field('overlay_align'); // select ?>
<?php 
	$header_size = "header-large"; // (thumbnail, medium, large, full or custom size)
	$header_img = wp_get_attachment_image_src( $header_image, $header_size );
	// url = $header_img[0];
	// width = $header_img[1];
	// height = $header_img[2];
?>
<?php 
	$overlay_size = "full"; // (thumbnail, medium, large, full or custom size)
	$overlay_img = wp_get_attachment_image_src( $overlay_graphic, $overlay_size );
	// url = $overlay_img[0];
	// width = $overlay_img[1];
	// height = $overlay_img[2];
?>
<?php if ($header_image) { ?>	
	<?php if ($overlay_graphic) { ?>	
		<div class="logoOverlayAbove container">
			<div class="logoOverlayAbove col-lg-12">
				<img src="<?php echo $overlay_img[0]; ?>" alt="" width="600" height="300" />
			</div>
		</div>
	<?php } ?>
<div class="fullWidthImage" style="background-image: url('<?php echo $header_img[0]; ?>');">
	<?php if ($overlay_graphic) { ?>
		<div class="container">
			<div class="logoOverlay <?php echo $overlay_align; ?> col-lg-12">
				<img src="<?php echo $overlay_img[0]; ?>" alt="" width="600" height="300" />
			</div>
		</div>
	<?php } ?>
</div>
<?php } ?>