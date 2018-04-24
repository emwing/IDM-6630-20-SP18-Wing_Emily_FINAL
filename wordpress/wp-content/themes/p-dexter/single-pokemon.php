<!-- show single post with post type pokemon -->

<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<nav>
  <?php wp_nav_menu ( array(
    'theme_location' => 'side-menu',
    'link_after' => '<span></span><span></span>'
  ) ); ?>
</nav>

<div class="info">
  <h3><?php the_title(); ?></h3>
  <h4>#<?php the_field( 'national_pokedex_number' ); ?></h4>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div <?php post_class(); ?> >
    <div class="postNav">
      <p><?php previous_post_link(); ?> | <?php next_post_link(); ?></p>
    </div>

    <?php
      $image = get_field('official_art');
      if( !empty($image) ): ?>
      	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="single-pokemon-img" />
    <?php endif; ?>

    <p><?php the_field('description'); ?></p>
  </div>


<?php endwhile; else : ?>
  <p><?php esc_html_e( "The Pokedex is empty. It's time to go out and catch some pokemon!" ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
