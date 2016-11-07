<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<div class="site-description">
			<p><?php bloginfo('description'); ?></p>
			<p>&copy; <?php bloginfo('title'); ?>, LLC
		</div>
				
		<nav class="social-media-navigation" role="navigation" id="navmenu"><!--added id="navmenu" trying to remove ul-->
			<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
		</nav>

				
	</div><!-- .site-info -->
</footer><!-- #colophon -->

	<?php wp_footer(); ?>
</body>
</html>