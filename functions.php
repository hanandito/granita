<?php
// SETUP ACF
add_filter( 'show_admin_bar', '__return_false' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}
// Active CLass
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
// MENU
add_action( 'after_setup_theme', 'theme_functions' );
function theme_functions() {

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'menus' );
    register_nav_menu('main',__( 'Main' ));
    register_nav_menu('side-menu',__( 'Side Menu' ));
    register_nav_menus(
	    array(
	    		'main' => __( 'Main' ),
	      	'side-menu' => __( 'Side Menu' ),
	      	'mobile' => __( 'Mobile' )
	    )
  	);
    
}
function my_nav_wrap() {
    $wrap  = '<ul id="%1$s" class="%2$s list-unstyled mb-0">';
    $wrap .= '%3$s';
    $wrap .= '</ul>';
    return $wrap;
}


?>