<?php

namespace Kantan;

/**
 * Configuration
 */
define('DISABLE_NAG_NOTICES', true);
define('KANTAN_ENABLE_COMPILER', true);

// This is where the magic happens
require_once(__DIR__ . '/framework/bootstrap.php');

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-css', asset_path('scss/style.scss'), false, null);
    wp_enqueue_script('theme-js', asset_path('js/main.js'), ['jquery'], null, true);
}, 50);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {

});
