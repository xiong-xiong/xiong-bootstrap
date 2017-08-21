<?php

//Add theme support to widget editing buttons (defaut widgets)
add_theme_support('customize-selective-refresh-widgets' );



//Create own setting to customizer (color)
function xiong_customize_register($wp_customize){

	//Create a setting to database called header_bg_color
	$wp_customize->add_setting('header_bg_color', array(
		'default' => '#000', 
		'transport' => 'refresh'
		));

	//Create a section to customizer
	$wp_customize->add_section('xiong_color_theme_section', array (
		'title' => 'Värit',
		'priority' => 30

	));
	//Create input field and save value to previosly created DB col
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_colors', array (
		'label' 	=> 'Header väri',
		'section'	=> 'xiong_color_theme_section',
		'settings'	=> 'header_bg_color'

		) ));

}

add_action('customize_register', 'xiong_customize_register' );

//Get saved values from customizer to theme CSS using get_theme_mod
//You can use get_theme_mod to retrieve values in template files too
function xiong_head() {
?>
<style type="text/css">
	.xiong-hero {
		background: <?php echo get_theme_mod('header_bg_color', '#000' );?> !important;
	}
</style>
<?php


}


add_action('wp_head', 'xiong_head' );

?>