<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wonderland
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'wonderland'); ?></a>

		<header id="masthead" class="site-header">
			<div class="fixed-container">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span><?php esc_html_e('Primary Menu', 'wonderland'); ?></span>
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>

						</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'walker'		=> new New_Walker_Nav_Menu()
						)
					);
					?>
				</nav><!-- #site-navigation -->

				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<!-- <h1 class="site-title"><a href="<?php //echo esc_url(home_url('/')); ?>" rel="home"><?php //bloginfo('name'); ?></a></h1> -->
					<?php
					//else :
					?>
						<!-- <p class="site-title"><a href="<?php //echo esc_url(home_url('/')); ?>" rel="home"><?php //bloginfo('name'); ?></a></p> -->
					<?php
					endif;
					//$wonderland_description = get_bloginfo('description', 'display');
					//if ($wonderland_description || is_customize_preview()) :
					?>
						<!-- <p class="site-description"><?php //echo $wonderland_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></p> -->
					<?php //endif; ?>
				</div><!-- .site-branding -->
			</div>

		</header><!-- #masthead -->