<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medicinic
 */

get_header();
?>

<!-- hero area start -->
<section id="hero-area">
	<?php get_template_part('/template-parts/content-landing/landing', 'hero'); ?>
</section>
<!-- hero area end -->
<!-- service area start -->
<section id="services">
	<?php get_template_part('/template-parts/content-landing/landing', 'service') ?>
</section>
<!-- service area end -->
<!-- about us area start -->
<section id="about">
	<?php get_template_part('/template-parts/content-landing/landing', 'about'); ?>
</section>
<!-- about us area end -->

<!-- contact us start  -->
<section id="contact">
	<?php get_template_part('/template-parts/content-landing/landing', 'contact'); ?>
</section>
<!-- contact area end -->

<!-- doctors area start -->
<section id="doctors">
	<?php get_template_part('/template-parts/content-landing/landing', 'team'); ?>
</section>
<!-- doctors area end -->

<!-- testimonials area start -->
<section id="testimonials">
	<?php get_template_part('/template-parts/content-landing/landing', 'testimonials'); ?>
</section>
<!-- contact area end -->

<?php
get_footer();
