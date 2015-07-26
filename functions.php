<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */

function wp_scripts(){

	// Menu
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'wordpress-skeleton-theme' ),
	) );

	// Sidebar
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'id' => 'sidebar',
			'name'=> 'Sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
	}
	
	if(is_admin()){ return; }

	wp_deregister_script('jquery');

}

add_action('init', 'wp_scripts');