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
    <div class="row">
      <?php putRevSlider('home', 'homepage'); ?>
    </div> <!-- .row -->
  </div> <!-- .site-slider -->

  <section class="home-page-buttons">
    <div class="row">
      <div class="span-1-2">
        <a class='home-page-button' href="#">US Soccer Development Academy <span>(USSDA)</span></a>
      </div> <!-- .span-1-2 -->

      <div class="span-1-2">
        <a class="home-page-button" href="#">Elite Clubs National League <span>(ECNL)</span></a>
      </div> <!-- .span-1-2 -->
    </div> <!--  .row -->
  </section> <!-- .home-page-buttons -->

  <section class="registration-section">
    <div class="container">
      <div class="row">
        <div class="registration-box">
          <h2>Registration</h2>

          <p>Sign up and pay for leagues, camps and tournaments as well as make donations to Texas Rush.</p>

          <a class="register-button" href="#">Click Here</a>
        </div> <!-- .registration-box -->
      </div> <!-- .row -->
    </div> <!-- .container -->
  </section> <!-- .registration-section -->

  <section class="field-status-section">
    <div class="container">
      <h2>Field Status</h2>

      <p><small>Last Update: Thursday, Nov 12, 2015, 3:34 PM</small></p>

      <div class="row">
        <div class="col-1-2">
          <a class="field-status-button field-status-closed" href="#">Bear Branch Sports Complex (CLOSED)</a>
          <a class="field-status-button field-status-open" href="#">Shadowbend Park (OPEN)</a>
          <a class="field-status-button field-status-closed" href="#">WendtwoodsPark (CLOSED)</a>
          <a class="field-status-button field-status-open" href="#">Kingwood - The Zone (OPEN)</a>
          <a class="field-status-button field-status-open" href="#">Carl Barton (OPEN)</a>
        </div> <!-- .col-1-2 -->

        <div class="col-1-2">
          <a class="field-status-button field-status-open" href="#">Alden Bridge Sports Fields (OPEN)</a>
          <a class="field-status-button field-status-open" href="#">Falconwing Park (OPEN)</a>
          <a class="field-status-button field-status-closed" href="#">Lents Family Park West (OPEN)</a>
          <a class="field-status-button field-status-closed" href="#">Fellowship of Montgomery Fields (OPEN)</a>
        </div> <!-- .col-1-2 -->
      </div> <!-- .row -->
    </div> <!-- .container -->
  </section> <!-- .field-status-section -->

  <section class="sponsors-section">
    <div class="container">
      <div class="row">
        <div class="col-1-4">
        </div> <!-- .col-1-4 -->

        <div class="col-1-4">
        </div> <!-- .col-1-4 -->

        <div class="col-1-4">
        </div> <!-- .col-1-4 -->

        <div class="col-1-4">
        </div> <!-- .col-1-4 -->
      </div> <!-- .row -->
    </div> <!-- .container -->
  </section> <!-- .sponsors-section -->

<?php get_footer(); ?>
