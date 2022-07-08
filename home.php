<?php
/**
 * Template Name: Blog
 * 
 * The template for displaying the blog post listing page
 *
 * This is the template that displays all posts.
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

                        get_template_part( 'template-parts/content', 'card' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.

                    the_posts_pagination( array(
                        'mid_size' => 2,
                        'prev_text' => __( 'Prev', 'textdomain' ),
                        'next_text' => __( 'Next', 'textdomain' ),
                    ) );
                ?>
                </div>
            </div>
        </div>

	</main><!-- #main -->
<?php
// get_template_part('template-parts/calloutbars/calloutbar-standard' );
// get_template_part('template-parts/sections/section-richtext' );
// get_template_part('template-parts/calloutbars/calloutbar-footer' );
get_footer();
