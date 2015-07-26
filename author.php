<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */
get_header(); ?>
<section>
<?php if ( have_posts() ) the_post(); ?>
	<h2><?php printf( __( 'Author Archives: %s', 'wordpress-skeleton-theme' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h2>
<?php
	rewind_posts();
	get_template_part( 'loop', 'author' );
	get_sidebar();
?>
</section>
<?php get_footer(); ?>
