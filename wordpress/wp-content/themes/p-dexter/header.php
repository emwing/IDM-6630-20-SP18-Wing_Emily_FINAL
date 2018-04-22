<!--  <?php echo basename(__FILE__); ?> -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo get_bloginfo('name'); ?></title>

    <?php wp_head(); ?> <!-- always put this at the end of the head section -->
  </head>
  <body <?php body_class(); ?> >
    <header>
      <h1><a href="<?php echo home_url();?>"><?php echo get_bloginfo('name'); ?></a></h1>

    <!--  <?php echo "END OF " . basename(__FILE__); ?> -->
