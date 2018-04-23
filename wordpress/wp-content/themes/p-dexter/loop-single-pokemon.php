<!--  <?php echo basename(__FILE__); ?> -->
<main>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div <?php post_class(); ?> >

      <h2><?php the_title(); ?></h2>

      <?php the_field('official_art'); ?>

      <?php the_content(); ?>

    </div>

  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</main>
<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
