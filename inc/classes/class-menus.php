<?php
/**
 * Register Menus.
 *
 * @package Tani
 */
namespace TANI_THEME\Inc;

use TANI_THEME\Inc\Traits\Singleton;

class Menus {
    use Singleton;

    protected function __construct() // load class.
    {
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        //actions and filters
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus() {
            register_nav_menus([
                    'tani-header-menu' => esc_html__( 'Header Menu', 'tani' ),
                    'tani-footer-menu' => esc_html__( 'Footer Menu', 'tani' )
                ]);
        }
}
