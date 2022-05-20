<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package flsp_custom
 */

get_header();
get_template_part('template-parts/banners/banner-simple' );
?>

	<main id="primary" class="site-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                <?php if ( have_posts() ) : ?>

                    <header class="page-header">
                        <h1 class="page-title">
                            <?php
                            /* translators: %s: search query. */
                            printf( esc_html__( 'Search Results for: %s', 'flsp_custom' ), '<span>' . get_search_query() . '</span>' );
                            ?>
                        </h1>
                    </header><!-- .page-header -->

                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', 'search' );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>
                </div>
            </div>
        </div>

	</main><!-- #main -->

    <section class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    
<?php
get_template_part('template-parts/calloutbars/calloutbar-standard' );
get_template_part('template-parts/calloutbars/calloutbar-footer' );
get_footer();
