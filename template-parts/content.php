<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medicinic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
			<div class="entry-meta">
				<?php
				medicinic_posted_by();
				medicinic_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php medicinic_post_thumbnail(); ?>

	<div class="entry-content mt-5">
		<?php esc_html_e(the_content()); ?>
	</div><!-- .entry-content -->
	<hr class="mt-5">

	<footer class="content-footer">
		<?php medicinic_post_tags(); ?>
		<?php medicinic_post_categories(); ?>
	</footer><!-- .entry-footer -->
</article>