<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whiteboard
 */

get_header(); ?>

  <div class="page-header-section">
    <div class="page-header-bg">
      <div class="container">
        <div class="row">
          <?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>

          <h1 class="entry-title">News</h2>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .page-header-bg -->
  </div> <!-- .page-header-image -->

	<div id="primary" class="content-area">
    <div class="container">
      <div class="row">
        <main id="main" class="col-8 site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'single' ); ?>

          <?php the_post_navigation(); ?>

          <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;
          ?>

        <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->

        <?php get_sidebar(); ?>

      </div> <!-- .row -->
    </div> <!-- .container -->
	</div><!-- #primary -->

<?php get_footer(); ?>
