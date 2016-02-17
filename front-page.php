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
        <a class='home-page-button' href="/the-woodlands/competitive/ussda-academy-boys-u14-u16-u18/">US Soccer Development Academy <span>(USSDA)</span></a>
      </div> <!-- .span-1-2 -->

      <div class="span-1-2">
        <a class="home-page-button" href="/the-woodlands/competitive/ecnl-girls-u14-u18/">Elite Clubs National League <span>(ECNL)</span></a>
      </div> <!-- .span-1-2 -->
    </div> <!--  .row -->
  </section> <!-- .home-page-buttons -->

  <?php require 'register-cta.php'; ?>

  <section class="field-status-section">
    <div class="container">

      <h2>Field Status</h2>
<?php
// WP_Query arguments
$args = array (
  'post_type'              => array( 'fs_post_type' ),
  'order'                  => 'ASC',
  'orderby'                => 'menu_order',
);

// The Query
$query = new WP_Query( $args );

// https://secure.php.net/manual/en/function.array-push.php
$times_arr = array();
foreach ($query->posts as $p) {
  $modified = $p->post_modified;
  array_push($times_arr, $modified);
}

// https://stackoverflow.com/questions/11012891/how-to-get-most-recent-date-from-an-array-of-dates#answer-11013478
$max = max(array_map('strtotime', $times_arr));
echo "<p><small>Last Update: " . date('D, F j, Y g:i a', $max) . "</small></p>";

//echo "<pre><code>";
//echo print_r($query->posts);
//echo "</code></pre>";

echo "<div class='row'>";

echo "<div class='col-1-2'>";
// The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    $title = get_the_title();

    if (get_field("column") == "left") {
      echo "<a class='field-status-button field-status-" . get_field("status") . "' href='" . get_field("google_map_url") . "'>" . $title . " (" . strtoupper(get_field("status")) . ")</a>";
    }
  }
} else {
  // no posts found
  echo "No posts";
}
echo "</div> <!-- .col-1-2 -->";

echo "<div class='col-1-2'>";
// The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    $title = get_the_title();

    if (get_field("column") == "right") {
      echo "<a class='field-status-button field-status-" . get_field("status") . "' href='" . get_field("google_map_url") . "'>" . $title . " (" . strtoupper(get_field("status")) . ")</a>";
    }
  }
} else {
  // no posts found
  echo "No posts";
}
echo "</div> <!-- .col-1-2 -->";

echo "</div> <!-- .row -->";

// Restore original Post Data
wp_reset_postdata();
?>

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
