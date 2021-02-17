<?php

/**
 * The Footer sidebar for the landing page about-us widget area
 *
 * @package medicinic
 */

if (!is_active_sidebar('footer-sidebar')) {
    return;
}
?>


<!-- geting our dynamic sidebar -->
<?php dynamic_sidebar('footer-sidebar'); ?>