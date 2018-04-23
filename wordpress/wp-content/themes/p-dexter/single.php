<!-- for a single generic post, get its info (loop-single.php)-->

<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<h2>WHAT</h2>

<?php
  get_template_part("loop-single");

  get_footer();
?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
