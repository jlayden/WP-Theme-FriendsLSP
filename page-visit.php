<?php
/**
 * Template Name: Visit
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flsp_custom
 */

get_header();
get_template_part('template-parts/banners/banner-standard' );
?>
	<main id="primary" class="site-main <?php echo strtolower(get_the_title()); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
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
get_template_part('template-parts/atoms/accordion-faq' );
get_template_part('template-parts/nav/nav-subnav' );
get_template_part('template-parts/nav/nav-map' );
get_template_part('template-parts/sections/section-richtext' );
get_template_part('template-parts/calloutbars/calloutbar-standard' );
get_template_part('template-parts/calloutbars/calloutbar-footer' );
get_footer();
