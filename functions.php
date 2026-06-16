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

    // Register Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'novara'),
        'footer_about' => __('Footer About Us Menu', 'novara'),
        'footer_partner' => __('Footer Partner Menu', 'novara'),
        'footer_legal' => __('Footer Legal Menu', 'novara')
    ));
    add_theme_support('woocommerce');
    add_theme_support('post-thumbnails');
    // Add support for add_a_class to wp_nav_menu
    add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
        if (isset($args->add_a_class)) {
            $atts['class'] = $args->add_a_class;
        }
        return $atts;
    }, 1, 3);

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
        'page_title'    => 'Novara Theme Settings V2',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_theme_options',
        'redirect'      => false,
        'icon_url'      => 'dashicons-admin-customizer',
        'position'      => 59
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

    // Novara Theme Settings V2
    acf_add_local_field_group(array(
        'key' => 'group_novara_theme_settings_v2',
        'title' => 'Novara Theme Settings V2',
        'fields' => array(
            // 1. BRAND IDENTITY
            array('key' => 'tab_brand', 'label' => '1. Brand Identity', 'type' => 'tab'),
            array('key' => 'field_brand_name', 'label' => 'Brand Name', 'name' => 'brand_name', 'type' => 'text'),
            array('key' => 'field_brand_logo', 'label' => 'Logo Color', 'name' => 'brand_logo', 'type' => 'image', 'return_format' => 'url'),
            array('key' => 'field_brand_logo_white', 'label' => 'Logo Blanco', 'name' => 'brand_logo_white', 'type' => 'image', 'return_format' => 'url'),

            // 2. HEADER SETTINGS
            array('key' => 'tab_header', 'label' => '2. Header Settings', 'type' => 'tab'),
            array('key' => 'field_header_promo', 'label' => 'Promo Text', 'name' => 'header_promo_text', 'type' => 'text'),
            array('key' => 'field_enable_cart_icon', 'label' => 'Enable Cart Icon', 'name' => 'enable_cart_icon', 'type' => 'true_false', 'default_value' => 1, 'ui' => 1),
            array('key' => 'field_enable_search', 'label' => 'Enable Search', 'name' => 'enable_search', 'type' => 'true_false', 'default_value' => 1, 'ui' => 1),

            // 3. SOCIAL NETWORKS
            array('key' => 'tab_social', 'label' => '3. Social Networks', 'type' => 'tab'),
            array('key' => 'field_social_facebook', 'label' => 'Facebook URL', 'name' => 'social_facebook', 'type' => 'url'),
            array('key' => 'field_social_instagram', 'label' => 'Instagram URL', 'name' => 'social_instagram', 'type' => 'url'),
            array('key' => 'field_social_twitter', 'label' => 'Twitter URL', 'name' => 'social_twitter', 'type' => 'url'),
            array('key' => 'field_social_tiktok', 'label' => 'TikTok URL', 'name' => 'social_tiktok', 'type' => 'url'),
            array('key' => 'field_social_whatsapp', 'label' => 'WhatsApp Number', 'name' => 'social_whatsapp', 'type' => 'text'),

            // 4. FOOTER CONFIGURATION
            array('key' => 'tab_footer', 'label' => '4. Footer Configuration', 'type' => 'tab'),
            array('key' => 'field_footer_text', 'label' => 'Footer Text', 'name' => 'footer_text', 'type' => 'textarea'),
            array('key' => 'field_footer_cert', 'label' => 'Certification Logo', 'name' => 'footer_certification_logo', 'type' => 'image', 'return_format' => 'url'),
            array('key' => 'field_footer_copy', 'label' => 'Copyright Text', 'name' => 'footer_copyright', 'type' => 'text'),

            // 5. COMPANY INFO
            array('key' => 'tab_company', 'label' => '5. Company Info', 'type' => 'tab'),
            array('key' => 'field_contact_address', 'label' => 'Address', 'name' => 'contact_address', 'type' => 'textarea'),
            array('key' => 'field_contact_email', 'label' => 'Email', 'name' => 'contact_email', 'type' => 'email'),
            array('key' => 'field_contact_phone', 'label' => 'Phone', 'name' => 'contact_phone', 'type' => 'text'),

            // 6. SEO & METADATA
            array('key' => 'tab_seo', 'label' => '6. SEO & Metadata', 'type' => 'tab'),
            array('key' => 'field_seo_title_suffix', 'label' => 'Global Title Suffix', 'name' => 'seo_title_suffix', 'type' => 'text'),

            // 7. ANALYTICS & TRACKING
            array('key' => 'tab_analytics', 'label' => '7. Analytics & Tracking', 'type' => 'tab'),
            array('key' => 'field_tracking_gtm', 'label' => 'GTM ID', 'name' => 'tracking_gtm', 'type' => 'text'),

            // 8. ECOMMERCE SETTINGS
            array('key' => 'tab_ecommerce', 'label' => '8. eCommerce Settings', 'type' => 'tab'),
            array('key' => 'field_woo_empty_cart', 'label' => 'Empty Cart Message', 'name' => 'woo_empty_cart_text', 'type' => 'text'),

            // 9. API INTEGRATIONS
            array('key' => 'tab_api', 'label' => '9. API Integrations', 'type' => 'tab'),
            array('key' => 'field_api_google_maps', 'label' => 'Google Maps API Key', 'name' => 'api_google_maps', 'type' => 'text'),

            // 10. TYPOGRAPHY & COLORS
            array('key' => 'tab_styling', 'label' => '10. Typography & Colors', 'type' => 'tab'),
            array('key' => 'field_style_primary_color', 'label' => 'Primary Color', 'name' => 'style_primary_color', 'type' => 'color_picker'),

            // 11. B2B & QUOTEFLOW
            array('key' => 'tab_b2b', 'label' => '11. B2B & QuoteFlow', 'type' => 'tab'),
            array('key' => 'field_b2b_portal_url', 'label' => 'Portal URL', 'name' => 'b2b_portal_url', 'type' => 'url'),

            // 12. PERFORMANCE
            array('key' => 'tab_performance', 'label' => '12. Performance', 'type' => 'tab'),
            array('key' => 'field_perf_cdn_url', 'label' => 'CDN URL', 'name' => 'perf_cdn_url', 'type' => 'url'),

            // 13. EMAIL TEMPLATES
            array('key' => 'tab_emails', 'label' => '13. Email Templates', 'type' => 'tab'),
            array('key' => 'field_email_footer', 'label' => 'Email Footer Text', 'name' => 'email_footer_text', 'type' => 'textarea'),

            // 14. GLOBAL REUSABLE CONTENT
            array('key' => 'tab_global', 'label' => '14. Global Content', 'type' => 'tab'),
            array('key' => 'field_global_notice', 'label' => 'Global Notice Banner', 'name' => 'global_notice_banner', 'type' => 'text'),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-settings',
                ),
            ),
        ),
    ));
