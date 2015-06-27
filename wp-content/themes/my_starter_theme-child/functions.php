<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}


function theme_enqueue_scripts() {
	
	wp_enqueue_script(
		'angularjs',
		get_stylesheet_directory_uri() . '/bower_components/angular/angular.min.js'
	);

	wp_register_script(
		'angularjs-route',
		get_stylesheet_directory_uri() . '/bower_components/angular-route/angular-route.min.js'
	);

	wp_register_script(
		'angularjs-resource',
		get_stylesheet_directory_uri() . '/bower_components/angular-resource/angular-resource.min.js'
	);

	wp_register_script(
		'angularjs-touch',
		get_stylesheet_directory_uri() . '/bower_components/angular-touch/angular-touch.min.js'
	);

	wp_register_script(
		'angularjs-isotope',
		get_stylesheet_directory_uri() . '/bower_components/angular-isotope/dist/angular-isotope.min.js'
	);

	wp_register_script(
		'jquery',
		get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.min.js'
	);


	wp_enqueue_script(
		'my-scripts',
		get_stylesheet_directory_uri() . '/js/scripts.js',
		array( 'angularjs', 'angularjs-route', 'angularjs-resource','angularjs-touch','angularjs-isotope', 'jquery')
	);


	wp_localize_script(
		'my-scripts',
		'myLocalized',
		array(
			'partials' => trailingslashit( get_stylesheet_directory_uri() ) . 'partials/'
			)
	);
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );