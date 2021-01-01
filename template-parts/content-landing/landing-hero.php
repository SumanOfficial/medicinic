<?php

/**
 * This is the hero area of our landing page
 * 
 * @package medicinic
 */
?>

<img src="<?php esc_html_e(get_template_directory_uri() . '/assets/hero-back.svg'); ?>" alt="" class="hero-back rellax" data-rellax-speed="5" />
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="hero-text-area">
                <img src="<?php esc_html_e(get_template_directory_uri() . '/assets/heart-rate.svg'); ?>" class="heart-rate" />
                <h6></h6>
                <?php
                get_sidebar();
                ?>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="hero-img-area">
                <img src="<?php header_image(); ?>" class="hero-man rellax" data-rellax-speed="-1" />
            </div>
        </div>
    </div>
</div>