<?php

function load_style_script()
{

    wp_enqueue_style('style',  get_stylesheet_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', null, true);

}
add_action('wp_enqueue_scripts', 'load_style_script');


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> __('Theme General Settings'),
        'menu_title'	=> __('Theme Settings'),
        'menu_slug' 	=> __('theme-general-settings'),
        'capability'	=> __('edit_posts'),
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> __('Theme Header Settings'),
        'menu_title'	=> __('Header'),
        'parent_slug'	=> __('theme-general-settings'),
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> __('Theme Footer Settings'),
        'menu_title'	=> __('Footer'),
        'parent_slug'	=> __('theme-general-settings'),
    ));
}
