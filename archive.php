<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */
get_header(); ?>
<section>
<?php
	if ( have_posts() )
		the_post();
?>
	<h2>
<?php
	if ( is_day() ) {
		printf( __( 'Daily Archives: <span>%s</span>', 'wordpress-skeleton-theme' ), get_the_date() );
	} elseif ( is_month() ) {
		printf( __( 'Monthly Archives: <span>%s</span>', 'wordpress-skeleton-theme' ), get_the_date('F Y') );
	} elseif ( is_year() ) {
		printf( __( 'Yearly Archives: <span>%s</span>', 'wordpress-skeleton-theme' ), get_the_date('Y') );
	} else {
		_e( 'Blog Archives', 'wordpress-skeleton-theme' );
	}
?>
	</h2>
<?php
	rewind_posts();
	get_template_part( 'loop', 'archive' );
	get_sidebar();
?>
</section>
<?php get_footer(); ?>
