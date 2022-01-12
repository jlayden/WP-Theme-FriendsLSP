<?php $header_image = get_field('header_image'); // image ID ?>
<?php $overlay_graphic = get_field('overlay_graphic'); // image ID ?>
<?php $overlay_align = get_field('overlay_align'); // select ?>
<?php 
	$header_size = "header-large"; // (thumbnail, medium, large, full or custom size)
	$header_img = wp_get_attachment_image_src( $header_image, $header_size );
	$overlay_size = "full"; // (thumbnail, medium, large, full or custom size)
	$overlay_img = wp_get_attachment_image_src( $overlay_graphic, $overlay_size );
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