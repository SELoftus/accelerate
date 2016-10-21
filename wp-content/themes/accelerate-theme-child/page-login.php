<?php
/**
 * The template for displaying the login page
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="login-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='login-hero'>
				<?php the_content(); ?>
             </div>
        <?php endwhile; // end of the loop. ?>
	</div><!-- .site-content -->
</section><!-- .about-page -->

<!-- Create the form -->
<div class="site-content">
    <p><h5>Sign in to your account:</h5>
    <div class="login-container">
        <form method="post">
            <p>
                <?php 
                    if( !empty($sucess) ) 
                    echo $sucess;
                
                    if( !empty($err) )
                    echo $err;
                ?>
            </p>
            <p><label for="log">Email:</label>
                <input type="text" name="log" id="log" value="" /></p>
            <p><label for="pwd">Password:</label>
                <input type="password" name="pwd" id="pwd" value="" /></p>    
            <p><input type="submit" value="Login" class="button" /></p>
        
            <label><input type="checkbox" name="remember" value="true" /> Remember Me</label>
            <input type="hidden" name="task" value="login" />
        </form>
    </div>
</div>
<?php get_footer(); ?>