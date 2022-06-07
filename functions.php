<?php
add_theme_support('post-thumbnails');
function _register_menu() {
  register_nav_menu('additional-menu',__( 'Additional Menu' ));
}
add_action( 'init', '_register_menu' );
?>
