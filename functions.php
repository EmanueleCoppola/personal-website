<?php

defined('ABSPATH') or die('No script kiddies please!');

/**
 *  This function will setup the features of the theme.
 */
function _emanuele_coppola_setup()
{

    // Enable theme translations.
    //load_theme_textdomain('emanuele-coppola', get_template_directory() . '/languages' );

    // We let WordPress manage the <title> tag.
    add_theme_support('title-tag');

}

/**
 *  This function handles all the assets required to make Emanuele Coppola's theme works.
 */
function _emanuele_coppola_assets()
{

    $theme = wp_get_theme();

    // Default theme style.
    wp_enqueue_style('emanuele-coppola-style', get_stylesheet_uri(), array(), $theme->get('Version'));

}

/**
 *  This function enables menu theme support.
 */
function _emanuele_coppola_menus()
{

    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
        )
    );

}

// Setup the theme.
add_action('after_setup_theme', '_emanuele_coppola_setup');

// Hook up the styles.
add_action('wp_enqueue_scripts', '_emanuele_coppola_assets');

// Hook up the menus.
add_action('init', '_emanuele_coppola_menus');
