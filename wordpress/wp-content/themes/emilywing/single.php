<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

</header>

<?php

  get_template_part("loop-single");

  get_footer();
?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
