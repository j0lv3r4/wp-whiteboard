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

  <?php if (!is_front_page()): require 'register-cta.php'; endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-1-4">
          <h3>TEXAS RUSH FAN WEAR</h3>

          <p>Check out our specials on the latest Texas Rush Fan Wear items available and see when we’ll be at the fields next!</p>
        </div> <!-- .col-1-4 -->

        <div class="col-1-4">
          <img src="<?php echo get_template_directory_uri(); ?>/img/st-lukes-healt.png">
        </div> <!-- .col-1-4 -->

        <div class="col-1-4">
          <img src="<?php echo get_template_directory_uri(); ?>/img/USDA.png">
        </div> <!-- .col-1-4 -->

        <div class="col-1-4">
          <img src="<?php echo get_template_directory_uri(); ?>/img/ECNL.png">
        </div> <!-- .col-1-4 -->
      </div> <!-- .row -->
    </div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
