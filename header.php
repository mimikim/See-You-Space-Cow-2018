<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <title><?php echo get_bloginfo( 'title' ); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
  <?php wp_head(); ?>
  <?php #get_template_part('partials/analytics'); ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage" <?php body_class(); ?>>

<?php get_template_part( 'partials/navigation' ); ?>

<main class="site-main" id="js-main" role="main" itemscope itemprop="mainContentOfPage">

  <?php if ( ! is_front_page() && ! is_post_type_archive( 'mk_portfolio' ) ) : ?>

    <section id="js-hero" class="hero">
      <?php echo the_title(); ?>
    </section>

  <?php endif; ?>
