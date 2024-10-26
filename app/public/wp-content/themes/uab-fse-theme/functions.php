<?php
/**
 * UAB FSE Theme functions and definitions
 */

if ( ! function_exists( 'uab_fse_theme_setup' ) ) {
    function uab_fse_theme_setup() {
        add_theme_support( 'wp-block-styles' );
        add_editor_style( 'style.css' );
    }
}
add_action( 'after_setup_theme', 'uab_fse_theme_setup' );

// Register Block Patterns
require_once get_template_directory() . '/block-patterns/register-patterns.php';
