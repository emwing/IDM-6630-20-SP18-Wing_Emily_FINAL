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
        <h2><a href="/WING-Emily-WORDPRESS/wordpress/">Legends</a></h2>
      </header>

      <nav>
        <ul>
          <li><a href="/WING-Emily-WORDPRESS/wordpress/pokedex/">Pokedex</a></li>
          <li><a href="#">About</a></li>
        </ul>
      </nav>

      <!--  <?php echo "END OF " . basename(__FILE__); ?> -->
