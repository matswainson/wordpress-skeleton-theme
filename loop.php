<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */
?>
<div class="posts">
<?php if ( !have_posts() ) { ?>
	<div class="post error404 not-found">
		<h2><?php _e( 'Not Found', ' wordpress-skeleton-theme' ); ?></h2>
		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', ' wordpress-skeleton-theme' ); ?></p>
		<?php get_search_form(); ?>
	</div>
<?php }
	while ( have_posts() ) {
		the_post();
?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2 class="post__title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<span class="post__date"><?php the_time('F jS, Y') ?></span>
		<?php the_content('Continue reading'); ?>
		<p class="post__meta"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
	</div>
<?php
	}
	if ( $wp_query->max_num_pages > 1 ) { ?>
	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>
<?php } ?>
</div>