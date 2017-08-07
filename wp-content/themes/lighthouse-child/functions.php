<?php
function my_theme_enqueue_styles() {

    $parent_style = 'child-style'; // This is 'lighthouse-style' for the Lighthouse theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function load_google_fonts() {
wp_register_style ('googleWebFonts', 'https://fonts.googleapis.com/css?family=Roboto+Slab');
wp_enqueue_style('googleWebFonts');
}

add_action ( 'wp_print_styles', 'load_google_fonts');

function prefix_add_footer_styles() {
    wp_enqueue_style( 'h3', get_template_directory_uri() . '/stylesheets/style.css' );
};
add_action( 'get_footer', 'prefix_add_footer_styles' );