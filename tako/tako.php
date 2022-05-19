<?php
/**
 * Plugin Name: Tako Wordpress
 * Version:     0.1
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