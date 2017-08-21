<?php
//Create Nav Menu
//if (function_exists('register_nav_menus')) {
//	register_nav_menus (array( 'main-nav' => 'Header Navigation' ));
//	register_nav_menus (array( 'secondary' => 'City Navigation' ));
//}



function register_my_menus() {
  register_nav_menus(
    array(
      'mainnav' => __( 'Main nav' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


//Tuki artikkelikuvien eri kokoisille kuville
if (function_exists('add_theme_support')) {
	add_theme_support( 'post-thumbnails' ); 
}

if (function_exists('add_image_size')) {
//KUVAKOOT
	add_image_size( 'banner',960 ,450, true );
	add_image_size( 'square',400 ,400, true );
	// true = crop image 
}

?>