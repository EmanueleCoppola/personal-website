<?php

/**
 * Class Styles.
 *
 * It handles the theme styles.
 */
final class Styles
{

    /**
     * Stores the current WP_Theme object.
     * @var WP_Theme
     */
    protected $theme;

    /**
     * Styles constructor.
     */
    public function __construct()
    {

        $this->theme = wp_get_theme();

        // Hook up the styles.
        add_action('wp_enqueue_scripts', array($this, 'enqueueMainStyle'));

    }

    /**
     *  This function handles all the assets required to make Emanuele Coppola's theme works.
     */
    public function enqueueMainStyle()
    {

        // Default theme style.
        wp_enqueue_style('emanuele-coppola-style', get_stylesheet_uri(), array(), $this->theme->get('Version'));

    }

}
