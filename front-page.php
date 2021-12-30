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

        <?php get_template_part('template-parts/home/home-banner', get_post_format() ) ?>

        <section class="intro text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
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

        <?php //get_template_part('template-parts/modules/testimonial', get_post_format() ) ?>

        <?php //get_template_part('template-parts/home/calloutbar', get_post_format() ) ?>


	</main><!-- #main -->

<?php
get_footer();