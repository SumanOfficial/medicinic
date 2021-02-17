<?php

/**
 * The blog sidebar
 *
 * @package medicinic
 */

if (!is_active_sidebar('blog-sidebar')) {
    return;
}
?>


<!-- geting our dynamic sidebar -->
<?php dynamic_sidebar('blog-sidebar'); ?>