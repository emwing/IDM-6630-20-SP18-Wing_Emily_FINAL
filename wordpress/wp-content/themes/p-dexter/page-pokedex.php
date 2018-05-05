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
      <input type="checkbox" checked="checked" id="bugCB" name="bug">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox darkFilter">Dark
      <input type="checkbox" checked="checked" id="darkCB" name="dark">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox dragonFilter">Dragon
      <input type="checkbox" checked="checked" id="dragonCB" name="dragon">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox electricFilter">Electric
      <input type="checkbox" checked="checked" id="electricCB" name="electric">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox fairyFilter">Fairy
      <input type="checkbox" checked="checked" id="fairyCB" name="fairy">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox fightingFilter">Fighting
      <input type="checkbox" checked="checked" id="fightingCB" name="fighting">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox fireFilter">Fire
      <input type="checkbox" checked="checked" id="fireCB" name="fire">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox flyingFilter">Flying
      <input type="checkbox" checked="checked" id="flyingCB" name="flying">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox ghostFilter">Ghost
      <input type="checkbox" checked="checked" id="ghostCB" name="ghost">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox grassFilter">Grass
      <input type="checkbox" checked="checked" id="grassCB" name="grass">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox groundFilter">Ground
      <input type="checkbox" checked="checked" id="groundCB" name="ground">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox iceFilter">Ice
      <input type="checkbox" checked="checked" id="iceCB" name="ice">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox normalFilter">Normal
      <input type="checkbox" checked="checked" id="normalCB" name="normal">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox poisonFilter">Poison
      <input type="checkbox" checked="checked" id="poisonCB" name="poison">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox psychicFilter">Psychic
      <input type="checkbox" checked="checked" id="psychicCB" name="psychic">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox rockFilter">Rock
      <input type="checkbox" checked="checked" id="rockCB" name="rock">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox steelFilter">Steel
      <input type="checkbox" checked="checked" id="steelCB" name="steel">
      <span class="checkmark"></span>
    </label>
    <label class="typeBox waterFilter">Water
      <input type="checkbox" checked="checked" id="waterCB" name="water">
      <span class="checkmark"></span>
    </label>
  </div>
</div>

<div class="postContainer">
  <?php get_template_part('loop-pokedex'); ?>
</div>

<?php get_footer(); ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
