<?php 
// consultas reutilizables
require get_template_directory().'/inc/queries.php';

//
add_action( 'init', function () {
    remove_post_type_support( 'products', 'editor' );
    remove_post_type_support( 'products', 'thumbnail' );
    remove_post_type_support('page', 'editor');
} );
function qataya_setup(){

    //habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    // add_image_size('square', 350, 350, true);
    // add_image_size('portrait', 350, 724, true);
    // add_image_size('cajas', 400, 375, true);
    // add_image_size('mediano', 700, 400, true);
    // add_image_size('blog', 966, 644, true);
}
add_action('after_setup_theme','qataya_setup');

//menus de navegacion , agregar mas utilizando el arreglo
function qataya_menus(){
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal','qataya'),
        'menu-politicas' => __('Menu Politicas','qataya'),
        'menu-explore' => __('Menu Info','qataya'),
    ));
}
add_action('init','qataya_menus');//esta funcion inicia cuando inicia wordpress

//scripts y styles
function travelAgency_scripts_styles(){
    //cargar css 
    wp_enqueue_style('normalize', get_template_directory_uri().'/assets/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('home', get_template_directory_uri().'/assets/css/home.css', array(), '1.0.0');
    wp_enqueue_style('footer', get_template_directory_uri().'/assets/css/footer.css', array(), '1.0.0');
    wp_enqueue_style('header', get_template_directory_uri().'/assets/css/header.css', array(), '1.0.0');
    wp_enqueue_style('aboutUs', get_template_directory_uri().'/assets/css/about.css', array(), '1.0.0');
    wp_enqueue_style('contact', get_template_directory_uri().'/assets/css/contact.css', array(), '1.0.0');
    wp_enqueue_style('product', get_template_directory_uri().'/assets/css/product.css', array(), '1.0.0');
    wp_enqueue_style('category', get_template_directory_uri().'/assets/css/category.css', array(), '1.0.0');
    wp_enqueue_style('products-services', get_template_directory_uri().'/assets/css/products-services.css', array(), '1.0.0');
    // wp_enqueue_style('slider', get_template_directory_uri().'/css/slider.css', array(), '1.0.0');
    // wp_enqueue_style('pagos', get_template_directory_uri().'/css/pagos.css', array(), '1.0.0');

    //materialize
    wp_enqueue_style('materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"',array(),'1.0.0');
        
    //cargar fuentes

    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,700&family=Quicksand:wght@400;600&family=Raleway:ital,wght@0,300;0,400;1,300&display=swap', array(), '1.0.0');
    
    //hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','googlefonts','materialize','home','header','footer','aboutUs','contact','product','category','products-services'), '1.0.0');

    //scripts
    wp_enqueue_script("materializejs",'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js',array(),"1.0.0",true );

    // wp_enqueue_script("fontawesome",'https://kit.fontawesome.com/841e236107.js',array(''),"1.0.0",true );

    wp_enqueue_script("scripts",get_template_directory_uri().'/assets/js/scripts.js',array('jquery','materializejs',),"1.0.0",true );
}
add_action('wp_enqueue_scripts','travelAgency_scripts_styles');

