<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flsp_custom
 */

$pageTitle = strtolower(get_the_title($post->ID));
if (!$pageTitle) { $pageTitle = "system";}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() . '/fonts/FuturaLT.woff2' ); ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() . '/fonts/Avenir Next LT W02 Regular.woff2' ); ?>" as="font" type="font/woff2" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'load' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site <?php echo $pageTitle; ?>">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'flsp_custom' ); ?></a>

	<header id="masthead" class="site-header transparent">
        <div class="nav-overlay"></div>
		<div class="site-branding">
            <a href="/" class="custom-logo-link"></a>
			<?php
			// the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$flsp_custom_description = get_bloginfo( 'description', 'display' );
			if ( $flsp_custom_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $flsp_custom_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'flsp_custom' ); ?></button> -->
			<div id="menu-toggle" class="menu-toggle" aria-controls="primary-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-main-navigation-container">
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
                    // 'container_class' => 'menu-main-navigation-container', // changes outer <div> class
				)
			);
			?>
            </div>
		</nav><!-- #site-navigation -->
        <div class="cta">
            <a href="/volunteer" class="btn btn-primary reversed">Get Involved</a>
        </div>
	</header><!-- #masthead -->
