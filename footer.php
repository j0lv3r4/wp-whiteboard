<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whiteboard
 */

?>

	</div><!-- #content -->

	<div class="section-interfaith section">
		<div class="container">
			<div class="row">
				<p>An <img class="interfaith-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-interfaith.png"> Publication</p>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .section -->

	<footer id="colophon" class="site-footer section" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="site-info">
					<p>4242 Interfaith Way, The Woodlands, Texas 77381 &bullet; 281-367-1230 &bullet; Privacy Policy &bullet; Sitemap</p>

					<p>Interfaith of The Woodlands is a 501(c)(3) non-profit organization. All donations are tax-deductible.</p>

					<p>Website design by <a target="_blank" href="https://adwhite.com">adWhite</a></p>
				</div><!-- .site-info -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
