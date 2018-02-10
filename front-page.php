<?php get_header(); ?>

<div class="fullpage-container" id="js-fullpage-container">
  <section class="section first">
    <div class="homepage-heading">
      <h2 class="text">see you<br>
        space cow
      </h2>

      <span class="cow-sitting-svg">
        <?php include_once( 'assets/svg/cow-animated.svg' ); ?>
      </span>
    </div>

    <div class="scroll-down" id="js-scroll">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span id="text">Please Scroll</span>
    </div>
  </section>

   <section class="section second">
     <div class="container">

        <div class="content">
          <div class="trek-badge" id="js-trek-badge">
              <?php include_once( 'assets/svg/space-trek.svg' ); ?>
          </div>
          <div class="text">

            <h2 class="heading">Where No Cow Has Gone Before&hellip;</h2>

            <div class="card-container">

              <div class="button red card" data-a11y-dialog-show="my-accessible-dialog" role="button">
                <span class="title">HTML, CSS</span>
                <span class="text">Semantic HTML5. Modern transitions and animations through CSS3. Cross browser friendly, mobile responsive.</span>
              </div>
              <div class="button blue card" data-a11y-dialog-show="my-accessible-dialog" role="button">
                <span class="title">JavaScript</span>
                <span class="text">Vanilla JavaScript. Next generation ES6. Extensive jQuery experience, AJAX, familiarity with Angular</span>
              </div>
              <div class="button gold card" data-a11y-dialog-show="my-accessible-dialog" role="button">
                <span class="title">PHP</span>
                <span class="text">Custom CMS development through WordPress or flat HTML & PHP websites</span>
              </div>
            </div>

          </div>
        </div>

     </div>
   </section>

  <section class="section" style="padding-top: 100px; font-size: 60px; color: white; text-align: center;">
    <div>
      <section class="featured-slider" id="js-homepage-slider"></section>

      <a href="<?php echo get_post_type_archive_link( 'mk_portfolio' ); ?>" class="button gold" style="margin-top: 16px; margin-bottom: 8px;">See Portfolio</a>
      <br>
      <ul class="social-links">
        <li>
          <a href="https://github.com/mimikim/" target="_blank" aria-label="Github" class="icon-github" style="color:white;">github</a>
        </li>
        <li>
          <a href="http://www.linkedin.com/in/mimikimwebdeveloper" target="_blank" aria-label="Linkedin" class="icon-linkedin" style="color:white;">linkedin</a>
        </li>
      </ul>

    </div>
  </section>
</div>

<?php get_footer(); ?>

