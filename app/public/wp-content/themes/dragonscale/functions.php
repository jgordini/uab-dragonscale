<?php
add_action('wp_enqueue_scripts', 'dragonscale_enqueue_styles');
add_action('wp_enqueue_scripts', 'dragonscale_enqueue_scripts');
add_action('after_theme_setup', 'dragonscale_theme_support');
add_action('init', "dragonscale_menus");
function dragonscale_theme_support()
{
    add_theme_support('title-tag');
}

function dragonscale_menus()
{
    $locations = array(
        'primary' => 'Desktop Nav',
        'mobile' => 'Mobile Menu'
    );
    register_nav_menus($locations);
}

function dragonscale_enqueue_styles()
{
    $parent_style = 'blankslate-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style, 'dragonscale-bootstrap'),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style('dragonscale-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css", array(), '5.3', 'all');
    wp_enqueue_style('dragonscale-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", array(), '6.4', 'all');
}
function dragonscale_enqueue_scripts()
{
    wp_enqueue_script('dragonscale-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js", array('jquery'), '2.9.2', true);
    wp_enqueue_script('dragonscale-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js", array('jquery', 'dragonscale-popper'), '5.3', true);
}