<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package write
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap.css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/highlight.js/default.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'write'); ?></a>

		<header id="masthead" class="site-header col-lg-10 mx-auto p-3 py-md-3">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$write_description = get_bloginfo('description', 'display');
				if ($write_description || is_customize_preview()) :
				?>
					<p class="site-description">
						<?php
						// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
						echo $write_description;
						?>
					</p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php /* <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'write' ); ?></button> */ ?>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->