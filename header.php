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

    <?php

    if (is_front_page()) {
        ?>
        <!--Mask-->
        <div id="intro" class="view" style="background: url('<?php echo get_template_directory_uri(); ?>/img/home-header-background.png')no-repeat center center fixed">
            <!-- Navbar brand -->
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Portada" /></a>
            <div class="mask rgba-black-strong">
                <div class="container-fluid d-flex align-items-left justify-content-left h-100">

                    <div class="row d-flex justify-content-left text-left ml-5">
                        <div class="col-md-10 w-auto">

                            <!-- Heading -->
                            <h1 class="font-weight-bold text-light main-title1">
                                <span>Surfeando</span>
                            </h1>
                            <h1 class="display-4 font-weight-bold text-light main-title2">
                                <span>Sonrisas</span>
                            </h1>

                            <!-- Description -->
                            <h4 class="text-light">
                                <!-- Description -->
                                <p class="grey-text text-sm">
                                    #UneteAlaOla
                                </p>
                            </h4>

                            <!-- Description -->
                            <h4 class="text-light my-4">
                                <!-- Description -->
                                <p class="grey-text text-sm home-title-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptate hic
                                    provident nulla repellat facere esse molestiae ipsa labore porro minima quam quaerat
                                    rem, natus repudiandae debitis est sit pariatur.
                                </p>
                            </h4>
                            <div class="btn-group mr-2" role="group">
                                <button type="button" class="btn btn-outline-light rounded-pill mr-2">
                                    Quiero formar parte
                                </button>
                                <button type="button" class="btn btn-outline-light rounded-circle">
                                    <i class="fa fa-play ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Icon  -->
            <div class="col-md-2 social-vertical-home">
                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-twitter"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-youtube-play"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-instagram"></i></button>
                </div>
            </div>
            <!-- Social Icon  -->
    <?php
    } else {
        ?>
        <!--Mask-->
        <div id="page-intro" class="view" style="background: url('<?php echo get_template_directory_uri(); ?>/img/page-header-background.png')no-repeat top center fixed">
            <div class="mx-2 pt-2">
                <!-- Navbar brand -->
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Portada" /></a>
            </div>

            <div class="container ml-5">
                <!-- Heading -->
                <h1 class="text-light m-5 page-title">
                    <span><?php the_title(); ?></span>
                </h1>
            </div>

            <!-- Social Icon  -->
            <div class="col-md-2 social-vertical-page">
                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-twitter"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-youtube-play"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-instagram"></i></button>
                </div>
            </div>
            <!-- Social Icon  -->
        
        <?php } ?>


    </div>
    <!--/.Mask-->
        
    <main role="main">