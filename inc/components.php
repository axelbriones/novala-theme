<?php
/**
 * Component Rendering Engine
 * Handles the rendering of reusable ACF components.
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Render an ACF Flexible Content Component
 *
 * @param string $component_name The name of the layout/component (e.g., 'hero')
 * @param array $args Data to pass to the component.
 */
function novara_render_component($component_name, $args = []) {
    $file_path = get_template_directory() . '/components/' . $component_name . '.php';

    if (file_exists($file_path)) {
        // Extract arguments so they are available as variables in the component
        extract($args);

        // Output caching could be added here in Phase 4
        include $file_path;
    } else {
        if (WP_DEBUG) {
            echo '<!-- Component not found: ' . esc_html($component_name) . ' -->';
        }
    }
}

/**
 * Loop through and render global ACF flexible content fields.
 *
 * @param string $field_name The flexible content field name.
 * @param string|int $post_id The post ID or 'option'.
 */
function novara_render_acf_components($field_name = 'global_components', $post_id = 'option') {
    if (function_exists('have_rows') && have_rows($field_name, $post_id)) {
        while (have_rows($field_name, $post_id)) {
            the_row();
            $layout = get_row_layout();

            // Remove 'layout_' prefix to get component name
            $component_name = str_replace('layout_', '', $layout);

            // Pass the current row data as arguments
            $args = get_row(true);

            novara_render_component($component_name, $args);
        }
    }
}
