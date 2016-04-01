<?php
function mytheme_enqueue() {
	wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
	wp_enqueue_script( 'site' );

	wp_register_style( 'screen', get_stylesheet_uri(), '', '', 'screen' );
	wp_enqueue_style( 'screen' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' );

// For the demo, lets discuss if its beeter to use functions.php or header.php to load these.