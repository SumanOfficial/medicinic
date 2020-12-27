<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medicinic
 */

if (!is_active_sidebar('hero-sidebar')) {
	return;
}
?>
<!-- 
<aside id="secondary" class="widget-area"> -->
<?php dynamic_sidebar('hero-sidebar'); ?>
<!-- </aside>#secondary -->