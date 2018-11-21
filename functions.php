<?php
 
function sanco_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'sanco_theme_assets' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );