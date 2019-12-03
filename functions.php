<?php

function aiur_agregar_css_js()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('app-css', get_template_directory_uri() . '/css/app.css');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array('jquery'), '3.4.1', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '1.14', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('popper'), '4.3', true);
    wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', array('bootstrap-js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'aiur_agregar_css_js');

function aiur_setup()
{
    //soporte imagenes destacadas
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }

    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'aiur_setup');

//agregar sidebar
function aiur_widgets()
{
    register_sidebar(array(
        'id'            => 'widgets-derecha',
        'name'          => __('Widgets derecha'),
        'description'   => __('Arrstra lo que quieras'),
        'before_widget' => '<div class="card-body bluu_wi">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4><hr>'
    ));
}
add_action('widgets_init', 'aiur_widgets');

//registrar menus
function aiur_registrar_mis_menus()
{
    register_nav_menus(
        array(
            'menu-principal'   => __('Menú Superior')
        )
    );
}
add_action('init', 'aiur_registrar_mis_menus');

//agregar clase nav-link a los items de los menus
function aiur_agregar_class_menu_items($atts)
{
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}
add_filter('nav_menu_link_attributes', 'aiur_agregar_class_menu_items', 10, 3);

function aiur_excerpt_limited($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
}