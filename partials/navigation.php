<header class="site-header" id="js-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

    <div class="container">
      <a href="<?php echo site_url(); ?>" itemscope itemtype="http://schema.org/Organization" class="home-link">Mimi Kim Web Developer</a>

      <button class="nav-toggle" id="js-nav-toggle" role="button" aria-pressed="false">
        <span class="screen-reader-text">Toggle Navigation Menu</span>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>

      <nav class="overlay" id="js-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" aria-expanded="false">
        <ul class="main-navigation">
          <li>
            <a href="<?php echo get_post_type_archive_link( 'mk_portfolio' ); ?>" itemprop="url">Portfolio</a>
          </li>
          <li>
            <a href="<?php echo get_permalink( 25 ); ?>" itemprop="url">About</a>
          </li>
          <li>
            <a href="<?php echo get_permalink( 21 ); ?>" itemprop="url">Blog</a>
          </li>
        </ul>
      </nav>

    </div>

</header>
