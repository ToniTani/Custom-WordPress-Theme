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
        //actions and filters
    }
}