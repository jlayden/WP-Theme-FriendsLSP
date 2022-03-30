<?php
/**
 * Template Name: Programs
 * 
 * The template for displaying educational programming
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flsp_custom
 */

get_header();
get_template_part('template-parts/sections/banner-standard' );

?>

	<main id="primary" class="site-main programs">
        <section class="container">
            <div class="col-lg-10 offset-lg-1">
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part('template-parts/nav/nav-tabs' );
                get_template_part( 'template-parts/content', 'page' );
                get_template_part('template-parts/nav/downloads' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
            </div>

        </section>

	</main><!-- #main -->

<?php
get_template_part('template-parts/sections/footer-calloutbar' );
get_footer();