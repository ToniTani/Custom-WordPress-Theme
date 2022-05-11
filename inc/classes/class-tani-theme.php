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
    }
}