// Page: Our Story
    acf_add_local_field_group(array(
        'key' => 'group_page_our_story',
        'title' => 'Page Settings: Our Story',
        'fields' => array(
            array(
                'key' => 'field_os_hero_tab',
                'label' => 'Hero',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_os_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_os_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_os_intro_tab',
                'label' => 'Introduction',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_os_intro_title',
                'label' => 'Intro Title',
                'name' => 'intro_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_os_intro_text',
                'label' => 'Intro Text',
                'name' => 'intro_text',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_os_impact_tab',
                'label' => 'Impact Grid',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_os_impact_title',
                'label' => 'Impact Title',
                'name' => 'impact_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_os_impact_items',
                'label' => 'Impact Items',
                'name' => 'impact_items',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_os_impact_icon',
                        'label' => 'Material Icon Name',
                        'name' => 'icon',
                        'type' => 'text',
                        'default_value' => 'group',
                    ),
                    array(
                        'key' => 'field_os_impact_item_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_os_impact_item_text',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                    ),
                ),
            ),
            array(
                'key' => 'field_os_mission_tab',
                'label' => 'Mission & Vision',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_os_mission_text',
                'label' => 'Mission Text',
                'name' => 'mission_text',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_os_vision_text',
                'label' => 'Vision Text',
                'name' => 'vision_text',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_os_values_tab',
                'label' => 'Core Values',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_os_values_title',
                'label' => 'Values Title',
                'name' => 'values_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_os_core_values',
                'label' => 'Values Items',
                'name' => 'core_values',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_os_value_icon',
                        'label' => 'Material Icon Name',
                        'name' => 'icon',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_os_value_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-our-story.php',
                ),
            ),
        ),
    ));

endif;

// Enqueue styles and scripts
function novara_enqueue_assets() {
    wp_enqueue_style('novara-tailwind', get_template_directory_uri() . '/assets/css/app.min.css', array(), '1.0.0');
    wp_enqueue_style('novara-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0');
    wp_enqueue_style('novara-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), '1.0.0');
            }
add_action('wp_enqueue_scripts', 'novara_enqueue_assets');
