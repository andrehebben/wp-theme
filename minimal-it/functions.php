<?php
/**
 * Minimal IT Solutions Manager functions and definitions
 */

if ( ! function_exists( 'minimal_it_setup' ) ) {
    function minimal_it_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'minimal-it' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'minimal_it_setup' );

function minimal_it_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', array(), '5.3.1' );
    wp_enqueue_style( 'minimal-it-style', get_stylesheet_uri(), array( 'bootstrap' ), '1.0' );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array(), '5.3.1', true );
}
add_action( 'wp_enqueue_scripts', 'minimal_it_scripts' );

