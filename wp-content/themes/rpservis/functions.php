<?php

if ( ! function_exists( 'rpservis_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function rpservis_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on rpservis, use a find and replace
         * to change 'rpservis' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'rpservis', get_template_directory() . '/languages' );
    }
endif;

add_action( 'after_setup_theme', 'rpservis_setup' );

if ( ! function_exists( 'rpservis_block_stylesheets' ) ) :
    function rpservis_block_stylesheets() {
        wp_enqueue_style( 'rpservis-block-styles', get_template_directory_uri() . '/assets/css/blocks.css', null, null );
    }
endif;

add_action( 'wp_enqueue_scripts', 'rpservis_block_stylesheets' );


// Theme supports
add_action( 'after_setup_theme', function(){

	// Add custom background support
	add_theme_support( 'custom-background' );

	// Add custom header support
	add_theme_support( 'custom-header' );

	// Add menus to the theme
	add_theme_support( 'menus' );

	// Add custom title tag support
	add_theme_support( 'title-tag' );

	// Add custom logo support to the theme
	add_theme_support( 'custom-logo', [
		'height'      => 190,
		'width'       => 190,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	] );
}
);
