<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medicinic
 */

get_header();
?>

<!-- hero area start -->
<section id="hero-area">
	<img src="<?php esc_html_e(get_template_directory_uri() . '/assets/hero-back.svg'); ?>" alt="" class="hero-back rellax" data-rellax-speed="5" />
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="hero-text-area">
					<img src="<?php esc_html_e(get_template_directory_uri() . '/assets/heart-rate.svg'); ?>" class="heart-rate" />
					<h6>We are here for you</h6>
					<h1>What Make Us Better, Makes You Better.</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Adipiscing nulla fermentum lorem nisl tortor ac habitant. Et
						orci, diam nisi orci. consectetur adipiscing elit.
					</p>
					<a href="" class="btn-yellow">Get An Appointment</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="hero-img-area">
					<img src="<?php esc_html_e(get_template_directory_uri() . '/assets/hero-man.svg'); ?>" class="hero-man rellax" data-rellax-speed="-1" />
					<!-- <img src="" class="hero-man rellax" data-rellax-speed="-1" /> -->
					<img src="<?php esc_html_e(get_template_directory_uri() . '/assets/hero-pattern.svg'); ?>" alt="" class="hero-parttern" />
				</div>
			</div>
		</div>
	</div>
</section>
<!-- hero area end -->

<?php get_footer(); ?>