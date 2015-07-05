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

	wp_enqueue_script(
		'controllersjs',
		get_stylesheet_directory_uri() . '/js/controllers.js'
	);

	wp_enqueue_script(
		'filtersjs',
		get_stylesheet_directory_uri() . '/js/filters.js'
	);

	wp_enqueue_script(
		'servicesjs',
		get_stylesheet_directory_uri() . '/js/services.js'
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
		'jquery',
		get_stylesheet_directory_uri() . '/js/vendor/jquery-2.1.0.min.js'
	);


	wp_register_script(
		'angular-jquery',
		get_stylesheet_directory_uri() . '/bower_components/angular-jquery/dist/angular-jquery.min.js'
	);



	wp_register_script(
		'isotope',
		get_stylesheet_directory_uri() . '/bower_components/isotope/dist/isotope.pkgd.min.js'
	);

	wp_register_script(
		'angularjs-isotope',
		get_stylesheet_directory_uri() . '/bower_components/angular-isotope/dist/angular-isotope.js'
	);


	wp_enqueue_script(
		'my-scripts',
		get_stylesheet_directory_uri() . '/js/scripts.js',
		array( 'angularjs',
			'controllersjs',
			'filtersjs',
			'servicesjs',
			'angularjs-route',
			'angularjs-resource',
			'angular-jquery',
			'isotope',
			'angularjs-isotope')
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