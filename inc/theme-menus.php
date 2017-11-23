<?php 

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