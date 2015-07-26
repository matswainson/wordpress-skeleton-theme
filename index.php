<?php
	/**
 	* @package WordPress
 	* @subpackage wordpress-skeleton-theme
 	*/
get_header(); ?>
	<section>
	<?php
		get_template_part( 'loop' );
		get_sidebar();
	?>
	</section>
<?php get_footer(); ?>
