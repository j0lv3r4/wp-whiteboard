<?php
/**
 * The template for displaying the front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package whiteboard
 */

get_header(); ?>

	<div class="site-slider">
		<img src="<?php echo get_template_directory_uri(); ?>/img/carousel.png">
	</div> <!-- .site-slider -->

	<section class="section-events section">
		<div class="container">
			<div class="row">
				<div class="col-7 events-left">
					<div class="event">
						<img class="event-img" src="<?php echo get_template_directory_uri(); ?>/img/img-book.png">
						<h4 class="event-title">Pharetra Risus Amet</h4>
					</div> <!-- .event -->
				</div> <!-- .col-7 -->

				<div class="col-5 events-right">
					<div class="top">
						<div class="event">
							<img class="event-img" src="<?php echo get_template_directory_uri(); ?>/img/image.png">
							<h4 class="event-title">Porta Quam Ipsum</h4>
						</div> <!-- .event -->
					</div> <!-- .top -->

					<div class="bottom">
						<div class="event">
							<img class="event-img" src="<?php echo get_template_directory_uri(); ?>/img/img-group.png">
							<h4 class="event-title">Ligula Adipiscing Sem</h4>
						</div> <!-- .event -->
					</div> <!-- .bottom -->
				</div> <!-- .col-5 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section>

	<div class="separator">
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/img/divider.png">
		</div> <!-- .container -->
	</div> <!-- .separator -->

	<div class="section-news section">
		<div class="container">
			<div class="row">
				<div class="col-1-3 news-item">
					<img class="news-item-img" src="<?php echo get_template_directory_uri(); ?>/img/thank-you.png">
					<h4 class="news-item-title">Egestas Bibendum Fusce</h4>
					<p class="news-item-excerpt">Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem.</p>
					<a class="button-ghost news-item-btn" href="#">Read More</a>
				</div> <!-- .col-1-3 .news-item -->

				<div class="col-1-3 news-item">
					<img class="news-item-img" src="<?php echo get_template_directory_uri(); ?>/img/Layer-2.png">
					<h4 class="news-item-title">Ipsum Bibendum Malesuada</h4>
					<p class="news-item-excerpt">Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem.</p>
					<a class="button-ghost news-item-btn" href="#">Read More</a>
				</div> <!-- .col-1-3 .news-item -->

				<div class="col-1-3 news-item">
					<img class="news-item-img" src="<?php echo get_template_directory_uri(); ?>/img/Layer-3.png">
					<h4 class="news-item-title">Sollicitudin Cras Sem</h4>
					<p class="news-item-excerpt">Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem.</p>
					<a class="button-ghost news-item-btn" href="#">Read More</a>
				</div> <!-- .col-1-3 .news-item -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .section-news -->

<?php get_footer(); ?>
