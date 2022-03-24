<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package flsp_custom
 */

get_header();
get_template_part('template-parts/sections/banner-standard' );
?>
	<main id="primary" class="site-main">
        <div class="container">
            <div class="row">
                <div class="col-8">
                <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'post' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                ?>
                </div>
                <div class="col-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>

	</main><!-- #main -->
<?php
get_footer();