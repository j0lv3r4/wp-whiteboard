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
        <div class="site-branding">
          <?php if ( is_front_page() ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php endif; ?>
          <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        </div> <!-- .row -->
      </div> <!-- .container -->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
      <div class="container">
        <div class="row">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'whiteboard' ); ?></button>
			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id' => 'primary-menu',
				'before' => '<a class="dropdown-icon-link" href="#"><svg class="dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></a>
',
			) ); ?>
        </div> <!-- .row -->
      </div> <!-- .container -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
