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

<script src="https://use.typekit.net/uih6zxo.js"></script>
<script>try{Typekit.load({ async: true  });}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <div class="container">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'whiteboard' ); ?></a>
  </div> <!-- .container -->

  <div class="top-nav">
    <div class="row">
      <div class="span-1-3">
        <a class="top-nav-button" href="#">Visit <span>the</span> Woodlands Site</a>
      </div> <!-- .span-1-3 -->

      <div class="span-1-3">
        <a class="top-nav-button" href="#">Visit <span>the</span> Montgomery Site</a>
      </div> <!-- .span-1-3 -->

      <div class="span-1-3">
        <a class="top-nav-button no-border" href="#">Visit <span>the</span> Kingwood Site</a>
      </div> <!-- .span-1-3 -->
    </div> <!-- .row -->
  </div> <!-- .top-nav -->

	<header id="masthead" class="site-header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-3 site-branding">
          <?php if ( is_front_page() && is_home() ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php endif; ?>
          <p class="site-description"><?php bloginfo( 'description' ); ?></p>

          <img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/img/texas_rush_logo.jpg">
        </div> <!-- .site-branding -->

        <nav id="site-navigation" class="col-9 main-navigation" role="navigation">
          <div class="container">
            <div class="row">
              <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'whiteboard' ); ?></button>
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </div> <!-- .row -->
          </div> <!-- .container -->
        </nav><!-- #site-navigation -->
      </div> <!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
