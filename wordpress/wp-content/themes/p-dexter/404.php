<!--  <?php echo basename(__FILE__); ?> -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo get_bloginfo('name'); ?></title>

    <?php wp_head(); ?> <!-- always put this at the end of the head section -->
  </head>
  <body class="uh-oh" >
    <div class="pageWrap">

      <header>
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <img src="http://localhost/WING-Emily-WORDPRESS/wordpress/wp-content/uploads/2018/04/1010_large.png" height="500" width="371" alt="" id="MissingNo">
        <h2>A wild MissingNo Appeared!</h2>
      </header>

<nav>
  <?php wp_nav_menu ( array(
    'theme_location' => 'error-menu',
    'link_after' => '<span></span><span></span>'
  ) ); ?>
</nav>

<?php get_footer(); ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
