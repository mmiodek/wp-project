<?php 

function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

add_theme_support( 'menus' );

function register_my_menus() {
  register_nav_menus(
    array( 'primary-menu' => __( 'Primary' ))
  );
  
  register_nav_menus(
    array( 'footer-menu' => __( 'Footer' ))
  );
}
add_action( 'init', 'register_my_menus' );
?>
