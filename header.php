<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medicinic
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

	<!-- navbar strart here -->
	<nav class="navbar navbar-light navbar-expand-md" role='navigation'>
		<div class="container">
			<!-- navbar brand -->
			<a class="navbar-brand" href="<?php get_home_url(); ?>">
				<?php
				// if custom logo exsist
				if (function_exists(the_custom_logo())) :
					the_custom_logo();

				// if not exists
				else :
					bloginfo('name');
				endif; ?>
			</a>

			<!-- navbar toggler button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- navbar items with bootstrap navwalker -->
			<?php
			wp_nav_menu(array(
				'theme_location'  => 'primary',
				'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarCollapse',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			));
			?>

		</div>
	</nav>
	<!-- navbar end here -->