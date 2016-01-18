<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whiteboard
 */

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

  <?php elseif ( ($cat_slug == 'the-woodlands') || ($cat_slug == 'montgomery') || ($cat_slug == 'kingwood') ): ?>

  <div id="secondary" class="col-4 widget-area" role="complementary">
  <h4 class="location-page-title"><?php echo $cat_name; ?> Navigation</h4>

    <nav class="location-page-nav">
      <ul class="location-page-list">
        <li class="location-page-item"><a href="/<?php echo $cat_slug; ?>/recreational">Recreational</a></li>
        <li class="location-page-item"><a href="/<?php echo $cat_slug; ?>/youth-academy">Youth Academy</a></li>
        <li class="location-page-item"><a href="/<?php echo $cat_slug; ?>/competitive">Competitive</a></li>
      </ul>
    </nav>
  </div><!-- #secondary -->

  <?php else: ?>

  <div id="secondary" class="col-4 widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </div><!-- #secondary -->

  <?php endif; ?>
