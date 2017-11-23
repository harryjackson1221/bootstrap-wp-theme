<?php

/* enqueue styles and scripts */
  
function wp_bootstrap_enqueue_assets() {
	//wp_deregister_script ('jquery');

	//Bootstrap core CSS
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/inc/vendor/bootstrap/css/bootstrap.min.css' );

	//Custom fonts for this template 
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/inc/vendor/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'simple-line-icons', get_stylesheet_directory_uri() . '/inc/vendor/simple-line-icons/css/simple-line-icons.css' );


    //Google Fonts 
    wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato' );
    wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900' );
    wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Muli' );
    

    //Custom styles for this template
    wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/inc/css/new-age.css' );


	//Enqueue the JavaScript stuff
	wp_enqueue_script( 'theme-jquery', get_stylesheet_directory_uri() . '/inc/vendor/jquery/jquery.js', array(), '3.2.1', true );
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/inc/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '4.0.0', true );
	wp_enqueue_script( 'jquery-easing', get_stylesheet_directory_uri() . '/inc/vendor/jquery-easing/jquery.easing.min.js', array(), '1.4.1', true );
	wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/inc/js/new-age.js', array('jquery-easing'), '1.4.1', true );

}

add_action( 'wp_enqueue_scripts' , 'wp_bootstrap_enqueue_assets' );

?>
