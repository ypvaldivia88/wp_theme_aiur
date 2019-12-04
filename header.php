<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!--Main Navigation-->
  <header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar mt-4">

      <div class="container">

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'menu-principal',
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarSupportedContent',
            'items_wrap'      => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
            'menu_class'      => 'nav-item'
          )
        );
        ?>

      </div>

    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div id="page-intro" class="view">
      <!-- Navbar brand -->
      <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Surfeando Sonrisas" />
        </a>
        <!-- Heading -->
        <div class="container-fluid d-flex ">
          <h1 class="text-light m-5 position-bottom">
            <span><?php the_title(); ?></span>
          </h1>
        </div>
        <!--/. Heading -->
    </div>
    <!--/.Mask-->

  </header>


  <!--Main Navigation-->
  <!-- Social Icon  -->
  <div class="col-md-2 social-vertical">
    <div class="btn-group-vertical">
      <button type="button" class="btn btn-primary"><i class="fa fa-facebook"></i></button>
      <button type="button" class="btn btn-primary"><i class="fa fa-twitter"></i></button>
      <button type="button" class="btn btn-primary"><i class="fa fa-youtube-play"></i></button>
      <button type="button" class="btn btn-primary"><i class="fa fa-instagram"></i></button>
    </div>
  </div>
  <!-- Social Icon  -->