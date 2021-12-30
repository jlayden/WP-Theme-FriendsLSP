<?php $twitter = get_field('twitter', 'option'); ?>
<?php $youtube = get_field('youtube', 'option'); ?>
<?php $flickr = get_field('flickr', 'option'); ?>
<?php $foursquare = get_field('foursquare', 'option'); ?>
<?php $instagram = get_field('instagram', 'option'); ?>
<?php $facebook = get_field('facebook', 'option'); ?>
<?php $google_plus = get_field('google_plus', 'option'); ?>
<?php $linkedin = get_field('linkedin', 'option'); ?>
<?php $soundcloud = get_field('soundcloud', 'option'); ?>
<?php $tumblr = get_field('tumblr', 'option'); ?>

<?php if ($twitter || $youtube || $flickr || $foursquare || $instagram || $facebook || $google_plus || $linkedin || $soundcloud || $tumblr) { ?>
	<div class="twelve columns">
	<ul class="socialBookmarks">
		<?php if ($twitter) { ?>
			<li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span> Twitter</span></a></li>
		<?php } ?>
		<?php if ($youtube) { ?>
			<li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i><span> YouTube</span></a></li>
		<?php } ?>
		<?php if ($flickr) { ?>
			<li><a href="<?php echo $flickr; ?>" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i><span> Flickr</span></a></li>
		<?php } ?>
		<?php if ($foursquare) { ?>
			<li><a href="<?php echo $foursquare; ?>" target="_blank"><i class="fa fa-foursquare" aria-hidden="true"></i><span> Foursquare</span></a></li>
		<?php } ?>
		<?php if ($instagram) { ?>
			<li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i><span> Instagram</span></a></li>
		<?php } ?>
		<?php if ($facebook) { ?>
			<li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span> Facebook</span></a></li>
		<?php } ?>
		<?php if ($google_plus) { ?>
			<li><a href="<?php echo $google_plus; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i><span> Google+</span></a></li>
		<?php } ?>
		<?php if ($linkedin) { ?>
			<li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i><span> LinkedIn</span></a></li>
		<?php } ?>
		<?php if ($soundcloud) { ?>
			<li><a href="<?php echo $soundcloud; ?>" target="_blank"><i class="fa fa-soundcloud" aria-hidden="true"></i><span> Soundcloud</span></a></li>
		<?php } ?>
		<?php if ($tumblr) { ?>
			<li><a href="<?php echo $tumblr; ?>" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i><span> tumblr</span></a></li>
		<?php } ?>
	</ul>
	</div>
<?php } ?>