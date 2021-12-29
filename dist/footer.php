<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flsp_custom
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            ©<span id="year"></span>
			<a href="<?php echo get_home_url(); ?>">
                <?php echo get_bloginfo(); ?>
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
