<?php get_header(); ?>

<!--/.Categorias-->
<div id="categorias">
  <span class="d-block pt-2 text-uppercase"><?php the_category('  '); ?></span>
</div>
<!--/.Categorias-->


<!--Main layout-->
<main role="main">

  <div class="container">
    <div class="row">

      <!--Entradas-->
      <div class="col-lg-9">

        <!--Entrada-->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="card">
              <div class="card-header">
                <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?> Autor: <?php the_author(); ?> Etiquetas: <?php the_tags('', ' / ', ''); ?></p>

                <?php //imagen destacada
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('post-thumbnails', array(
                        'class' => 'img-fluid mb-3'
                      ));
                    } ?>

              </div>
              <div class="card-body">
                <?php the_content(); ?>
                <?php
                    if (comments_open() || get_comments_number()) :
                      comments_template();
                    endif;
                    ?>

              </div>
            </div>
        <?php endwhile;
        endif;  ?>
        <!--Entrada-->

      </div>
      <!--Entradas-->

      <!--Aside-->
      <div class="col-lg-3">
        <?php get_sidebar(); ?>
      </div>
      <!--Aside-->
      
      <!--Blog-->
    </div>
  </div>

</main>
<!--/. Main layout -->



<?php get_footer(); ?>