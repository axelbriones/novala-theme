<?php

defined('ABSPATH') || exit;

define('NOVARA_VERSION', '1.0.0');
define('NOVARA_THEME_DIR', get_template_directory());
define('NOVARA_THEME_URI', get_template_directory_uri());

function novara_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'novara_theme_setup');
