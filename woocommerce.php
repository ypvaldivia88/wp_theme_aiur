<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

        <!--Mask-->
        <div id="intro" 
            style="background:url('https://surfeandosonrisas.org/wp-content/uploads/2019/12/WhatsApp-Image-2019-12-17-at-6.22.00-PM.jpeg');"
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;">

            <!--Navbar-->
            <nav class="navbar transparent navbar-expand-lg navbar-dark sticky-top scrolling-navbar">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
                </a>

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
            </nav>
            <!--/.Navbar-->

            <!-- Titulo -->
            <h1 class="text-light page-title">
                Donaciones y compras
            </h1>
            <!-- Titulo -->

        </div>
        <!--/.Mask-->

        <!-- Social Icon  -->
        <div class="col-md-2 social-vertical-page d-none d-sm-none d-md-none d-lg-block">
            <div class="btn-group-vertical">
                <a target="_blank" href="https://www.facebook.com/surfeandosonrisas/" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="https://twitter.com/surf_sonrisas" class="btn btn-primary"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCttHxaJh5onx4xzFibYqGhA" class="btn btn-primary"><i class="fa fa-youtube-play"></i></a>
                <a target="_blank" href="https://www.instagram.com/surfeandosonrisas/" class="btn btn-primary"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Social Icon  -->
        
    <main role="main">

<div class="container">
    <?php woocommerce_content(); ?>
</div>
<!--/.Container-->

<?php get_footer(); ?>