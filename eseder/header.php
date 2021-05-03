<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <?php wp_head();?>
</head>

<body <?php body_class();?> id="body">


  <header id="header" class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
      <div class="container">
        <!--     Brand and toggle get grouped for better mobile display -->
        <div class="header__button">
          <button class="navbar-toggler mb-3" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'depth'             => 1,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

        <div class="header__logo">
          <a class="navbar-brand" href="#">
            <img src="<?php the_field('logo_image');?>" alt="logo image">
          </a>
        </div>
      </div>
    </nav>

  </header>
