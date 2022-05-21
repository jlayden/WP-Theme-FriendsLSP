<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package flsp_custom
 */

get_header();
get_template_part('template-parts/banners/banner-simple' );
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'This page is gone!', 'flsp_custom' ); ?></h1>
                <a href="/" class="btn btn-primary">Back to Home</a>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'Search our site or use the sitemap below:', 'flsp_custom' ); ?></p>

					<?php
					get_search_form();

					// the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<!-- <div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'flsp_custom' ); ?></h2>
						<ul>
							<?php
							// wp_list_categories(
							// 	array(
							// 		'orderby'    => 'count',
							// 		'order'      => 'DESC',
							// 		'show_count' => 1,
							// 		'title_li'   => '',
							// 		'number'     => 10,
							// 	)
							// );
							?>
						</ul>
					</div>

					<?php
					/* translators: %1$s: smiley */
					// $flsp_custom_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'flsp_custom' ), convert_smilies( ':)' ) ) . '</p>';
					// the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$flsp_custom_archive_content" );

					// the_widget( 'WP_Widget_Tag_Cloud' );
					?> -->

			</div><!-- .page-content -->
                </div>
            </div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_template_part('template-parts/calloutbars/calloutbar-standard' );
get_template_part('template-parts/calloutbars/calloutbar-footer' );
get_footer();
