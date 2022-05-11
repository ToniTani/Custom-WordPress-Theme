<?php
/**
 * Theme functions
 *
 * @package Tani
 */

if (! defined('TANI_DIR_PATH')) {
    define('TANI_DIR_PATH', untrailingslashit( get_template_directory()));
}

if (! defined('TANI_DIR_URI')) {
    define('TANI_DIR_URI', untrailingslashit( get_template_directory_uri()));

}

require_once TANI_DIR_PATH . '/inc/helpers/autoloader.php';

function tani_get_theme_instance() {
    \TANI_THEME\Inc\TANI_THEME::get_instance();
}

tani_get_theme_instance();

