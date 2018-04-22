<?php

// custom posts in wp
  function create_pokemon_post_type() {
    $labels = array(
      'name' => _x( 'Pokemon', 'post type general name' )
    );

    $args = array(
      'labels' => $labels,
      'menu_position' => 5,
      'supports' => array( 'title', 'thumbnail' ),
      'public' => true
    );

    register_post_type( 'pokemon', $args );
  }
  add_action( 'init', 'create_pokemon_post_type' );
/////////////////////////////


// turns on "feature image" in post editor
  add_theme_support( 'post-thumbnails' );
/////////////////////////////


// add css style sheet with all the html code
  function loadCSS() {
    wp_enqueue_style( 'p-dexter-css', get_template_directory_uri() . '/css/p-dexter-css.css' );
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900');
  }
  add_action( 'wp_enqueue_scripts', 'loadCSS' ); // hey wordpress, after you load scripts, run this "loadCSS" function
/////////////////////////////


// using variables for classes means can run if statements!
  function customBodyClasses($classes) {
    if (is_single()) {
      $classes[] = 'first';
      $classes[] = 'second';
    }
    $classes[] = 'one'; // $classes as array
    $classes[] = 'two';
    $classes[] = 'three';
    return $classes;
  }
  add_filter( 'body_class', 'customBodyClasses' ); // add custom classes to body_class via "customBodyClasses" function
/////////////////////////////


// remove admin bar from page
  // add_filter( 'show_admin_bar', '__return_false');
/////////////////////////////

?>
