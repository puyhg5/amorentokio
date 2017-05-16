<?php
/**
 * GENERAL FUNCTIONS
 ***********************************/

// Hide admin bar
add_filter('show_admin_bar', '__return_false');

// Active thumbnails
add_theme_support( 'post-thumbnails' );

// Active menus
register_nav_menus( array(
  'menutop' => 'Top Menu',
));

?>