<?php get_header(); ?>
<!--Entradas-->
<div class="row">

  <!--Entradas-->
  <div class="col-lg-9">

    <div class="card-deck">
      <!--Entrada-->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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

<!--Aside-->
<?php get_sidebar(); ?>
<!--Aside-->

</div>
<!--Blog-->

<?php get_footer(); ?>