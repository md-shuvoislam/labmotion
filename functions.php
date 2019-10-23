<?php 
	 add_action( 'wp_enqueue_scripts', 'labmotion_enqueue_styles' );
	 function labmotion_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  wp_enqueue_style( 'themes-style', get_stylesheet_directory_uri() . '/css/themes.css' ); 
 		  wp_enqueue_style( 'mohave-regular', get_stylesheet_directory_uri() . '/css/mohave-regular.css' ); 
 		  wp_enqueue_style( 'mohave-italic', get_stylesheet_directory_uri() . '/css/mohave-italic.css' ); 
 		  wp_enqueue_style( 'italic', get_stylesheet_directory_uri() . '/css/italic.css' ); 
 	} 


 	/**
	 * TGM Activation
	 */
	require dirname( __FILE__ ) . '/inc/tgm/tgm-init.php';


 ?>