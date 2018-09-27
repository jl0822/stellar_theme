<?php



function register_style_sheet() {

	// CSS Files
	wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('main_css' , get_template_directory_uri() . '/assets/css/main.css');
}

add_action('wp_enqueue_scripts', 'register_style_sheet');


function register_javascript_files() {

	// JS Files
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
	wp_enqueue_script('jquery_scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js');
	wp_enqueue_script('jquery.scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js');
	wp_enqueue_script('browser', get_template_directory_uri() . '/assets/js/browser.min.js');
	wp_enqueue_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js');
	wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js');
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');	
	
}

add_action('wp_enqueue_scripts', 'register_javascript_files');


	// Registering a Navigation Bar
	register_nav_menus( array(
		'primary'=>__('primary menu')
	));

	// theme support thumbnails

	add_theme_support('post-thumbnails');
	

?>