<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Helper Functions
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Get ACF Field with Fallback
 *
 * @param string $field The field name.
 * @param mixed $fallback The fallback value.
 * @param string $post_id Post ID or 'option'.
 * @return mixed
 */
if (!function_exists('novara_get_field')) {
function novara_get_field($field, $fallback = '', $post_id = false) {
    if (function_exists('get_field')) {
        $val = get_field($field, $post_id);
        if (!empty($val)) {
            return $val;
        }
    }
    return $fallback;
}
}

/**
 * Get Global Theme Option (ACF Options Page)
 *
 * @param string $key The option field name.
 * @param mixed $default Fallback value if empty or ACF is missing.
 * @return mixed
 */
if (!function_exists('novara_get_option')) {
function novara_get_option($key, $default = '') {
    if (function_exists('get_field')) {
        $val = get_field($key, 'option');
        if (!empty($val)) {
            return $val;
        }
    }
    return $default;
}
}

/**
 * Get ACF Sub Field with Fallback (for inside loops)
 */
if (!function_exists('novara_get_sub_field')) {
function novara_get_sub_field($field, $fallback = '') {
    if (function_exists('get_sub_field')) {
        $val = get_sub_field($field);
        if (!empty($val)) {
            return $val;
        }
    }
    return $fallback;
}
}
