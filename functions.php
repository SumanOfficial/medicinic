<?php

/**
 * medicinic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medicinic
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Adding Theme Support
 */
require get_template_directory() . './inc/theme-support.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function medicinic_content_width()
// {
// 	$GLOBALS['content_width'] = apply_filters('medicinic_content_width', 640);
// }
// add_action('after_setup_theme', 'medicinic_content_width', 0);

/**
 * Bootstrap Nav walker
 */
/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
	require_once get_template_directory() . './inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

/**
 * Custom Navigation menus
 */
require get_template_directory() . './inc/custom-nav-menu.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . './inc/enqueue_scripts_style.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Sidebars
 */
require get_template_directory() . '/inc/custom-sidebar.php';

/**
 * Custom Text Widget
 */
require get_template_directory() . './inc/custom-heading-widget.php';

/**
 * Custom Button Widget
 */
require get_template_directory() . './inc/custom-button-widget.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
