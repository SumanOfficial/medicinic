<?php

/**
 * The aboutus sidebar for the landing page about-us widget area
 *
 * @package medicinic
 */

if (!is_active_sidebar('doctor-hero-sidebar')) {
    return;
}
?>


<!-- geting our dynamic sidebar -->
<?php dynamic_sidebar('doctor-hero-sidebar'); ?>