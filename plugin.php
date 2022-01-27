<?php

namespace WPSTEST;

/*
 * Plugin Name: wp-scripts 20.0 test
 * Description: Testing @wordpress/scripts 20.0 "start"" builds without --hot
 * Author: vena
 * Version: 0.1
 */
// Exit if accessed directly.
if (! \defined('ABSPATH')) {
    exit;
}

// Editor Assets
function editor_assets()
{
    $url = \untrailingslashit(\plugin_dir_url(__FILE__));

    $assets = include \plugin_dir_path(__FILE__) . 'build/index.asset.php';
    \wp_enqueue_script(
        'wps_test-backend-js', // Handle.
        $url . '/build/index.js',
        [],//$assets['dependencies'],
        $assets['version'],
        true
    );
}
\add_action('enqueue_block_editor_assets', __NAMESPACE__ . '\\editor_assets');
