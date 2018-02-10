<?php
get_header();
$type = get_post_type();
?>

<div class="container">

  <h1 class="page-title">Portfolio</h1>
  <span style="font-size: 20px; color: white; display: block;">Filter by Category:</span>
  <nav class="category-navigation" id="js-portfolio-filters">
    <?php \SpaceCow\Helpers::render_category_filters( $type ); ?>
  </nav>

  <button id="js-reset" class="button">Reset Filters</button>

  <section id="js-portfolio-results" class="portfolio-container">
    <?php

    $query_args = array (
      'posts_per_page' => 100,
      'post_type' => 'mk_portfolio',
      'orderby' => 'rand'
    );

    $query = new WP_Query( $query_args ); ?>

      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="item" tabindex="0">
          <figure>
            <?php $thumbnail = \SpaceCow\Helpers::get_featured_image( $post->ID, 'full' ); ?>
            <img src="<?php echo $thumbnail; ?>" class="responsive">
            <figcaption>
              <?php echo get_the_title(); ?>
            </figcaption>
          </figure>
        </div>

      <?php endwhile; endif; wp_reset_postdata(); ?>
  </section>

</div>

<?php get_footer(); ?>

