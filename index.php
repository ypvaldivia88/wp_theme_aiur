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
        <div id="index-intro" class="view">
            <!-- Navbar brand -->
            <a href="<?php echo home_url(); ?>"><?php the_custom_logo(); ?></a>
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

                            <!-- Divider -->
                            <!-- <hr class="hr-light"> -->

                            <!-- Description -->
                            <h4 class="text-light my-4">
                                <!-- Description -->
                                <p class="grey-text text-sm">
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
            </div>
        </div>
        <!--/.Mask-->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">

            <!--Section: Best Features-->
            <section id="best-features" class="text-center">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Best Features</h2>

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        <p class="grey-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptate hic provident
                            nulla repellat facere esse molestiae ipsa labore porro minima quam quaerat rem, natus
                            repudiandae debitis est sit pariatur.
                        </p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-4 mb-5">
                        <i class="fa fa-camera-retro fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Experience</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                            maiores nam,
                            aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-heart fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Happiness</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                            maiores nam,
                            aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-bicycle fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Adventure</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                            maiores nam,
                            aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Best Features-->

            <hr class="my-5">

            <!--Section: Examples-->
            <section id="examples" class="text-center">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Ultimas noticias</h2>

                <!--Entradas-->
                <div class="row">

                    <!--Entradas-->
                    <div class="col-lg-12">

                        <div class="card-deck">
                            <!--Entrada-->
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body text-justify">
                                                <?php
                                                        if (has_post_thumbnail()) {
                                                            the_post_thumbnail('post-thumbnails', array(
                                                                'class' => 'img-fluid mb-3'
                                                            ));
                                                        }
                                                        ?>
                                                <a href="<?php the_permalink(); ?>">
                                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                                </a>
                                                <p class="card-text"><?php echo aiur_excerpt_limited(2); ?></p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">Last updated 3 mins ago</small><br>
                                                <small class="text-muted">Fecha: <?php the_time('F j, Y'); ?></small><br>
                                                <small class="text-muted">Autor: <?php the_author(); ?></small><br>
                                                <small class="text-muted">Categorias: <?php the_category(' / '); ?> Etiquetas: <?php the_tags('', ' / ', ''); ?></small>
                                            </div>
                                        </div>
                                    </div>

                            <?php endwhile;
                            endif;  ?>
                            <!--Entrada-->
                        </div>
                    </div>


                    <!--Paginacion-->
                    <div class="card-body">
                        <?php get_template_part('template-parts/content', 'paginacion'); ?>
                    </div>
                    <!--Paginacion-->

                </div>
                <!--Entradas-->

            </section>
            <!--Section: Examples-->

            <hr class="my-5">

            <!--Section: Gallery-->
            <section id="gallery">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Gallery heading</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner z-depth-1-half" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
                                </div>
                                <!--/First slide-->
                                <!--Second slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" alt="Second slide">
                                </div>
                                <!--/Second slide-->
                                <!--Third slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Third slide">
                                </div>
                                <!--/Third slide-->
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">

                        <!--Excerpt-->
                        <a href="" class="teal-text">
                            <h6 class="pb-1"><i class="fa fa-heart"></i><strong> Lifestyle </strong></h6>
                        </a>
                        <h4 class="mb-3"><strong>This is title of the news</strong></h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                            quod maxime
                            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut
                            officiis
                            debitis aut rerum.</p>

                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                            quod maxime
                            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut
                            officiis
                            debitis aut rerum.</p>
                        <p>by <a><strong>Jessica Clark</strong></a>, 26/08/2016</p>
                        <a class="btn btn-primary btn-md">Read more</a>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Gallery-->

            <hr class="my-5">

            <!--Section: Contact-->
            <section id="contact">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-5 col-md-12">
                        <!-- Form contact -->
                        <form class="p-5 grey-text">
                            <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
                                <input type="text" id="form3" class="form-control form-control-sm">
                                <label for="form3">Your name</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="form2" class="form-control form-control-sm">
                                <label for="form2">Your email</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-tag prefix"></i>
                                <input type="text" id="form32" class="form-control form-control-sm">
                                <label for="form34">Subject</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-pencil prefix"></i>
                                <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>
                                <label for="form8">Your message</label>
                            </div>
                            <div class="text-center mt-4">
                                <button class="btn btn-primary">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                            </div>
                        </form>
                        <!-- Form contact -->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7 col-md-12">

                        <!--Grid row-->
                        <div class="row text-center">

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-3">

                                <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>New York, NY 10012</p>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-3">

                                <p><i class="fa fa-building fa-1x mr-2 grey-text"></i>Mon - Fri, 8:00-22:00</p>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-3">

                                <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>+ 01 234 567 89</p>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Contact-->

        </div>
    </main>
    <!--Main layout-->

    <!--Aside-->
    <?php get_sidebar(); ?>
    <!--Aside-->

    <?php get_footer(); ?>