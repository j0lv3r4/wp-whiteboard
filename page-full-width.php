<?php
/**
 * Template Name: Full Width
 *
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package whiteboard
 */

get_header(); ?>

  <div class="page-header-section">
    <div class="page-header-bg">
      <div class="container">
        <div class="row">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .page-header-bg -->
  </div> <!-- .page-header-image -->

  <div class="breadcrumb-container">
    <div class="container">
      <div class="row">
        <?php if ( function_exists('yoast_breadcrumb')  )
          {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .breadcrumb-container -->

	<div id="primary" class="content-area">
    <div class="container">
      <div class="row">
        <main id="main" class="col-12 site-main" role="main">

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            ?>

          <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->

        <?php // get_sidebar(); ?>

      </div> <!-- .row -->
    </div> <!-- .container -->
	</div><!-- #primary -->

<?php get_footer(); ?>
