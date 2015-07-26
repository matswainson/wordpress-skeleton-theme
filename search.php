<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */
get_header(); ?>
<section>
<?php
if ( have_posts() ) {
?>
	<h2><?php printf( __( 'Search Results for: %s', 'wordpress-skeleton-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
<?php
	get_template_part( 'loop', 'search' );
} else {
?>
	<h2><?php _e( 'Nothing Found', 'wordpress-skeleton-theme' ); ?></h2>
	<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'wordpress-skeleton-theme' ); ?></p>
<?php
	get_search_form();
}
	get_sidebar();
?>
</section>
<?php get_footer(); ?>
