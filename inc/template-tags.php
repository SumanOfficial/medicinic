<?php

/**
 * Custom template tags for this theme
 * Eventually, some of the functionality here could be replaced by core features.
 * @package medicinic
 */

if (!function_exists('medicinic_posted_on')) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function medicinic_posted_on()
	{
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if (get_the_time('U') !== get_the_modified_time('U')) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date()),
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x('Posted on %s', 'post date', 'medicinic'),
			'<a href="' . esc_url(get_permalink()) . '" rel="bookmark" >' . $time_string . '</a>'
		);

		echo '<p class="blog-content-date">' . $posted_on . '</p>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if (!function_exists('medicinic_posted_by')) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function medicinic_posted_by()
	{
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x('%s', 'post author', 'medicinic'),
			'<img src="' . esc_url(get_avatar_url(get_the_author_meta('ID'))) . '" alt="" class="blog-content-author-avatar">
			<a class="blog-content-author" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>'
		);

		echo '<div> ' . $byline . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if (!function_exists('medicinic_post_categories')) :
	/**
	 * Prints HTML with meta information for the categories.
	 */
	function medicinic_post_categories()
	{
		// Hide category text for pages.
		if ('post' === get_post_type()) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list(esc_html__(', ', 'medicinic'));
			if ($categories_list) {
				/* translators: 1: list of categories. */
				printf('<h6 class="cat-links">' . esc_html__('Categories : %1$s', 'medicinic') . '</h6>', $categories_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}
	}
endif;

if (!function_exists('medicinic_post_tags')) :
	/**
	 * Prints HTML with meta information for the tags.
	 */
	function medicinic_post_tags()
	{
		// Hide tag text for pages.
		if ('post' === get_post_type()) {
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('', esc_html__(', ', 'medicinic'), '');
			if ($tags_list) {
				/* translators: 1: list of tags. */
				printf('<h6 class="tags-links">' . esc_html__('Tags : %1$s', 'medicinic') . '</h6>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}
	}
endif;

if (!function_exists('medicinic_entry_footer')) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function medicinic_entry_footer()
	{
		// Hide category and tag text for pages.
		if ('post' === get_post_type()) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list(esc_html__(', ', 'medicinic'));
			if ($categories_list) {
				/* translators: 1: list of categories. */
				printf('<p class="cat-links">' . esc_html__('Posted in %1$s', 'medicinic') . '</p>', $categories_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('<span class="tag-links">', esc_html_x(', ', 'list item separator', '</span>', 'medicinic'));
			if ($tags_list) {
				/* translators: 1: list of tags. */
				printf('<h6 class="tags-links">' . esc_html__('Tagged : %1$s', 'medicinic') . '</h6>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
			echo '<p class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'medicinic'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);
			echo '</p>';
		}
	}
endif;

if (!function_exists('medicinic_post_thumbnail')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function medicinic_post_thumbnail()
	{
		if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
			return;
		}

		if (is_singular()) :
?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
				?>
			</a>

<?php
		endif; // End is_singular().
	}
endif;

if (!function_exists('wp_body_open')) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open()
	{
		do_action('wp_body_open');
	}
endif;

if (!function_exists('theme_sidebar')) :
	/**
	 * Load the sidebar from a custom directory
	 * @param string $path the location of the directory
	 * @param string $name name of the sidebar
	 */

	function theme_sidebar($path = '', $name = '')
	{
		do_action('get_sidebar', $name);

		// if sidebar has name
		if ($name) :
			$name = "-$name";
		endif;
		// if path has
		if ($path) :
			$path = "$path";
		endif;

		locate_template("$path/sidebar$name.php", true);
	}
endif;
