<?php

/**
 * Bootsraps the Theme.
 * 
 * @package Aquira
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME
{
    use Singleton;

    protected function __construct()
    {
        //load class.
        Assets::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions.
         */
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text'          => ['site-title', 'site-description'],
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true,
        ]);
        add_theme_support('custom-background', [
            'default-color'          => '#fff',
            'default-image'          => '',
            'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
            'default-position-x'     => 'left',    // 'left', 'center', 'right'
            'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
            'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
            'default-repeat'         => 'no-repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
            'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
        ]);
    }
}
