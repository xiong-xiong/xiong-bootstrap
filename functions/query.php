<?php


/*//Muutetaan pääqueryn post järjestystä jos category
add_action('pre_get_posts', 'filter_category_order');

function filter_category_order( $query ){
    if( $query->is_category()||is_archive() ){
        $query->set('order', 'asc');
        
    } 
}*/

//Ingressin pituuden rajaaminen 15 sanaan
function new_excerpt_length($length) {
	return 16;
}
add_filter('excerpt_length', 'new_excerpt_length');

?>