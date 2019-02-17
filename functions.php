<?php

defined('ABSPATH') or die('No script kiddies please!');

// Requires the autoload to run properly.
require_once __DIR__ . '/vendor/autoload.php';

// WP Features.
new ThemeFeatures();
new ThemeMenus();

// Assets.
new Styles();
