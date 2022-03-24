<?php
/**
 * Template Name: Home
 * 
 * The template for displaying a listing of all blog posts previewed as cards
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flsp_custom
 */

get_header();
// get_template_part('template-parts/sections/banner-standard' );
?>

	<main id="primary" class="site-main">

    <div class="container">
        <div class="row">
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
        </div>
    </div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
