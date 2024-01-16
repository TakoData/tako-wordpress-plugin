<?php
/**
 * Plugin Name: Tako Data Visualization
 * Plugin URI:  https://github.com/TakoData/tako-wordpress-plugin
 * Description: The Tako Data Visualization plugin allows users to embed responsive data-driven visualizations from https://www.trytako.com.
 * Version:     1.0
 * License:     GPLv3
 */
 namespace tako;

function register_oembed_provider() {
    // https://developer.wordpress.org/reference/functions/wp_oembed_add_provider/
    wp_oembed_add_provider(
        'https://trytako.com/*',
        'https://trytako.com/oembed/',
        false
    );
    wp_oembed_add_provider(
        'https://www.trytako.com/*',
        'https://www.trytako.com/oembed/',
        false
    );
}

add_action('init', __NAMESPACE__ . '\\register_oembed_provider')

?>