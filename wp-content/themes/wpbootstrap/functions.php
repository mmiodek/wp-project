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

//wigetizing sidebar
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
//end of wigetizing sidebar
add_theme_support( 'menus' );

function register_my_menus() {
  register_nav_menus(
    array( 'primary-menu' => __( 'Primary' ))
  );
  
  register_nav_menus(
    array( 'footer-menu' => __( 'Footer' ))
  );
  
    register_nav_menus(
    array( 'side-menu' => __( 'Side' ))
  );
}
add_action( 'init', 'register_my_menus' );
if (!is_admin()) {
    // jQuery (optional loading via Google CDN)
    wp_deregister_script('jquery');
    wp_register_script('jquery', ('http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'), false);  
    wp_enqueue_script('jquery');
    // Bootstrap JS
    wp_register_script('bootstrap', '/wp-content/themes/yourtheme/js/bootstrap-min.js', null, null, false);
    wp_enqueue_script('bootstrap');
    // Bootstrap CSS
    wp_register_style( 'bootstrap', '/wp-content/themes/yourtheme/css/bootstrap.css', null, null, null);
    wp_enqueue_style('bootstrap');
}
function astro_add_dropdown_class($classes, $item) {
    global $wpdb;
    $has_children = $wpdb->get_var("
            SELECT COUNT(meta_id)
            FROM wp_postmeta
            WHERE meta_key='_menu_item_menu_item_parent'
            AND meta_value='".$item->ID."'
        ");
    // add the class dropdown to the current list
    if ($has_children > 0) array_push($classes,'dropdown');
    return $classes;
}
 
add_filter( 'nav_menu_css_class', 'astro_add_dropdown_class', 10, 2);
?>
