<nav>
  <input type="checkbox" name="cntrlNav" id="cntrlNav" class="cntrlNav">
  <label for="cntrlNav"><span class="menuNav">Menu</span></label>
  <?php wp_nav_menu ( array(
    'theme_location' => 'side-menu',
    'link_after' => '<span></span><span></span>'
  ) ); ?>
</nav>
