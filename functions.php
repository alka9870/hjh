<?php
/*child theme*/
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles');
    function enqueue_child_theme_styles() {
        /*for css in child theme*/
        wp_enqueue_style( 'style34', get_stylesheet_directory_uri().'/style.css', false, '1.0', 'all');
        wp_enqueue_style( 'bootstrap.min1', get_stylesheet_directory_uri().'/css/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap-override', get_stylesheet_directory_uri().'/css/bootstrap-override.css' );
        wp_enqueue_style( 'bootstrap-responsive', get_stylesheet_directory_uri().'/css/bootstrap-responsive.min.css' );
        wp_enqueue_style( 'flexslider', get_stylesheet_directory_uri().'/css/flexslider.css' );
        wp_enqueue_style( 'styles5', get_stylesheet_directory_uri().'/css/styles.css' );
        wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri().'/css/font-awesome/font-awesome.css' );
        wp_enqueue_style( 'font-awesome-ie7.min', get_stylesheet_directory_uri().'/css/font-awesome/font-awesome-ie7.min.css' );
        /*for javascript in child theme*/
            wp_enqueue_script( 'bootstrap.min21', get_stylesheet_directory_uri() .'/js/bootstrap.min.js', array('jquery'), '1.0.0'  );
            wp_enqueue_script( 'functions22', get_stylesheet_directory_uri() . '/js/functions.js', array('jquery'), '1.0.0'  );
            wp_enqueue_script( 'jquery.flexslider33',get_stylesheet_directory_uri() .'/js/jquery.flexslider.js', array('jquery'), '1.0.0'  );
            wp_enqueue_script( 'jquery.isotope.min44', get_stylesheet_directory_uri() . '/js/jquery.isotope.min.js', array('jquery'), '1.0.0'  );
            wp_enqueue_script( 'jquery-1.8.3.min', get_stylesheet_directory_uri() . '/js/jquery-1.8.3.min.js', array('jquery'), '1.0.0'  );
}
/*custom post type for service*/
function create_post_type() {
  register_post_type( 'services',
    array(
        'labels' => array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'service' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail')
    )
  );
}
add_action( 'init', 'create_post_type' );
/*Register the menu*/
function register_my_menu() {
  register_nav_menu('nav-menus',__( 'Top Menu' ));
}
add_action( 'init', 'register_my_menu' );
/*Slider*/
function create_slider_post_type() {
  register_post_type( 'sliders',
    array(
        'labels' => array(
        'name' => __( 'Sliders' ),
        'singular_name' => __( 'slider' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail')
    )
  );
}
add_action('init','create_slider_post_type');
/*Info Powerful clean design,Fully responsive,Retina Ready post type*/
function create_infos_post_type() {
  register_post_type( 'infos',
    array(
        'labels' => array(
        'name' => __( 'Infos' ),
        'singular_name' => __( 'info' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail')
    )
  );
}
add_action('init','create_infos_post_type');
/*Our clients post type*/
function create_clients_post_type() {
  register_post_type( 'clients',
    array(
        'labels' => array(
        'name' => __( 'Clients' ),
        'singular_name' => __( 'client')
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail')
    )
  );
}
add_action('init','create_clients_post_type');
/*Aboutus page*/
/*Slider of about us*/
function create_slide_about_post_type() {
  register_post_type( 'aboutslide',
    array(
        'labels' => array(
        'name' => __( 'Aboutslides' ),
        'singular_name' => __( 'aboutslide')
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail')
    )
  );
}
add_action('init','create_aboutlist_post_type');
/*Aboutus_list post type*/
function create_aboutlist_post_type() {
  register_post_type( 'aboutlists',
    array(
        'labels' => array(
        'name' => __( 'Aboutlists' ),
        'singular_name' => __( 'aboutlist')
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail')
    )
  );
}
add_action('init','create_aboutlist_post_type');
/*aboutus slider*/
function create_aboutslidert_post_type() {
  register_post_type( 'aboutsliders',
    array(
        'labels' => array(
        'name' => __( 'Our Team' ),
        'singular_name' => __( 'Our Team')
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail')
    )
  );
}
add_action('init','create_aboutslidert_post_type');
/*Gallery post type*/
function create_gallery_post_type() {
  register_post_type( 'galleries',
    array(
        'labels' => array(
        'name' => __( 'Gallery' ),
        'singular_name' => __( 'gallery')
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail')
    )
  );
}
add_action('init','create_gallery_post_type');
/*//Gallery*/

// Register Custom Taxonomy for gallery
function custom_taxonomy() {
  $labels = array(
    'name'                       => _x( 'Gallery Category', 'Gallery Category'),
    'singular_name'              => _x( 'Gallery Category', 'Gallery Category'),
    'menu_name'                  => __( 'Gallery Category' ),
    'all_items'                  => __( 'All Items' ),
    'parent_item'                => __( 'Parent Item' ),
    'parent_item_colon'          => __( 'Parent Item:' ),
    'new_item_name'              => __( 'New Item Name' ),
    'add_new_item'               => __( 'Add New Item' ),
    'edit_item'                  => __( 'Edit Item' ),
    'update_item'                => __( 'Update Item' ),
    'view_item'                  => __( 'View Item' ),
    'separate_items_with_commas' => __( 'Separate items with commas' ),
    'add_or_remove_items'        => __( 'Add or remove items' ),
    'choose_from_most_used'      => __( 'Choose from the most used' ),
    'popular_items'              => __( 'Popular Items' ),
    'search_items'               => __( 'Search Items' ),
    'not_found'                  => __( 'Not Found' ),
    'no_terms'                   => __( 'No items' ),
    'items_list'                 => __( 'Items list' ),
    'items_list_navigation'      => __( 'Items list navigation' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'gallerytaxonomy', array( 'galleries' ), $args );
}
add_action( 'init', 'custom_taxonomy', 0 );
/*Accordationinfo*/
function create_accordationinfo_type() {
  register_post_type( 'accordationinfo',
    array(
        'labels' => array(
        'name' => __( 'Accordationinfo' ),
        'singular_name' => __( 'accordationinfo')
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail')
    )
  );
}
add_action('init','create_accordationinfo_type');
/*create_servicesection_type*/
function create_servicesection_type() {
  register_post_type( 'servicesection',
    array(
        'labels' => array(
        'name' => __( 'Servicesection' ),
        'singular_name' => __( 'servicesection')
      ),
      'public' => true,
      'has_archive' => true,
      /*Menu Icon*/
      'menu_icon'           => 'dashicons-cart',
      /*//Menu icon*/
      'supports' => array('title','editor','thumbnail')
    )
  );
}
add_action('init','create_servicesection_type');
?>



