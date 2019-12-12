<?php

function load_stylesheet()
{
    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
    wp_enqueue_style('style', get_template_directory_uri() . './style.css', array(), false, 'all');
    
}
add_action('wp_enqueue_scripts', 'load_stylesheet');

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'Primary' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );


add_image_size( 'custom-size', 300, 200, true );

  function cw_post_type_products() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    'page-attributes',
    'genesis-seo',
    );
    $labels = array(
    'name' => _x('Products', 'plural'),
    'singular_name' => _x('Product', 'singular'),
    'menu_name' => _x('Products', 'admin menu'),
    'name_admin_bar' => _x('Product', 'admin bar'),
    'add_new' => _x('Add Product', 'add project'),
    'add_new_item' => __('Add New Product'),
    'new_item' => __('New Product'),
    'edit_item' => __('Edit Product'),
    'view_item' => __('View Product'),
    'all_items' => __('All Products'),
    'search_items' => __('Search Products'),
    'not_found' => __('No project found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'products'),
    'has_archive' => false,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-editor-code',
    );
    register_post_type('products', $args);
    }
add_action('init', 'cw_post_type_products');

  /*Products post*/

add_theme_support('post-thumbnails');