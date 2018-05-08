<!-- show all the posts with post type pokemon -->

<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<?php get_template_part('sideNav'); ?>

<div class="filters">
  <input type="checkbox" name="cntrlFilter" id="cntrlFilter" class="cntrlFilter">
  <label for="cntrlFilter"><span class="menuNav">Filters</span></label>
  <h3>Filters</h3>

  <div class="typeFilter">
    <input type="checkbox" class="checkbox all" name="all" value="all" id="all" checked="checked">
    <label for="all" class="allCB">show/hide all</label>
    <?php get_template_part('loop-typeFilters'); ?>
  </div>
</div> <!-- ends .filters -->

<div class="postContainer">
  <?php get_template_part('loop-pokedex'); ?>
</div>

<?php get_footer(); ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
