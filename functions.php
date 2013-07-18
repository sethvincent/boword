<?php

register_sidebar();

add_theme_support( 'post-thumbnails' );

add_image_size( 'small', 100, 100 );
add_image_size( 'medium', 400, 400 );
add_image_size( 'large', 800, 600 );
add_image_size( 'huge', 1200, 1200 );

function boword_enqueue_styles() {
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/bower_components/normalize-css/normalize.css', false ); 
}
add_action( 'wp_enqueue_scripts', 'boword_enqueue_styles' );

function boword_enqueue_scripts() {
  wp_enqueue_script( 'appjs', get_template_directory_uri() . '/app.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'boword_enqueue_scripts' );

function boword_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
    )
  );
}
add_action( 'init', 'boword_menus' );

// add category nicenames in body and post class
function category_id_class($classes) {
  global $post;
  foreach((get_the_category($post->ID)) as $category)
    $classes[] = $category->category_nicename;
  return $classes;
}

add_filter( 'post_class', 'category_id_class' );
add_filter( 'body_class', 'category_id_class' );


function list_categories($exclude = ''){
  if (!empty($exclude)) {
    $exclude = 'exclude=' . $exclude;
  }
  $categories = get_categories($exclude);

  foreach ($categories as $cat){
    if($cat->category_parent == 0) {
      $html .= '<li class="cat-item ';
      $html .= $cat->slug . ' ';
      $html .= 'cat-item-' . $cat->term_id . '">';
      $html .= '<a href="' . $cat->slug . '">' . $cat->cat_name . '</a></li>';
    }
  }
  return $html;
}

function get_cat_item_classes(){
  $categories = get_the_category();
  $separator = ' ';
  $output = '';

  if( !empty($categories) ) {
    foreach($categories as $cat) {
      $output .= $cat->slug . ' ';
    }
    return trim($output, $separator);
  }
}

function get_tag_item_classes(){
  $tags = get_the_tags();
  $separator = ' ';
  $output = '';

  if( !empty($tags) ) {
    foreach($tags as $tag) {
      $output .= $tag->name . ' ';
    }
    return trim($output, $separator);
  }
}