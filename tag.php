<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */
get_header(); ?>
<section>
	<h2><?php printf( __( 'Tag: %s', 'wordpress-skeleton-theme' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h2>
<?php
	get_template_part( 'loop', 'tag' );
	get_sidebar();
?>
</section>
<?php get_footer(); ?>