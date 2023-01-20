<?php

function meutema_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','meutema_setup');


function meutema_theme_admin_scripts()
{
    wp_enqueue_style(
        'bootstrap_css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
    );
    wp_enqueue_style('main_css', get_template_directory_uri() .
        '/style.css');
}
add_action('wp_enqueue_scripts', 'meutema_theme_admin_scripts');


function meutema_widgets_init()
{
    register_sidebar(array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'meutema_widgets_init');
