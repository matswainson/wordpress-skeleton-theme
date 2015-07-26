<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9]><html class="no-js ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/static/img/favicon.png" type="image/png">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/styles.css">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<a href="/"><?php echo get_bloginfo('name'); ?></a>
		<span><?php echo get_bloginfo('description'); ?></span>
		<?php wp_nav_menu( array(
			'container' => 'none',
			'menu' => 'Primary',
			'menu_class' => '',
		) ); ?>
	</header>