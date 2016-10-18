<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
 
 //Custom post types function
 
 function accelerate_create_custom_post_types() {

	register_post_type('case_studies',
		array(
			// 'supports' => $supports,
			'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __( 'Case Study' ),
				'add_new_item'  => __( 'Add New Case Study'),
				'new_item'      => __( 'New Case Study' ),
				'search_items'  => __( 'Search Case Studies')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'case-studies'
				),
			)
	 );
	
	register_post_type('services',
		array(
			// 'supports' => $supports,
			'labels' => array(
				'name' => __( 'Services' ),
				'singular_name' => __( 'Service' ),
                'add_new_item' => __( 'Add new Service'),
				),
			'public' => true,
			'has_archive' => false
			)
	 );
}
// Hook this custom post type function into the theme
add_action( 'init', 'accelerate_create_custom_post_types' );
 ?>