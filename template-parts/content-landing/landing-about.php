<?php

/**
 * This is the hero area of our landing page
 * 
 * @package medicinic
 */
?>


<?php

// query for the about page
$about_query = new WP_Query('pagename=about');
if ($about_query->have_posts()) :
    // "loop" through query (even though it's just one page) 
    while ($about_query->have_posts()) : $about_query->the_post();

?>

        <img src="<?php echo get_template_directory_uri() . '/assets/about-back.svg'; ?>" alt="" class="about-back rellax" data-rellax-speed="1" />
        <div class="pattrn">
            <img src="<?php echo get_template_directory_uri() . '/assets/about-pattrn.svg'; ?>" alt="" class="about-pattrn" />
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

<?php
    endwhile;
endif;
// reset post data (important!)
wp_reset_postdata();

?>