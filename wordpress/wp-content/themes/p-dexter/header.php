<!--  <?php echo basename(__FILE__); ?> -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo get_bloginfo('name'); ?></title>

    <?php wp_head(); ?> <!-- always put this at the end of the head section -->
  </head>
  <body <?php body_class(); ?> >
    <div class="pageWrap">

      <header>
        <h1><?php echo get_bloginfo('name'); ?></h1>

        <img id="heroImg" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

        <h2><?php echo get_bloginfo('description'); ?></h2> <!-- appearance > customize > site identity > tagline -->
      </header>

      <!--  <?php echo "END OF " . basename(__FILE__); ?> -->
