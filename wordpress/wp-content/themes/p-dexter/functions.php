<?php

// custom posts in wp admin
  function create_pokemon_post_type() {
    $labels = array( // wp admin ui label in dashboard menu
      'name'                 => _x( 'Pokémon', 'post type general name' ),
      'singular_name'        => _x( 'Pokémon', 'post type singular name' ),
      'add_new'              => _x( 'Add New', 'pokemon' ),
      'add_new_item'         => 'Add New Pokémon',
      'edit_item'            => 'Edit Pokémon',
      'new_item'             => 'New Pokémon',
      'all_items'            => 'All Pokémon',
      'view_item'            => 'View Pokémon',
      'search_items'         => 'Search Pokémon',
      'not_found'            => 'No Pokémon Found',
      'not_found_in_trash'   => 'No Pokémon Found in the Trash',
      'parent_item_colon'    => '',
      'menu_name'            => 'Pokémon'
    );

    $args = array( // wp admin ui customize dashboard menu
      'labels' => $labels,
      'menu_position' => 5,
      'supports' => array( 'title', 'thumbnail' ),
      'public' => true,
      'taxonomies' => array( 'category' )
    );

    register_post_type( 'pokemon', $args );
  }
  add_action( 'init', 'create_pokemon_post_type' );
/////////////////////////////


// turns on "feature image" in wp admin post editor
  add_theme_support( 'post-thumbnails' );
/////////////////////////////


// turns on "custom background" in wp admin appearance
  $defaults = array(
    'default-color' => '',
    'default-image' => '',
    'default-repeat' => 'repeat',
    'default-position-x' => 'left',
    'default-position-y' => 'top',
    'default-size' => 'auto',
    'default-attachment' => 'scroll',
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => ''
  );

  add_theme_support( 'custom-background', $defaults );
/////////////////////////////


// turns on "custom header" in wp admin appearance
  $args = array(
  	'flex-width'    => true,
  	'width'         => 2000,
  	'flex-height'    => true,
  	'height'        => 736,
  	'default-image' => '',
  );
  add_theme_support( 'custom-header', $args );
/////////////////////////////


// create navigation menues in wp admin appearance (so other people can add more navigation)
  function register_my_menus() {
    register_nav_menus( array(
      'home-menu' => 'Home Navigation',
      'side-menu' => 'Side Navigation',
      'error-menu' => 'Error Navigation',
      'footer-menu' => 'Footer Navigation'
    ) );
  }

  add_action( 'init', 'register_my_menus' );
/////////////////////////////


// add css style sheet with all the html code
  function loadCSS() {
    wp_enqueue_style( 'p-dexter-css', get_template_directory_uri() . '/css/p-dexter.css' );
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Orbitron:400,500,700,900');
  }
  add_action( 'wp_enqueue_scripts', 'loadCSS' ); // hey wordpress, after you load scripts, run this "loadCSS" function
/////////////////////////////


// add js
  function my_theme_scripts() {
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), array('jquery'), null, true );
  }
  add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
/////////////////////////////


// using variables for classes means can run if statements!
  function customBodyClasses($classes) {
    if (is_page()) {
      $classes[] = 'pkmThumb';
    }
    $classes[] = 'one'; // $classes as array
    $classes[] = 'two';
    $classes[] = 'three';
    return $classes;
  }
  add_filter( 'body_class', 'customBodyClasses' ); // add custom classes to body_class via "customBodyClasses" function
/////////////////////////////


// remove admin bar from page
  add_filter( 'show_admin_bar', '__return_false');
/////////////////////////////


// enable upload svgs
  function add_file_types_to_uploads($file_types) {
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
  }
  add_action('upload_mimes', 'add_file_types_to_uploads');

?>
