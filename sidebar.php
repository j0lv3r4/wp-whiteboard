<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whiteboard
 */

function the_parent_slug() {
  global $post;

  if ($post->post_parent == 0) return '';

  $post_data = get_post($post->post_parent);
  return $post_data->post_name;
}

function top_level_parent() {
  $parent = array_reverse(get_post_ancestors($post->ID));
  $first_parent = get_page($parent[0]);
  return $first_parent->post_name;
}

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

$cats = get_the_category();
$cat_name = $cats[0]->name;
$cat_slug = $cats[0]->slug;

?>

  <?php if ( $cat_slug == 'events' ): ?>

    <div id="secondary" class="col-4 widget-area" role="complementary">
      <nav class="location-page-nav">
        <ul class="location-page-list">
          <?php wp_list_pages('title_li=&child_of=10'); ?>
        </ul>
      </nav>
    </div><!-- #secondary -->

  <?php elseif ( $cat_slug == 'about' ): ?>

    <div id="secondary" class="col-4 widget-area" role="complementary">
      <nav class="location-page-nav">
        <ul class="location-page-list">
          <?php wp_list_pages('title_li=&child_of=6'); ?>
        </ul>
      </nav>
    </div><!-- #secondary -->

  <?php elseif ( $cat_slug == 'staff-member' ): ?>

  <?php
    // if parent page is staff and category is staff-member then show
    // if parent page is staff and category is not staff-member then don't show
  ?>

    <div id="secondary" class="col-4 widget-area" role="complementary">
      <nav class="location-page-nav">
        <ul class="location-page-list">
          <?php wp_list_pages('title_li=&child_of=6'); ?>
        </ul>
      </nav>
    </div><!-- #secondary -->

  <?php elseif ( ($cat_slug == 'montgomery') || (top_level_parent() == 'montgomery')): ?>

    <div id="secondary" class="col-4 widget-area" role="complementary">
      <nav class="location-page-nav">
        <ul class="location-page-list">
          <?php wp_list_pages('title_li=&child_of=33'); ?>
        </ul>
      </nav>
    </div><!-- #secondary -->

  <?php elseif ( ($cat_slug == 'the-woodlands') || (top_level_parent() == 'the-woodlands')): ?>

    <div id="secondary" class="col-4 widget-area" role="complementary">
      <nav class="location-page-nav">
        <ul class="location-page-list">
          <?php wp_list_pages('title_li=&child_of=30'); ?>
        </ul>
      </nav>
    </div><!-- #secondary -->

  <?php elseif ( ($cat_slug == 'kingwood') || (top_level_parent() == 'kingwood')): ?>

    <div id="secondary" class="col-4 widget-area" role="complementary">
      <nav class="location-page-nav">
        <ul class="location-page-list">
          <?php wp_list_pages('title_li=&child_of=41'); ?>
        </ul>
      </nav>
    </div><!-- #secondary -->


  <?php else: ?>

  <div id="secondary" class="col-4 widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </div><!-- #secondary -->

  <?php endif; ?>
