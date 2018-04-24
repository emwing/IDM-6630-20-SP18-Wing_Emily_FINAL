<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<nav>
  <?php wp_nav_menu ( array(
    'theme_location' => 'home-menu',
    'link_after' => '<span></span><span></span>'
  ) ); ?>
</nav>

<?php get_footer(); ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
