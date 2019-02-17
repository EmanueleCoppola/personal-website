<?php

/**
 * Class ThemeFeatures.
 *
 * It handles the theme features.
 */
final class ThemeFeatures
{

    /**
     * Stores the current WP_Theme object.
     * @var WP_Theme
     */
    protected $theme;

    /**
     * ThemeFeatures constructor.
     */
    public function __construct()
    {

        $this->theme = wp_get_theme();

        // Hook up the after_setup_theme.
        add_action('after_setup_theme', array($this, 'setupThemeFeatures'));

    }

    /**
     *  This function will setup the features of the theme.
     */
    public function setupThemeFeatures()
    {

        // Enable theme translations.
        //load_theme_textdomain('emanuele-coppola', get_template_directory() . '/languages' );

        // We let WordPress manage the <title> tag.
        add_theme_support('title-tag');

    }

}
