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
?>
	<div class="post">
		<div class="post__heading">
			<h1><?php the_title(); ?></h1>
			<span class="post__date"><?php the_time('F jS, Y') ?></span>
			<p class="post__meta"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ''); ?></p>
		</div>
		<div class="post__content">
			<?php the_content(); ?>
		</div>
		<?php comments_template(); ?>
	</div>
<?php
		}
	get_sidebar();
	}
?>
</section>
<?php get_footer(); ?>