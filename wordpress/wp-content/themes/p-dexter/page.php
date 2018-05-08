<!-- regular page -->

<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<?php get_template_part('sideNav'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="pageInfo">
    <h3><?php the_title(); ?></h3>
  </div>

  <div class="pageContent">
    <?php
      if( has_post_thumbnail() ) {
        the_post_thumbnail('full');
      }
    ?>
    <p><?php the_content(); ?></p>
  </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
