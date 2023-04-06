<?php 

function montheme_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menu');
    register_nav_menu('header', 'En tête du menu');
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




add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
?>