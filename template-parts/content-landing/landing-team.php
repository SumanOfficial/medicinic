<?php

/**
 * This is the team area of our landing page
 * 
 * @package medicinic
 */
?>

<?php
/** arguments for the Custom Post-type contact
 *  @args post-type is the name of our custom post-type
 *  @args posts_per_page is no of post display 
 */
$args = [
    'post_type' => 'doctor'
];
// contact query to data base
$dq = new WP_Query($args);
?>

<?php if ($dq->have_posts()) : ?>
    <img src="img/doctor-back.svg" alt="" class="doctor-back rellax" data-rellax-speed="2" data-rellax-percentage="0.5" />
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php get_sidebar('doctor-hero'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <div class="slider-arrows">
                    <div class="pa">
                        <img src="<?php echo get_template_directory_uri() . '/assets/left-arrow.svg' ?>" alt="" />
                    </div>
                    <div class="na">
                        <img src="<?php echo get_template_directory_uri() . '/assets/right-arrow.svg' ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>

        <div class="slider">
            <?php while ($dq->have_posts()) : $dq->the_post(); ?>
                <div class="card">
                    <div class="card-img">
                        <?php if (has_post_thumbnail()) : ?>
                            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap" />
                        <?php endif; ?>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>

                    </div>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
<?php endif; ?>