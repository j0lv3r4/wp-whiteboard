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

<script src="https://use.typekit.net/gyu1wdi.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div class="container">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'whiteboard' ); ?></a>
		</div> <!-- .container -->
		
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-8">
						<a class="top-bar-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="top-bar-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-thing-white.png">
						</a>
					</div> <!-- .col-md-6 -->
					
					<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 top-bar-nav">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="space-ace">About</span></a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="space-ace">Contact</span></a>
					</div> <!-- /.cols -->
					
					
					
		
					
					<div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-1 top-bar-icons">
						<a href="https://www.facebook.com/thebookthewoodlands/" target="_blank" class="top-bar-social-icon" aria-label="Facebook">
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
						</a>	
						
						<a href="https://www.instagram.com/interfaithofthewoodlands/" target="_blank" class="top-bar-social-icon" aria-label="Instagram">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
						
						<a href="mailto:ljohnson@woodlandsinterfaith.org" class="top-bar-social-icon" aria-label="Email">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</a>
					</div> <!-- .col-md-6 -->
				</div>
			</div>
		</div>

		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 site-branding">
					<?php if ( get_header_image() ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
						</a>
					<?php endif; // End header image check. ?>
					
					<?php if ( is_front_page() ) : ?>
						<h1 class="site-title sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
					<p class="site-description sr-only"><?php bloginfo( 'description' ); ?></p>
					</div> <!-- .site-branding -->

					<nav id="site-navigation" class="col-12 main-navigation site-nav navbar navbar-expand-md" role="navigation">
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
							'link_after' => '<span class="nav-separator">/</span>',
							'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
							'walker' => new WP_Bootstrap_Navwalker()
						) ); ?>
					</nav><!-- #site-navigation -->
				</div> <!-- .row -->
			</div><!-- .container -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
