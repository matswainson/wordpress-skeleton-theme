<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */
?>
<aside>
	<?php if ( !dynamic_sidebar('sidebar') ) { ?>
		<div id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</div>
		<h3>Archives:</h3>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		<h3>Categories:</h3>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>
	<?php } ?>
</aside>