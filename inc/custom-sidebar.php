<?php

/**
 * medicinic Custom Sidebars
 *
 * @package medicinic
 */


function medicinic_sidebar()
{
    /**
     * Register hero sidebar of landing page
     * before_sub_title, after_sub_title & before desc, after_desc is created for custom heading widgte
     */
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

    /**
     * Register aboutus sidebar of landing page
     */
    $about_review_args = array(
        'name' => __('About Review Sidebar', 'medicinic'),
        'id' => 'about-review-sidebar',
        'description' => __('This Is the landing page sidebar for aboutus review area !', 'medicinic'),
        'before_widget' => '<div class="about-review-patients col-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="point-outline">
                                            <div class="point"></div>
                                        </div>
                                    </div>
                                    <div class="col-8">',
        'after_widget'  =>          '</div>
                                </div>
                            </div>',

        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    );
    register_sidebar($about_review_args);
}

// initialize widgets
add_action('widgets_init', 'medicinic_sidebar');
