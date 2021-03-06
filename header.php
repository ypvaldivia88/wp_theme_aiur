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
        <div id="intro" style="
                background: url('https://surfeandosonrisas.org/wp-content/uploads/2019/12/WhatsApp-Image-2019-12-17-at-4.58.06-PM.jpeg');
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                position: relative;
            ">

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
                        'menu_class'      => 'nav-item text-primary'
                    )
                );
                ?>
            </nav>
            <!--/.Navbar-->

            <div class="mask rgba-black-strong">
                <div class="container-fluid d-flex align-items-left justify-content-left h-100">

                    <div class="row d-flex justify-content-left text-left ml-md-5 pl-5 text-break">
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
                                    #SubeteAlaOla
                                </p>
                            </h4>
                            <!--/. Tag -->

                            <!-- Description -->
                            <p class="text-light w-75">
                                Creemos que todos tenemos derecho a sentir la libertad y felicidad de surfear y practicar
                                deportes acuáticos adaptados e inspirar un sin fin de posibilidades más allá de la
                                discapacidad.
                            </p>
                            <!--/. Description -->

                            <div class="btn-group mr-2" role="group">
                                <a href="<?php echo get_permalink(66); ?>" class="btn btn-warning rounded-pill mr-2">
                                    Quiero formar parte
                                </a>
                                <button type="button" class="btn btn-outline-light rounded-circle wp-video-popup">
                                    <i class="fa fa-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } else { ?>
            <!--Mask-->
            <div id="intro" style="               
                <?php if (is_page()) {
                    //this retrieve the full version of image
                    $image_data='';
                    $image_url='';
                    $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
                    $image_url = $image_data[0];
                    if ($image_url=='') {
                        echo "background: url('https://surfeandosonrisas.org/wp-content/uploads/2019/12/WhatsApp-Image-2019-12-17-at-6.22.00-PM.jpeg');";
                    } else {
                        echo "background: url('$image_url');";
                    }
                } else {
                    echo "background: url('https://surfeandosonrisas.org/wp-content/uploads/2019/12/WhatsApp-Image-2019-12-17-at-6.22.00-PM.jpeg');";
                } ?>
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                position: relative;
            ">

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
                    <?php if (is_home()) { ?>
                        Blog
                    <?php } else { ?>
                        <span><?php the_title(); ?></span>

                    <?php } ?>
                </h1>
                <!-- Titulo -->

            <?php } ?>

            <!-- Social Icon  -->
            <div class="col-md-2 social-vertical-home d-none d-sm-none d-md-none d-lg-block">
                <div class="btn-group-vertical">
                    <a target="_blank" href="https://www.facebook.com/surfeandosonrisas/" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/surf_sonrisas" class="btn btn-primary"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCttHxaJh5onx4xzFibYqGhA" class="btn btn-primary"><i class="fa fa-youtube-play"></i></a>
                    <a target="_blank" href="https://www.instagram.com/surfeandosonrisas/" class="btn btn-primary"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Social Icon  -->

            </div>
            <!--/.Mask-->

            <main role="main">