<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package medicinic
 */

get_header();
?>

<main id="primary" class="site-main">



</main><!-- #main -->



<section id="single-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'medicinic') . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'medicinic') . '</span> <span class="nav-title">%title</span>',
						)
					);
				?>
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
			<div class="col-lg-3">
				<?php theme_sidebar('./inc/sidebar', 'blog'); ?>
			</div>
		</div>
	</div>
</section>


<?php
// get_sidebar();
get_footer();

?>