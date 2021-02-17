<?php get_header(); ?>
<div id="blog-page">
    <div class="container">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <?php if (have_posts()) : ?>
                    <?php get_template_part('./template-parts/content', 'blog'); ?>
                <?php else :  ?>
                    <?php get_template_part('./template-parts/content', 'none'); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-3">
                <!-- sidebar -->
                <?php theme_sidebar('inc/sidebar', 'blog');  ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>