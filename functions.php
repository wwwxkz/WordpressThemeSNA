<?php
add_theme_support('post-thumbnails');

function _register_menu() {
  register_nav_menu('additional-menu',__( 'Additional Menu' ));
}
add_action( 'init', '_register_menu' );

function _register_sidebar() {
  if ( function_exists('register_sidebar') ) {
    $sidebar1 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',        
        'name'=>__( 'My sidebar 1', 'textdomain' ),  
    );  
    register_sidebar($sidebar1);
  }
}

add_action( 'widgets_init', '_register_sidebar' );
