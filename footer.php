<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medicinic
 */

?>

<!-- footer area start here -->
<footer>
	<img src="<?php echo get_template_directory_uri() . '/assets/footer-back.svg' ?>" alt="" class="footer-back rellax" data-rellax-speed="2" data-rellax-percentage="0.9" />
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6">
				<?php
				/**
				 * Custom logo
				 */

				if (has_custom_logo()) :
				?>
					<h3 class="footer-logo">
						<?php
						the_custom_logo();
						?>
						<h3 class="footer-logo"> <?php bloginfo('name'); ?> </h3>
					</h3>
				<?php else : ?>
					<h3 class="footer-logo"> <?php bloginfo('name'); ?></h3>
				<?php endif; //-----custom logo 
				?>
			</div>
			<div class="col-md-6">
			</div>
		</div>
		<div class="row mt-5">
			<?php
			/**
			 * Footer sidebar
			 */
			get_sidebar('footer');
			?>
		</div>
	</div>
</footer>
<!-- footer area end here -->

<?php wp_footer(); ?>

</body>

</html>