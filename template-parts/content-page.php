<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medicinic
 */

?>


<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="appointment-title">
				<?php the_title('<h1>', '</h1>'); ?>
				<!-- subtitle -->
				<?php
				$subtitle = get_post_meta($post->ID, 'subtitle', true);
				if (!empty($subtitle)) :
				?>
					<h5 class="appointment-subtitle">
						<?php esc_html_e($subtitle);  ?>
					</h5>
				<?php endif; ?>
			</div>
			<?php if (has_post_thumbnail()) : ?>
				<img src="<?php esc_url(the_post_thumbnail_url(), 'medicinic'); ?>" alt="" class="appoinment-thumbnail">
			<?php endif; ?>
		</div>
		<div class="col-md-12 appointment-content">
			<?php esc_html_e(the_content()); ?>
		</div>
	</div>
	<?php theme_sidebar('inc', 'footer'); ?>
</div>
</div>