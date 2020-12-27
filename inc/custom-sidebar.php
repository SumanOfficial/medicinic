<?php

/**
 * medicinic Custom Sidebars
 *
 * @package medicinic
 */


/**
 * Register sidebar
 * before_sub_title, after_sub_title & before desc, after_desc is created for custom heading widgte
 */
function medicinic_sidebar()
{
    $hero_args = array(
        'name' => __('Hero Sidebar', 'medicinic'),
        'id' => 'hero-sidebar',
        'description' => __('This Is the landing page sidebar for hero text area !', 'medicinic'),
        'before_widget' => '<div class="widget-text">',
        'after_widget' => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
        'before_sub_title'  => '<h1>',
        'after_sub_title'   => '</h1>',
        'before_desc'  => '<p>',
        'after_desc'  => '</p>',
    );
    register_sidebar($hero_args);
}

// initialize widgets
add_action('widgets_init', 'medicinic_sidebar');
