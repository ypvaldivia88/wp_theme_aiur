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

    <?php if (is_front_page()) { ?>

        <!--Mask-->
        <div id="intro" class="view" style="background: url('<?php echo get_template_directory_uri(); ?>/img/home-header-background.png')no-repeat center center fixed">

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark sticky-top scrolling-navbar">

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

            <div class="mask rgba-black-strong">
                <div class="container-fluid d-flex align-items-left justify-content-left h-100">

                    <div class="row d-flex justify-content-left text-left ml-md-5 pl-md-5 text-break">
                        <div class="col-xs-12">

                            <!-- Heading -->
                            <h1 class="font-weight-bold text-light main-title1">
                                <span>Surfeando</span>
                            </h1>
                            <h1 class="display-4 font-weight-bold text-light main-title2">
                                <span>Sonrisas</span>
                            </h1>
                            <!--/. Heading -->

                            <!-- Tag -->
                            <h4 class="text-light">
                                <p class="font-italic">
                                    #UneteAlaOla
                                </p>
                            </h4>
                            <!--/. Tag -->

                            <!-- Description -->
                            <p class="text-light w-75">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptate hic
                                provident nulla repellat facere esse molestiae ipsa labore porro minima quam quaerat
                                rem, natus repudiandae debitis est sit pariatur.
                            </p>
                            <!--/. Description -->

                            <div class="btn-group mr-2" role="group">
                                <button type="button" class="btn btn-outline-light rounded-pill mr-2">
                                    Quiero formar parte
                                </button>
                                <button type="button" class="btn btn-outline-light rounded-circle">
                                    <i class="fa fa-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Icon  -->
            <div class="col-md-2 social-vertical-home d-none d-sm-none d-md-none d-lg-block">
                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-twitter"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-youtube-play"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-instagram"></i></button>
                </div>
            </div>
            <!-- Social Icon  -->

        </div>
        <!--/.Mask-->

    <?php } else { ?>

        <!--Mask-->
        <div id="page-intro" class="view" style="background: url('<?php echo get_template_directory_uri(); ?>/img/page-header-background.png')no-repeat top center fixed">

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark sticky-top scrolling-navbar">

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
                <?php if (is_home()) { ?>
                    Blog
                <?php } else { ?>
                    <span><?php the_title(); ?></span>

                <?php } ?>
            </h1>
            <!-- Titulo -->

        </div>
        <!--/.Mask-->

        <!-- Social Icon  -->
        <div class="col-md-2 social-vertical-page d-none d-sm-none d-md-none d-lg-block">
            <div class="btn-group-vertical">
                <button type="button" class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                <button type="button" class="btn btn-primary"><i class="fa fa-twitter"></i></button>
                <button type="button" class="btn btn-primary"><i class="fa fa-youtube-play"></i></button>
                <button type="button" class="btn btn-primary"><i class="fa fa-instagram"></i></button>
            </div>
        </div>
        <!-- Social Icon  -->

    <?php } ?>

    <main role="main">