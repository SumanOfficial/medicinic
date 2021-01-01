<?php

/**
 * This is the Contact us area of our landing page
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
    'post_type' => 'contact',
    'posts_per_page' => 2
];
// contact query to data base
$cq = new WP_Query($args);
?>

<?php if ($cq->have_posts()) : ?>
    <img src="<?php echo get_template_directory_uri() . '/assets/contact-pattern.svg'; ?>" alt="" class="contact-pattern" />
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-text">
                    <?php get_sidebar('contact-hero'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-icon">
                    <?php
                    /**
                     * displaying the custom post-type contact
                     */
                    while ($cq->have_posts()) : $cq->the_post();
                    ?>
                        <div class="contact-phone">
                            <div class="row">
                                <?php

                                /**
                                 * Here we are using wp functions to get ACF value
                                 * We can also use ACF function to get values
                                 * 
                                 * get_field('icon')['url'];
                                 */
                                $img_id = get_post_meta(get_the_ID(), 'icon', true);
                                if ($img_id) :
                                    $img = wp_get_attachment_image_src($img_id)[0];
                                ?>
                                    <div class="col-2"><img src="<?php echo $img; ?>" alt="" /></div>
                                <?php
                                endif;
                                ?>
                                <div class="col-10">
                                    <h6><?php the_title(); ?></h6>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php endif;  ?>