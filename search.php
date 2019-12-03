<?php get_header(); ?>

<div class="row">

    <!--Entradas-->
    <div class="col-lg-9">

        <h3 class="bg-primary text-white py-3 mb-5 text-center">Resultados de Búsqueda</h3>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--Entrada-->
            <div class="card-body">
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
            </div>
            <!--Entrada-->
        <?php endwhile; ?>
        
        <?php else: ?>

            <h5>No se encontró el término:
                <?php printf(esc_html('%s'), get_search_query()) ?>
            </h5>
            <?php get_search_form(); ?>

        <?php endif;  ?>

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