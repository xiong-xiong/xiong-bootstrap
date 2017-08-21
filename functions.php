<?php
//Activate scripts here
function my_theme_scripts() {
    	//Generic scripts
    	wp_enqueue_script( 'xiong-scripts', get_template_directory_uri() . '/js/xiong-scripts.js', array( 'jquery' ), '1.0.0', true );
    	//Scripts related to navigation
        wp_enqueue_script( 'xiong-navi', get_template_directory_uri() . '/js/xiong-navi.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );







//Including sidebar functions
require_once( __DIR__ . '/functions/sidebars.php');

//Including menu functions
require_once( __DIR__ . '/functions/menus.php');





//Including query manipulation functions
require_once( __DIR__ . '/functions/query.php');

//Including Posts2posts plugins connection type functions
//require_once( __DIR__ . '/functions/p2p.php');



?>