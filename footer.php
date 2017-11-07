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

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="site-info">
						<p><?php
							printf( esc_html__( '4242 Interfaith Way, The Woodlands, Texas 77381 • 281-367-1230 • %1$s • %2$s', 'whiteboard'  ), '<a href="/privacy-policy">Privacy Policy</a>', '<a href="/sitemap">Sitemap</a>' );
						?></p>
						
						<p><?php
							printf( esc_html__( 'Interfaith of the Woodlands is a 501(c)(3) non-profit organization. All donations are tax-deductible.', 'whiteboard' ) );	
						?></p>
						
						<a href="<?php echo esc_url( __( 'https://adWhite.com/', 'whiteboard' ) ); ?>" target="_blank"><?php
							printf( esc_html__( 'Website design by %s', 'whiteboard' ), 'adWhite' );
						?></a>
					</div>
				</div> <!-- .row -->
			</div> <!-- .container -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
