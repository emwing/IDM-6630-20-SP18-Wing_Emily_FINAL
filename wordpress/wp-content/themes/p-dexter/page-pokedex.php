<!-- show all the posts with post type pokemon -->

<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<?php get_template_part('loop-pokedex'); ?>

<?php get_footer(); ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
