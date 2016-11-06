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

function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

//Remove the lost password link//
function remove_lostpassword_text ( $text ) {
    if ($text == 'Lost your password?'){$text = '';}
        return $text;
    }
add_filter( 'gettext', 'remove_lostpassword_text' );

//change login error message//
add_filter('login_errors', 'rs_custom_login_error');

function rs_custom_login_error() {
    return $error = "Oops! Sorry, you have entered the wrong username or password.";
}

//change the login logo//

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo');

//Create dynamic sidebar for social media accounts//
function accelerate_theme_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );
 ?>