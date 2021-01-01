<?php

/**
 * This is the Testimonial area of our landing page
 * 
 * @package medicinic
 */
?>

<?php
/** arguments for the Custom Post-type testimonial
 *  @args post-type is the name of our custom post-type
 *  @args posts_per_page is no of post display 
 */
$args = [
    'post_type' => 'testimonial'
];
// contact query to data base
$tq = new WP_Query($args);
?>
<?php if ($tq->have_posts()) : ?>
    <div class="container">

        <?php
        /**
         * Getting the tesimonials hero area sidebar
         * testimonial-hero
         */
        get_sidebar('testimonial-hero');
        ?>

        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <div class="testimonial-slide-arrows">
                    <div class="te-pa">
                        <img src="<?php echo get_template_directory_uri() . '/assets/left-arrow.svg' ?>" alt="" />
                    </div>
                    <div class="te-na">
                        <img src="<?php echo get_template_directory_uri() . '/assets/right-arrow.svg' ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row"> -->
        <div class="testimonial-slide">
            <?php while ($tq->have_posts()) : $tq->the_post(); ?>
                <div class="Testimonial">
                    <h6 class="star">&#9733;&#9733;&#9733;&#9733;</h6>
                    <h5><?php the_title(); ?></h5>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                </div>
            <?php endwhile;
            // reset post data
            wp_reset_postdata(); ?>
        </div>
        <!-- </div> -->
    </div>
<?php endif; ?>