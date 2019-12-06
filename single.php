<?php get_header(); ?>

<!--/.Categorias-->
<div id="categorias">
  <span class="d-block pt-2 text-uppercase text-decoration-none"><?php the_category('  '); ?></span>
</div>
<!--/.Categorias-->

<div class="container">
  <div class="row">

    <!--Entradas-->
    <div class="col-lg-9">

      <!--Entrada-->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php //imagen destacada
              if (has_post_thumbnail()) {
                the_post_thumbnail('post-thumbnails', array(
                  'class' => 'img-fluid'
                ));
              } ?>

          <!--/.Etiquetas-->
          <div id="etiquetas">
            <span class="d-block"><?php the_taxonomies('  '); ?></span>
          </div>
          <!--/.Etiquetas-->
          <hr>
          <p class="w-auto">
            <?php the_content(); ?>
          </p>

          <p class="small mb-0">Escrito por <b><?php the_author(); ?></b> el <b><?php the_time('j F , Y'); ?></b> Etiquetas: <?php the_tags('', ' / ', ''); ?></p>
          <br>
          <?php
              if (comments_open() || get_comments_number()) :
                comments_template();
              endif;
              ?>

      <?php endwhile;
      endif;  ?>
      <!--Entrada-->

    </div>
    <!--/.Entradas-->

    <!--Aside-->
    <div class="col-lg-3">
      <?php get_sidebar(); ?>
    </div>
    <!--Aside-->

  </div>
  <!--/.Row-->
</div>
<!--/.Container-->

<?php get_footer(); ?>