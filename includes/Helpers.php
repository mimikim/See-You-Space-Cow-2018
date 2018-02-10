<?php
// helper functions

namespace SpaceCow;

class Helpers {

  // renders buttons for all category taxonomy
  static function render_category_filters( $type ) {

    $main_taxonomy = get_object_taxonomies($type);
    $categories = get_terms($main_taxonomy[0], array(
      'type' => $type,
      'orderby' => 'name',
      'parent' => 0,
      'exclude' => 1
    ));

    foreach ($categories as $category) : ?>
      <button class="button medium-padding ga-tracking" data-category-id="<?php echo $category->term_id; ?>" data-event-category="Category Filter" data-event-action="Clicked Filter" data-event-label="<?php echo $category->name; ?>">
        <?php echo $category->name; ?>
      </button>
    <?php endforeach;

  }

  // returns featured image url
  static function get_featured_image( $id, $size = 'full' ) {
    if (has_post_thumbnail( $id ) ) {
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), $size );
      return $image[0];
    } else {
      return false;
    }
  }

}