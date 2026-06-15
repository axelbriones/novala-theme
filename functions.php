<?php

defined('ABSPATH') || exit;

define('NOVARA_VERSION', '1.0.0');
define('NOVARA_THEME_DIR', get_template_directory());
define('NOVARA_THEME_URI', get_template_directory_uri());

// Include Core Architecture
require_once NOVARA_THEME_DIR . '/inc/helpers.php';
require_once NOVARA_THEME_DIR . '/inc/components.php';

// Add Tailwind classes to WooCommerce checkout fields
function novara_wc_checkout_fields_styling( $fields ) {
    $tailwind_input_classes = array('w-full', 'bg-surface-container-lowest', 'border', 'border-outline-variant', 'text-on-surface', 'font-body-md', 'text-body-md', 'px-4', 'py-3', 'rounded-DEFAULT', 'transition-colors', 'duration-200', 'focus:outline-none', 'focus:border-primary', 'focus:ring-1', 'focus:ring-primary');

    foreach ( $fields as $fieldset_key => $fieldset ) {
        foreach ( $fieldset as $field_key => $field ) {
            // Label classes
            $fields[ $fieldset_key ][ $field_key ]['label_class'] = array('block', 'font-label-md', 'text-label-md', 'text-on-surface-variant', 'mb-2');

            // Input classes
            $fields[ $fieldset_key ][ $field_key ]['input_class'] = $tailwind_input_classes;

            // Field wrapper (p tag) classes
            $fields[ $fieldset_key ][ $field_key ]['class'][] = 'mb-6';
        }
    }
    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'novara_wc_checkout_fields_styling', 9999 );

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

// ACF Options Page Registration
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Components',
        'menu_title'    => 'Theme Components',
        'menu_slug'     => 'theme-components',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

// Ensure ACF JSON saves to a directory in our theme
function novara_acf_json_save_point($path) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}
add_filter('acf/settings/save_json', 'novara_acf_json_save_point');

function novara_acf_json_load_point($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}
add_filter('acf/settings/load_json', 'novara_acf_json_load_point');

// Programmatic ACF Field Registrations
if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key' => 'group_contact_info',
        'title' => 'Global Contact Info',
        'fields' => array(
            array(
                'key' => 'field_contact_address',
                'label' => 'Address',
                'name' => 'contact_address',
                'type' => 'textarea',
                'instructions' => 'Global address used in footer and contact page.',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_contact_email',
                'label' => 'Email',
                'name' => 'contact_email',
                'type' => 'email',
            ),
            array(
                'key' => 'field_contact_phone',
                'label' => 'Phone',
                'name' => 'contact_phone',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-components',
                ),
            ),
        ),
    ));

    acf_add_local_field_group(array(
        'key' => 'group_social_links',
        'title' => 'Social Links',
        'fields' => array(
            array(
                'key' => 'field_social_facebook',
                'label' => 'Facebook URL',
                'name' => 'social_facebook',
                'type' => 'url',
            ),
            array(
                'key' => 'field_social_instagram',
                'label' => 'Instagram URL',
                'name' => 'social_instagram',
                'type' => 'url',
            ),
            array(
                'key' => 'field_social_twitter',
                'label' => 'Twitter/X URL',
                'name' => 'social_twitter',
                'type' => 'url',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-components',
                ),
            ),
        ),
    ));

    // Global ACF Flexible Content for Components
    acf_add_local_field_group(array(
        'key' => 'group_global_components',
        'title' => 'Global Reusable Components',
        'fields' => array(
            array(
                'key' => 'field_global_components_flex',
                'label' => 'Components',
                'name' => 'global_components',
                'type' => 'flexible_content',
                'instructions' => 'Add components here that you want to reuse across multiple pages via shortcode or function.',
                'button_label' => 'Add Component',
                'layouts' => array(
                    'layout_hero' => array(
                        'key' => 'layout_hero',
                        'name' => 'hero',
                        'label' => 'Hero Section',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_hero_title',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'text',
                            ),
                            array(
                                'key' => 'field_hero_subtitle',
                                'label' => 'Subtitle',
                                'name' => 'subtitle',
                                'type' => 'textarea',
                            ),
                            array(
                                'key' => 'field_hero_image',
                                'label' => 'Background Image',
                                'name' => 'image',
                                'type' => 'image',
                                'return_format' => 'url',
                            ),
                        ),
                    ),
                    'layout_cta' => array(
                        'key' => 'layout_cta',
                        'name' => 'cta',
                        'label' => 'Call to Action',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_cta_title',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'text',
                            ),
                            array(
                                'key' => 'field_cta_text',
                                'label' => 'Text',
                                'name' => 'text',
                                'type' => 'textarea',
                            ),
                            array(
                                'key' => 'field_cta_link',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'link',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-components',
                ),
            ),
        ),
    ));

endif;
