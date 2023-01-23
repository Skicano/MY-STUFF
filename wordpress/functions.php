<?php

/**
 * Kiwi's functions and definitions
 *
 * @package Kiwi
 * @since Kiwi 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'kiwi_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function kiwi_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'kiwitheme', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-formats' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( [
        'primary'   => __( 'Primary Menu', 'kiwitheme' ),
        'secondary' => __( 'Secondary Menu', 'kiwitheme' )
    ] );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', [ 'aside', 'gallery', 'quote', 'image', 'video' ] );
}
endif; // kiwi_setup
add_action( 'after_setup_theme', 'kiwi_setup' );

function kiwi_enqueues() { 
    wp_register_style( ID, PUTANJA );
    wp_enqueue_style( ID );
    wp_register_script( ID, PUTANJA );
    wp_enqueue_script( ID );
}
add_action('wp_enqueue_scripts', 'kiwi_enqueues');


function kiwi_enqueues() {
    wp_register_style( 'site-style',  get_template_directory_uri() . '/css/site.css' );
    wp_enqueue_style( 'site-style' );
    
       wp_register_script( 'site-script',  get_template_directory_uri() . '/js/script.js' );
    wp_enqueue_script( 'site-script' );
}
add_action('wp_enqueue_scripts', 'kiwi_enqueues');

// Ukoliko želite registrirati neki stil npr google fonts direktno s linka onda umjesto dijela get_template_directory_uri() ... unosite poptun link na sljedeći način:
wp_register_style('google-fonts', 'putanja_do_stila');
