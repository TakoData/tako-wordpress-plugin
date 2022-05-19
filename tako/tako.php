<?php
/**
 * Plugin Name: Tako Data Visualization
 * Plugin URI:  https://github.com/TakoData/tako-wordpress-plugin
 * Description: The Tako Data Visualization plugin allows users to embed responsive data-driven visualizations from https://www.trytako.com.
 * Version:     0.1
 * License: GPLv2 or later
 */

// TODO: move these functions to a tako namespace.
function _tako_register_oembed_provider() {
    // https://developer.wordpress.org/reference/functions/wp_oembed_add_provider/
    wp_oembed_add_provider(
        'https://www.trytako.com/*',
        'https://www.trytako.com/oembed/',
        false
    );
}

add_action('init', '_tako_register_oembed_provider')

?>