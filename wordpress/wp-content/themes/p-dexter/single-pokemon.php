<!-- show single post with post type pokemon -->

<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<?php get_template_part('sideNav'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="pokemonInfo">
    <h3><?php the_title(); ?></h3>
    <h4>#<?php the_field( 'national_pokedex_number' ); ?></h4>

    <?php
      $pkmTypes = get_field( 'types' );
      foreach ($pkmTypes as $key => $value) {
        $str = strtolower($value);
        echo '<div class="typeBox ' . $str . 'Filter">' . $str . '</div>';
      }
    ?>
  </div>

  <div <?php post_class('pokemonPost'); ?> >

    <div class="postNav">
      <div class="postNavNext">
        <p><?php next_post_link('%link'); ?></p>
      </div>
      <div class="postNavPrev">
        <p><?php previous_post_link('%link'); ?></p>
      </div>
    </div>

    <div class="pokemonImg">
      <?php
        $image = get_field('official_art');
        if( !empty($image) ): ?>
        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="single-pokemon-img" />
      <?php endif; ?>
    </div>

    <div class="pokemonDescription">
      <h3>Category: <?php the_field('category'); ?></h3>
      <p><?php the_field('description'); ?></p>
    </div>

  </div> <!-- ends .pokemon-post -->

<?php endwhile; else : ?>
  <p><?php esc_html_e( "The Pokedex is empty. It's time to go out and catch some pokemon!" ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
