<?php 

function montheme_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menu');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}
function montheme_register_assets () {
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js');
    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js');
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}
function montheme_title_separator()
{
    return '|';
}

function montheme_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}


add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
?>