<?php

function aiur_agregar_css_js()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('app-css', get_template_directory_uri() . '/css/app.css');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), '1.16', true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('popper'), '4.4', true);
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

function aiur_custom_logo_setup()
{
    $defaults = array(
        'height'      => 90,
        'width'       => 90,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'aiur_custom_logo_setup');

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

function aiur_add_woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'aiur_add_woocommerce_support');

if( !function_exists('aiur_show_specific_product_quantity') ) {

    function aiur_show_specific_product_quantity( $atts ) {

        // Shortcode Attributes
        $atts = shortcode_atts(
            array(
                'id' => '', // Product ID argument
            ),
            $atts,
            'product_qty'
        );

        if( empty($atts['id'])) return;

        $stock_quantity = 0;

        $product_obj = wc_get_product( intval( $atts['id'] ) );
        $stock_quantity = $product_obj->get_stock_quantity();

        if( $stock_quantity > 0 ) return $stock_quantity;

    }

    add_shortcode( 'product_qty', 'aiur_show_specific_product_quantity' );

}
