<?php
/* enqueue styles and scripts */
  
function wp_bootstrap_enqueue_assets() {
	//wp_deregister_script ('jquery');

	//Bootstrap core CSS
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );

	//Custom fonts for this template 
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'simple-line-icons', get_stylesheet_directory_uri() . '/vendor/simple-line-icons/css/simple-line-icons.css' );


    //Google Fonts 
    wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato' );
    wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900' );
    wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Muli' );
    

    //Custom styles for this template
    wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/css/new-age.css' );


	//Enqueue the JavaScript stuff
	wp_enqueue_script( 'theme-jquery', get_stylesheet_directory_uri() . '/vendor/jquery/jquery.js', array(), '3.2.1', true );
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '4.0.0', true );
	wp_enqueue_script( 'jquery-easing', get_stylesheet_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array(), '1.4.1', true );
	wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/js/new-age.js', array('jquery-easing'), '1.4.1', true );

}

add_action( 'wp_enqueue_scripts' , 'wp_bootstrap_enqueue_assets' );

// Add the Bootstrap Nav Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

// Make sure that the primary-menu and footer-menu have the correct classes in them
function primary_add_menu_atts( $atts, $item, $args ) {
	if( $args->theme_location == 'primary-menu' ) {
	$atts['class="nav-link js-scroll-trigger"'] = 'return true';
}
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'primary_add_menu_atts', 10, 3 );

function footer_menu_classes( $classes, $item, $args ) {
    if ( $args->theme_location == 'footer-menu' ) {
        // Make these items 3-columns wide in Bootstrap
        $classes[] = 'list-inline-item';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'footer_menu_classes', 10, 3 ); 

// Register the menu
register_nav_menus( array(
    'primary-menu' => __( 'Primary Menu', 'boldgrid-bootstrap' ),
    'footer-menu' => __( 'Footer Menu', 'boldgrid-bootstrap' ),
) );

?>