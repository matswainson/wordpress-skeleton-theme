<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */
get_header(); ?>
<section>
	<h2><?php printf( __( 'Category Archives: %s', 'wordpress-skeleton-theme' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h2>
<?php
	$category_description = category_description();
	if ( !empty($category_description) ) {
		echo '<div class="archive__meta">' . $category_description . '</div>';
	}
	get_template_part( 'loop', 'category' );
	get_sidebar();
?>
</section>
<?php get_footer(); ?>
