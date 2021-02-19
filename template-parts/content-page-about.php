<?php

/**
 * Template part for displaying about page content in page-about.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medicinic
 */

?>


<!-- #TODO add the about back img -->
<img src="img/about-back.svg" alt="" class="about-back rellax" data-rellax-speed="1" />
<div class="pattrn">
    <!-- #TODO add the about back img -->
    <img src="img/about-pattrn.svg" alt="" class="about-pattrn" />
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="img-border">
                <div class="img-container">
                    <?php medicinic_post_thumbnail(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-6 about-text">
            <?php the_title('<h6 class="about-text-head">', '</h6>'); ?>
            <?php the_content(); ?>
            <div class="about-review row">
                <?php
                // about-review sidebar
                theme_sidebar('inc/sidebar', 'about-review');
                ?>
            </div>
        </div>
    </div>
</div>