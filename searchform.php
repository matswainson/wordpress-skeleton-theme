<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'wordpress-skeleton-theme' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'wordpress-skeleton-theme' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'wordpress-skeleton-theme' ); ?>">
	</label>
	<button type="submit" class="search-submit">Search</button>
</form>