<?php
/**
 * The template for displaying the front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package whiteboard
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<main id="main" class="col-md-12 site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					//   comments_template();
					// endif;
					?>

				<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->

				<?php // get_sidebar(); ?>

			</div> <!-- .row -->
		</div> <!-- .container -->
	</div><!-- #primary -->

<?php get_footer(); ?>
