<?php

/**
 * The testimonial sidebar for the landing page testimonials widget area
 *
 * @package medicinic
 */

if (!is_active_sidebar('testimonial-hero-sidebar')) {
    return;
}
?>


<!-- geting our dynamic sidebar -->
<?php dynamic_sidebar('testimonial-hero-sidebar'); ?>