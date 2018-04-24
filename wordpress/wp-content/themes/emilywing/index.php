<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <h2>News and Info About Japan's Legendary Figure Skater</h2>
</header>

<?php
  get_template_part("loop");

  get_footer();
?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
