<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whiteboard
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div class="container">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'whiteboard' ); ?></a>
		</div> <!-- .container -->

		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 site-branding">
					<?php if ( is_front_page() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					</div> <!-- .site-branding -->

					<nav id="site-navigation" class="col-12 main-navigation site-nav navbar navbar-expand-md navbar-light bg-light" role="navigation">
						<span class="navbar=text">&nbsp;</span>
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'depth' => 3,
							'container' => 'div',
							'container_id' => 'navbarSupportedContent',
							'container_class' => 'collapse navbar-collapse',
							'menu_id' => 'primary-menu',
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
							'walker' => new WP_Bootstrap_Navwalker()
						) ); ?>
					</nav><!-- #site-navigation -->
				</div> <!-- .row -->
			</div><!-- .container -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
