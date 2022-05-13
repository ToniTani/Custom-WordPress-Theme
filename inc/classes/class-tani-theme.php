<?php
/**
 * Bootstraps the Theme.
 *
 * @package Tani
 */
namespace TANI_THEME\Inc;

use TANI_THEME\Inc\Traits\Singleton;

class TANI_THEME {
    use Singleton;

    protected function __construct() // load class.
    {
        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {

        add_action('after_setup_theme', [$this, 'setup_theme']);
        //actions and filters
    }
    public function setup_theme() {
        add_theme_support('title-tag');

        add_theme_support('custom-logo', [

            'header-text'          => [ 'site-title', 'site-description'],
            'height'               => 50,
            'width'                => 200,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true,

        ]);

        add_theme_support('custom-background', [
            'default-color' => '4169e1',
            'default-image' => '',
            'default-repeat' => 'no-repeat',
        ]);

        add_theme_support('post-thumbnails');

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('automatic-feed-links');

        add_theme_support('html5',[
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            ]);
        add_editor_style();
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');

        global $content_width;
        if ( ! isset( $content_width)) {
            $content_width = 1240;
        }
    }
}