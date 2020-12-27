<?php

/**
 * This is the service area of our landing page
 * 
 * @package medicinic
 */
?>

<?php

/**
 * Arguments for custom post type service
 */
$args = [
    'post_type' => 'service',
    'posts_per_page' => 3,
];
// service query
$sq = new WP_Query($args);

/**
 * setup for the custom field Icon
 */
// global $wp_query;
// $postID = $wp_query->post->ID;

?>


<div class="container">
    <div class="row">
        <?php
        /**
         * looping the custom post type services
         */
        if ($sq->have_posts()) :
            while ($sq->have_posts()) : $sq->the_post();
        ?>
                <div class="col-md-4 service">
                    <div class="row">
                        <div class="col-3">
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
                                <img src="<?php echo $img; ?>" alt="" class="icon" />
                            <?php
                            endif;
                            ?>

                        </div>
                        <div class="col-9">
                            <h5><?php the_title(); ?></h5>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
        <?php
                /**
                 * end if condition
                 * end while loop
                 */
            endwhile;
            // reset post data
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>