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
            <!-- #TODO this should be a widget  -->
            <div class="about-review row">
                <div class="about-review-doctor col-4">
                    <div class="row">
                        <div class="col-3">
                            <div class="point-outline">
                                <div class="point"></div>
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>251 +</h3>
                            <h6>Expart Doctors</h6>
                        </div>
                    </div>
                </div>
                <div class="about-review-hospital col-4">
                    <div class="row">
                        <div class="col-3">
                            <div class="point-outline">
                                <div class="point"></div>
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>3556 +</h3>
                            <h6>Happy patients</h6>
                        </div>
                    </div>
                </div>
                <div class="about-review-patients col-4">
                    <div class="row">
                        <div class="col-3">
                            <div class="point-outline">
                                <div class="point"></div>
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>350 +</h3>
                            <h6>Hospital Room</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>