<!-- show all the posts with post type pokemon -->

<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<nav>
  <?php wp_nav_menu ( array(
    'theme_location' => 'side-menu',
    'link_after' => '<span></span><span></span>'
  ) ); ?>
</nav>

<div class="filters">
  <p>test</p>
</div>

<div class="postContainer">
  <?php get_template_part('loop-pokedex'); ?>
</div>

<?php get_footer(); ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
