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
get_template_part('template-parts/sections/banner-standard' );
?>
	<main id="primary" class="site-main <?php echo strtolower(get_the_title()); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
                    <?php 
                $myposts = get_posts('');
                foreach($myposts as $post) :
                setup_postdata($post);
                ?>
                <div class="post-item">
                    <div class="post-info">
                    <h2 class="post-title">
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                    </a>
                    </h2>
                    <p class="post-meta">Posted by <?php the_author(); ?></p>
                    </div>
                    <div class="post-content">
                    <?php the_content(); ?>
                    </div>
                </div>
                <?php comments_template(); ?>
                <?php endforeach; wp_reset_postdata(); ?>
                <!-- <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                ?> -->
                </div>
            </div>
        </div>

	</main><!-- #main -->
<?php
get_template_part('template-parts/sections/footer-calloutbar' );
get_footer();
