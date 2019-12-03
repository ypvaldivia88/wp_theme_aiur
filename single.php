<?php get_header(); ?>

<div class="row">

  <!--Entradas-->
  <div class="col-lg-9">

    <!--Entrada-->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="card-body">
          <h2><?php the_title(); ?></h2>
          <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
          <p class="small mb-0">Autor: <?php the_author(); ?></p>
          <p class="small">Categorias: <?php the_category(' / '); ?> Etiquetas: <?php the_tags('', ' / ', ''); ?></p>
          <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail('post-thumbnails', array(
                  'class' => 'img-fluid mb-3'
                ));
              }
              ?>
          <!-- <img src="img/photo_2019-11-14_03-10-44.jpg" alt="" class="img-fluid mb-3"> -->
          <?php the_content(); ?>
          
          <?php 
            if( comments_open() || get_comments_number()) : 
              comments_template();
            endif;
          ?>

        </div>
    <?php endwhile;
    endif;  ?>
    <!--Entrada-->

  </div>
  <!--Entradas-->

  <!--Aside-->
  <?php get_sidebar(); ?>
  <!--Aside-->

</div>
<!--Blog-->

<?php get_footer(); ?>