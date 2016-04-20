<?php // start php 
function mytheme_enqueue() { //create a function that we can call as a hook
	wp_register_script( 'site', get_template_directory_uri().'site.js', array( 'jquery' ) ); // locate jquery code we want to use in our theme
	wp_enqueue_script( 'site' ); // add it to the list of resources to load

	wp_register_style( 'screen', get_stylesheet_uri(), '', '', 'screen' ); // locate css code we want to use in our theme
	wp_enqueue_style( 'screen' ); // add it to the list of resources to load
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' ); // load css and javascript resources
register_nav_menus(array('primary' => 'Primary Nav','footer' => 'Footer Nav')); //enable menus and create locations for them
register_sidebar(array('id' => 'widgets','name' => 'Sidebar widgets')); // enable widgets in our theme that can be added to a sidebar
// you don't need to close the php tag. Why? Who knows.