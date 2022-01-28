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
        <div class="footer-nav container">
            <div class="row">
                <div class="col-lg-8">
                    <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) )?>
                </div>
                <div class="col-lg-4">
                    <?php get_template_part('template-parts/atoms/form-newsletter' ) ?>
                </div>
            </div>
        </div><!-- .footer-nav -->
        <div class="site-info">
            <div class="container">
                <div class="row align-items-center">
                    <div id="footer-widget-left" class="col-lg-4 order-lg-2">
                        <?php if(is_active_sidebar('footer-widget-left')){
                            dynamic_sidebar('footer-widget-left');
                        } ?>
                    </div>
                    <div id="footer-widget-right" class="social-wrapper col-lg-4 order-lg-1">
                        <?php
                        if(is_active_sidebar('footer-widget-right')){
                            dynamic_sidebar('footer-widget-right');
                        } ?>
                    </div>
                    <div class="col-lg-4 order-lg-3">
                        <div id="copyright" class="copyright">
                            ©<span id="year"></span>
                            <a href="<?php echo get_home_url(); ?>">
                                <?php echo get_bloginfo(); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
