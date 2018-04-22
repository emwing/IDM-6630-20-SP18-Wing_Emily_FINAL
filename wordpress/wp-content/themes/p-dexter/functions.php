<?php

  // custom posts
  function create_pokemon_post_type() {
    $labels = array(
      'name' => _x( 'Pokemon', 'post type general name' )
    );

    $args = array(
      'labels' => $labels,
      'menu_position' => 5,
      'supports' => array( 'title', 'editor','thumbnail' ),
      'public' => true
    );

    register_post_type( 'pokemon', $args );
  }
  add_action( 'init', 'create_pokemon_post_type' );


  add_theme_support( 'post-thumbnails' ); // turns on "feature image" in post editor


  function loadCSS() { // add css style sheet with all the html code
    wp_enqueue_style( 'p-dexter-css', get_template_directory_uri() . '/css/p-dexter-css.css' );
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900');
  }
  add_action( 'wp_enqueue_scripts', 'loadCSS' ); // hey wordpress, after you load scripts, run this "loadCSS" function


  function customBodyClasses($classes) { // using variables for classes means can run if statements!
    if (is_single()) {
      $classes[] = 'first';
      $classes[] = 'second';
    }
    $classes[] = 'one'; // $classes as array
    $classes[] = 'two';
    $classes[] = 'three';
    return $classes;
  }
  add_filter( 'body_class', 'customBodyClasses' ); // add custom classes to body_class bia "customBodyClasses" function


  // add_filter( 'show_admin_bar', '__return_false'); // remove admin bar from page

?>
