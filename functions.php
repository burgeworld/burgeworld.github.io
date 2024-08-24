<?php
function mycustomtheme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mycustomtheme_enqueue_styles');

function mycustomtheme_setup() {
    add_theme_support('title-tag');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'mycustomtheme')
    ));
}
add_action('after_setup_theme', 'mycustomtheme_setup');
?>
