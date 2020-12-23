<?php

/**
 * Enqueue scripts and styles.
 */
function medicinic_scripts()
{
	/**
	 * Css & Scss files and links are added here
	 */
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array(), _S_VERSION);
	wp_enqueue_style('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), _S_VERSION);
	wp_enqueue_style('medicinic-style', get_stylesheet_uri(), array('bootstrap'), _S_VERSION);


	/**
	 * Javascript links and files are added here 
	 */
	wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('rellax-js', 'https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js', array('jquery'), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'medicinic_scripts');
