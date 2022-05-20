<?php
/**
 * Template Name: Events
 * 
 * The template for displaying the event page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flsp_custom
 */

get_header();
get_template_part('template-parts/banners/banner-standard' );
?>

	<main id="primary" class="site-main">
        <section class="container">
            <div class="col-lg-10 offset-lg-1">
            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
            </div>

            <?php // get_template_part('template-parts/atoms/accordion' ); ?>


        </section>

	</main><!-- #main -->

<?php
// get_template_part('template-parts/sections/section-sponsors' );
get_template_part('template-parts/calloutbars/calloutbar-standard' );
get_template_part('template-parts/sections/section-richtext' );
get_template_part('template-parts/calloutbars/calloutbar-footer' );
get_footer();
