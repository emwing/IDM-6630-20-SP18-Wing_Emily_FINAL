<!-- show all the posts with post type pokemon -->

<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<nav>
  <h3>Menu</h3>
  <?php wp_nav_menu ( array(
    'theme_location' => 'side-menu',
    'link_after' => '<span></span><span></span>'
  ) ); ?>
</nav>

<div class="filters">
  <div class="typeFilter">
    <h3>Filter by Type</h3>
    <label class="typeBox bugFilter">Bug
      <input type="checkbox" checked="checked" id="bugCB" value=".bug">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox darkFilter">Dark
      <input type="checkbox" checked="checked" id="darkCB" value=".dark">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox dragonFilter">Dragon
      <input type="checkbox" checked="checked" id="dragonCB" value=".dragon">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox electricFilter">Electric
      <input type="checkbox" checked="checked" id="electricCB" value=".electric">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox fairyFilter">Fairy
      <input type="checkbox" checked="checked" id="fairyCB" value=".fairy">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox fightingFilter">Fighting
      <input type="checkbox" checked="checked" id="fightingCB" value=".fighting">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox fireFilter">Fire
      <input type="checkbox" checked="checked" id="fireCB" value=".fire">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox flyingFilter">Flying
      <input type="checkbox" checked="checked" id="flyingCB" value=".flying">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox ghostFilter">Ghost
      <input type="checkbox" checked="checked" id="ghostCB" value=".ghost">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox grassFilter">Grass
      <input type="checkbox" checked="checked" id="grassCB" value=".grass">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox groundFilter">Ground
      <input type="checkbox" checked="checked" id="groundCB" value=".ground">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox iceFilter">Ice
      <input type="checkbox" checked="checked" id="iceCB" value=".ice">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox normalFilter">Normal
      <input type="checkbox" checked="checked" id="normalCB" value=".normal">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox poisonFilter">Poison
      <input type="checkbox" checked="checked" id="poisonCB" value=".poison">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox psychicFilter">Psychic
      <input type="checkbox" checked="checked" id="psychicCB" value=".psychic">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox rockFilter">Rock
      <input type="checkbox" checked="checked" id="rockCB" value=".rock">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox steelFilter">Steel
      <input type="checkbox" checked="checked" id="steelCB" value=".steel">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox waterFilter">Water
      <input type="checkbox" checked="checked" id="waterCB" value=".water">
      <span class="checkmark"></span>
    </label>
  </div>
</div>

<div class="postContainer">
  <?php get_template_part('loop-pokedex'); ?>
</div>

<?php get_footer(); ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
