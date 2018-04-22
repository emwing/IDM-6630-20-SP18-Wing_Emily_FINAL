<!--  <?php echo basename(__FILE__); ?> -->
<main>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div <?php post_class(); ?> >

        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>

    </div>

  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Whoops, something went wrong.' ); ?></p>
  <?php endif; ?>

</main>
<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
