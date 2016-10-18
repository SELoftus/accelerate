<?php
/**
 * The template for displaying the About page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero'>
				<h2><span class="blurb-color">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
             </div>
        <?php endwhile; // end of the loop. ?>
	</div><!-- .site-content -->
</section><!-- .about-page -->
 
 <section class="services-title">
    <div class="site-content">
    <div class="about-services">
        <h5>OUR SERVICES</h5>
        <p>We take pride in our clients and the content we create for them. </br>
        Here's a brief overview of our offered services.</p>
    </div>
    </div>
 </section>
 
 <section class="services-posts">
    <div class="site-content">
		<?php query_posts('posts_per_page=4&post_type=services'); ?>             					
			<?php while ( have_posts() ) : the_post(); 
                $service_icon = get_field("service_icon");
                $size = "medium";
            ?>
        <div class ="about-services-posts">			
            <div class ="about-services-images">
                <?php echo wp_get_attachment_image($service_icon, $size); ?>
            </div>
            <div class="about-services-content">
                <div class ="services-post-title">
                    <?php the_title(); ?>
                </div>
      		<?php the_content(); ?>
            </div>
        </div>			
		<?php endwhile; //end of the loop. ?>
		<?php wp_reset_query(); // resets the altered query back to the original ?>
    </div>
</section>

<div class="site-content">
    <div class="accelerate-footer">
        <div class="work-with-accelerate">
            <center><h2>Interested in working with us?<span><a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a></span></h2></center>
        </div>
    </div>
</div>
<?php get_footer(); ?>