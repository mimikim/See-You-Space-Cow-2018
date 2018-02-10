</main>

<?php if ( ! is_front_page() && ! is_post_type_archive( 'mk_portfolio' ) ) : ?>
  <footer id="js-footer" class="site-footer">
    <ul class="social-links">
      <li>
        <a href="https://github.com/mimikim/" target="_blank" aria-label="Github" class="icon-github">Github</a>
      </li>
      <li>
        <a href="http://www.linkedin.com/in/mimikimwebdeveloper" target="_blank" aria-label="Linkedin" class="icon-linkedin">Linkedin</a>
      </li>
    </ul>
  </footer>
<?php endif; ?>

<div class="dialog" aria-hidden="true" id="my-accessible-dialog">
  <div class="dialog-overlay" tabindex="-1" data-a11y-dialog-hide></div>
  <div class="dialog-content" aria-labelledby="dialogTitle" aria-describedby="dialogDescription" role="dialog">
    <div role="document">
      <button data-a11y-dialog-hide class="dialog-close" aria-label="Close this dialog window">&times;</button>

      <h1 id="dialogTitle">Subscribe to ESPI Newsletter</h1>

      <p id="dialogDescription">Fill in the ridiculously small form below to receive our ridiculously cool newsletter!</p>

      <form action="http://edenspiekermann.us10.list-manage.com/subscribe/post?u=927d6a7cf437da88aac7a87ec&amp;id=6823ab7bb8" method="post" target="_blank">
        <label for="email">Email (required)</label>
        <input type="email" name="EMAIL" id="email" placeholder="john.doe@gmail.com" required>
        <button type="submit" name="button">Sign up</button>
      </form>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
