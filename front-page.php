<?php
/**
 * The template for displaying the front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package whiteboard
 */
 
function whiteboard_the_excerpt_max_charlength( $charlength ) {
	$excerpt = get_the_excerpt();
	$charlengt++;
	
	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $excut ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo ' [...]';
	} else {
		echo $excerpt;
	}
}

get_header(); ?>

	<div class="site-slider">
		<?php 
			echo do_shortcode('[smartslider3 slider=2]');
		?>
	</div>
	
	<div class="home-latest-events">
		<div class="container">
			<div class="row">
				<?php
					$catquery = new WP_Query( 'cat=3&posts_per_page=3' );
					$index = 0;
				?>
				<div class="latest-events mt-5">
					<!-- align-items-center no-gutters -->
					<div class="row">
						<?php
							while($catquery->have_posts()) : $catquery->the_post(); $index++;
						?>
						
						<?php if ($index == 1) : ?>
							<div class="col-md-8 event-<?php echo $index; ?>">
								<a href="<?php echo get_the_permalink(); ?>">
									<?php
										echo get_the_post_thumbnail(
											get_the_ID(),
											'full',
											array( 'class' => 'event-image-' . $index . ' event-image latest-event-image' )	
										); 
									?>
								</a>
								<a href="<?php echo get_the_permalink(); ?>" class="text-center event-title event-title-<?php echo $index; ?>">
									<?php echo the_title(); ?>
								</a>
							</div> <!-- .col-md-8 -->
							<div class="col-md-4">
								<?php else: ?>
									<div class="col-md-12 event-<?php echo $index; ?>">
										<a href="<?php echo get_the_permalink(); ?>" class="event-" . $index . "-image-link event-image-link">
											<?php
												echo get_the_post_thumbnail(
													get_the_ID(),
													'full',
													array( 'class' => 'event-image-' . $index . ' event-image' )
												);
											?>
										</a>
										<a href="<?php echo get_the_permalink(); ?>" class="event-title event-title-<?php echo $index; ?>">
											<?php echo the_title(); ?>
										</a>
									</div> <!-- .col-md-12 -->
								<?php endif; ?>							
							<?php if ($index == 3) : ?>
							</div> <!-- .col-md-4 -->
							<?php endif; ?>
						<?php
							endwhile;
						    wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="divider">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="hr-circle-ends"></div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .divider -->
	
	<div class="latest-news">
		<div class="container">
			<div class="row">
				<?php
					$catquery = new WP_Query(
						'cat=4&posts_per_page=3'
					);
				?>
				
				<?php
					while( $catquery->have_posts() ) : $catquery->the_post();
				?>
					<div class="col-md-4 news-item">
						<a href="<?php echo get_the_permalink(); ?>">
							<?php
								echo get_the_post_thumbnail( get_the_ID(), 'full' );
							?>
						</a>
						
						<a class="news-item-title" href="<?php echo get_the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
						
						<!-- p><?php // echo get_the_excerpt(); ?></p -->
						<p class="news-item-content"><?php echo whiteboard_the_excerpt_max_charlength( 120 ); ?></p>
						
						<a class="news-item-link btn btn-outline-secondary" href="<?php echo get_the_permalink(); ?>" class="btn btn-outline-secondary">Read More</a>
					</div>
				<?php
					endwhile;
					wp_reset_postdata();
				?>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .latest-news -->

<?php get_footer(); ?>
