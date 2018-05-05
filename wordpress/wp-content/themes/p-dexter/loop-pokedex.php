<!--  <?php echo basename(__FILE__); ?> -->

  <?php
    $pokemon_post_type_query = array(
      'post_type' => 'pokemon',
      'post_status' => 'publish',
      'posts_per_page' => -1
    );

    $get_pokemon = new WP_Query( $pokemon_post_type_query );

    if ( $get_pokemon->have_posts() ) : while ( $get_pokemon->have_posts() ) : $get_pokemon->the_post();

    $classArray = get_field('types');  // make an array based on types field

    array_push( $classArray, get_field("generation") );  // add to $classArray the generation field

    $classArray = array_map('strtolower', $classArray );  // convert array output into lowercase

  ?>

    <div <?php post_class( $classArray ); ?> >  <!-- put the array of types and generation as part of the post's classes -->

        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>

    </div>

  <?php endwhile; else : ?>
    <p><?php esc_html_e( "The Pokedex is empty. It's time to go out and catch some pokemon!" ); ?></p>
  <?php endif; ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
