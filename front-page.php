<?php
/**
 * The template for displaying the home page
 *
 * This page is used to display the static frontpage by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flsp_custom
 */

get_header();
?>

	<main id="primary" class="site-main homepage">

        <?php get_template_part('template-parts/sections/banner-frontpage' ) ?>

        <section class="intro text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            the_content();
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <?php //get_template_part('template-parts/sections/section-testimonial', get_post_format() ) ?>

        <?php get_template_part('template-parts/sections/footer-calloutbar', get_post_format() ) ?>


	</main><!-- #main -->
<?php
get_template_part('template-parts/atoms/social-bookmarks' );
get_footer();