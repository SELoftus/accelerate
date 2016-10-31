<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<section class="error-page">
    <div class="site-content">
        <div class="error-page-hero">
            <h1>Whoops!</br>
            Took a Wrong Turn!</h1>
        </div><!-- .page-content -->
</section><!-- .about-page -->

<section class="site-content">
<div class="error-text">
<h5><p>Sorry, this page no longer exists, never existed, or has been moved. We feel like complete jerks for totally misleading you.</p>
            <p>Feel free to take a look around our <a href="http://localhost26762/blog"><span class="blurb-color">blog</span></a> or check out some of our featured <a href="http://localhost26762/case-studies" class="blurb-color"><span class="blurb-color">work</span></a>.</p>
            <div class="404-search-form">
                <p>Maybe try a search?<?php get_search_form(); ?></p></h5>
			</div>

</section>

<?php get_footer(); ?>