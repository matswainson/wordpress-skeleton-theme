<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */
get_header(); ?>
<section>
<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_content();
		}
	}
?>
</section>
<?php get_footer(); ?>