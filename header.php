<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

    <div class="menu">
        <div class="container">
            <div class="menu-wrapper">
                <nav>
                    <?php

                        wp_nav_menu(array(
                            'menu' => 'header-menu',
                            'menu_class' => '',
                            'container' => 'ul',
                        ));

                    ?>
                </nav>
            </div>
        </div>
    </div>
