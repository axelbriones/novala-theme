<?php
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
function novara_get_field($field, $fallback = '', $post_id = 'option') {
    if (function_exists('get_field')) {
        $val = get_field($field, $post_id);
        if (!empty($val)) {
            return $val;
        }
    }
    return $fallback;
}

/**
 * Get ACF Sub Field with Fallback (for inside loops)
 */
function novara_get_sub_field($field, $fallback = '') {
    if (function_exists('get_sub_field')) {
        $val = get_sub_field($field);
        if (!empty($val)) {
            return $val;
        }
    }
    return $fallback;
}
