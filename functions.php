<?php
/**
 * Theme functions
 *
 * @package Tani
 */

if (! defined('TANI_DIR_PATH')) {
    define('TANI_DIR_PATH', untrailingslashit( get_template_directory()));
}

require_once TANI_DIR_PATH . '/inc/helpers/autoloader.php';

function tani_get_theme_instance() {
    \TANI_THEME\Inc\TANI_THEME::get_instance();
}

function tani_enqueue_scripts() {
    // wp_enqueue_style('main-css', get_template_directory_uri() .'/main.css', ['stylesheet'] );

    // Register Styles.
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all' );
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );

    // Register Scripts.
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true );
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true );


    // Enqueue Styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    // Enqueue Scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');

}

add_action('wp_enqueue_scripts', 'tani_enqueue_scripts');
?>