<?php

/**
 * Class ThemeMenus.
 *
 * It handles the theme menus.
 */
final class ThemeMenus
{

    /**
     * ThemeMenus constructor.
     */
    public function __construct()
    {

        // Hook up the init.
        add_action('init', array($this, 'setupThemeMenus'));

    }

    /**
     *  This function enables menu theme support calling each single menu.
     */
    public function setupThemeMenus()
    {

        $this->setupHeaderMenu();

    }

    /**
     *  This function setups the header menu.
     */
    protected function setupHeaderMenu()
    {

        register_nav_menus(
            array(
                'header-menu' => __('Header Menu'),
            )
        );

    }

}
