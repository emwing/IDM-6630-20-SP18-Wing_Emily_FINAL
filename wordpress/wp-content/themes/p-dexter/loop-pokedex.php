<!--  <?php echo basename(__FILE__); ?> -->

  <?php
    $pokemon_post_type_query = array(
      'post_type' => 'pokemon',
      'post_status' => 'publish',
      'posts_per_page' => -1
    );

    $get_pokemon = new WP_Query( $pokemon_post_type_query );

    if ( $get_pokemon->have_posts() ) : while ( $get_pokemon->have_posts() ) : $get_pokemon->the_post();
  ?>

    <div <?php post_class(); ?> >

        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>

    </div>

  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, the pokedex is empty.' ); ?></p>
  <?php endif; ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
