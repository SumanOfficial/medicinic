<?php

/**
 * Template part for Bolg content part 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medicinic
 */

?>

<?php while (have_posts()) : the_post(); ?>
    <div class="blog-post">
        <div class="row">
            <div class="col-lg-12">
                <?php medicinic_posted_by(); ?>
            </div>
        </div>
        <div class="row mt-4">
            <?php if (has_post_thumbnail()) : ?>
                <div class="col-lg-4">
                    <?php medicinic_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
            <div class="col-lg-8">
                <a href="<?php esc_url(the_permalink()); ?>" class="blog-content-title"><?php esc_html_e(the_title()); ?></a>
                <div class="blog-content">
                    <?php esc_html_e(the_excerpt()); ?>
                </div>
                <?php if (has_tag()) : ?>
                    <p class="blog-content-tags"><?php esc_html_e(the_tags('Tags : ', ' , ', '')); ?></p>
                <?php endif; ?>
                <?php medicinic_posted_on(); ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
    <nav class="pagination mt-5" role="navigation">

        <div class="nav-previous">
            <?php previous_posts_link('&larr; Previous posts'); ?>
        </div>
        <div class="nav-next ml-3">
            <?php next_posts_link('New posts &rarr;'); ?>
        </div>
    </nav>
<?php endif; ?>