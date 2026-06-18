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


    // Page: Sustainability
    acf_add_local_field_group(array(
        'key' => 'group_page_sustainability',
        'title' => 'Page Settings: Sustainability',
        'fields' => array(
            array(
                'key' => 'field_sustainability_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_sustainability_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_sustainability_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_sustainability_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_sust_refo_tab',
                'label' => 'Reforestation',
                'type' => 'tab',
            ),
            array('key' => 'field_sust_refo_eyebrow', 'label' => 'Eyebrow', 'name' => 'refo_eyebrow', 'type' => 'text'),
            array('key' => 'field_sust_refo_title', 'label' => 'Title', 'name' => 'refo_title', 'type' => 'text'),
            array('key' => 'field_sust_refo_text_1', 'label' => 'Paragraph 1', 'name' => 'refo_text_1', 'type' => 'textarea', 'new_lines' => 'br'),
            array('key' => 'field_sust_refo_text_2', 'label' => 'Paragraph 2', 'name' => 'refo_text_2', 'type' => 'textarea', 'new_lines' => 'br'),
            array('key' => 'field_sust_refo_image', 'label' => 'Image', 'name' => 'refo_image', 'type' => 'image', 'return_format' => 'url'),

            array(
                'key' => 'field_sust_welfare_tab',
                'label' => 'Bee Welfare',
                'type' => 'tab',
            ),
            array('key' => 'field_sust_welfare_eyebrow', 'label' => 'Eyebrow', 'name' => 'welfare_eyebrow', 'type' => 'text'),
            array('key' => 'field_sust_welfare_title', 'label' => 'Title', 'name' => 'welfare_title', 'type' => 'text'),
            array('key' => 'field_sust_welfare_text', 'label' => 'Intro Text', 'name' => 'welfare_text', 'type' => 'textarea'),
            array('key' => 'field_sust_welfare_image', 'label' => 'Image', 'name' => 'welfare_image', 'type' => 'image', 'return_format' => 'url'),
            array(
                'key' => 'field_sust_welfare_features',
                'label' => 'Features',
                'name' => 'welfare_features',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_sust_wf_icon', 'label' => 'Icon Name', 'name' => 'icon', 'type' => 'text'),
                    array('key' => 'field_sust_wf_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_sust_wf_text', 'label' => 'Text', 'name' => 'text', 'type' => 'textarea'),
                )
            ),

            array(
                'key' => 'field_sust_agro_tab',
                'label' => 'Agroforestry',
                'type' => 'tab',
            ),
            array('key' => 'field_sust_agro_icon', 'label' => 'Icon Name', 'name' => 'agro_icon', 'type' => 'text'),
            array('key' => 'field_sust_agro_title', 'label' => 'Title', 'name' => 'agro_title', 'type' => 'text'),
            array('key' => 'field_sust_agro_text', 'label' => 'Text', 'name' => 'agro_text', 'type' => 'textarea'),
            array('key' => 'field_sust_agro_btn_txt', 'label' => 'Button Text', 'name' => 'agro_button_text', 'type' => 'text'),
            array('key' => 'field_sust_agro_btn_url', 'label' => 'Button Link', 'name' => 'agro_button_link', 'type' => 'url'),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-sustainability.php',
                ),
            ),
        ),
    ));

    // Page: Beekeeping Tour
    acf_add_local_field_group(array(
        'key' => 'group_page_experiential_beekeeping_tour',
        'title' => 'Page Settings: Beekeeping Tour',
        'fields' => array(
            array(
                'key' => 'field_experiential-beekeeping-tour_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_experiential-beekeeping-tour_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_experiential-beekeeping-tour_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_experiential-beekeeping-tour_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_experiential_beekeeping_tour_exp_tab',
                'label' => 'Experience Section',
                'type' => 'tab',
            ),
            array('key' => 'field_tour_exp_title', 'label' => 'Title', 'name' => 'exp_title', 'type' => 'text'),
            array('key' => 'field_tour_exp_text', 'label' => 'Text', 'name' => 'exp_text', 'type' => 'textarea', 'new_lines' => 'wpautop'),
            array('key' => 'field_tour_exp_btn_txt', 'label' => 'Button Text', 'name' => 'exp_button_text', 'type' => 'text'),
            array('key' => 'field_tour_exp_btn_url', 'label' => 'Button Link', 'name' => 'exp_button_url', 'type' => 'url'),

            array(
                'key' => 'field_experiential_beekeeping_tour_hi_tab',
                'label' => 'Highlights Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_tour_highlights_list',
                'label' => 'Highlights List',
                'name' => 'highlights_list',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_tour_hi_icon', 'label' => 'Material Icon', 'name' => 'icon', 'type' => 'text'),
                    array('key' => 'field_tour_hi_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_tour_hi_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea'),
                )
            ),
            array(
                'key' => 'field_experiential_beekeeping_tour_reqs_tab',
                'label' => 'Requirements Section',
                'type' => 'tab',
            ),
            array('key' => 'field_tour_reqs_title', 'label' => 'Title', 'name' => 'reqs_title', 'type' => 'text'),
            array('key' => 'field_tour_reqs_text', 'label' => 'Text', 'name' => 'reqs_text', 'type' => 'textarea'),
            array(
                'key' => 'field_tour_reqs_list',
                'label' => 'Requirements List',
                'name' => 'reqs_list',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_tour_req_item', 'label' => 'Item', 'name' => 'item', 'type' => 'text'),
                )
            ),
            array('key' => 'field_tour_rental_title', 'label' => 'Rental Title', 'name' => 'rental_title', 'type' => 'text'),
            array('key' => 'field_tour_rental_text', 'label' => 'Rental Text', 'name' => 'rental_text', 'type' => 'textarea'),
            array(
                'key' => 'field_experiential_beekeeping_tour_pricing_tab',
                'label' => 'Pricing Section',
                'type' => 'tab',
            ),
            array('key' => 'field_tour_details_title', 'label' => 'Details Title', 'name' => 'details_title', 'type' => 'text'),
            array(
                'key' => 'field_tour_details_list',
                'label' => 'Details List',
                'name' => 'details_list',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_tour_det_icon', 'label' => 'Material Icon', 'name' => 'icon', 'type' => 'text'),
                    array('key' => 'field_tour_det_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text'),
                    array('key' => 'field_tour_det_value', 'label' => 'Value', 'name' => 'value', 'type' => 'text'),
                )
            ),
            array('key' => 'field_tour_pricing_title', 'label' => 'Pricing Title', 'name' => 'pricing_title', 'type' => 'text'),
            array(
                'key' => 'field_tour_pricing_tiers',
                'label' => 'Pricing Tiers',
                'name' => 'pricing_tiers',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_tour_tier', 'label' => 'Tier (e.g. 1 Person)', 'name' => 'tier', 'type' => 'text'),
                    array('key' => 'field_tour_price', 'label' => 'Price (e.g. KES 3,000)', 'name' => 'price', 'type' => 'text'),
                )
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-experiential-beekeeping-tour.php',
                ),
            ),
        ),
    ));

    // Page: Education
    acf_add_local_field_group(array(
        'key' => 'group_page_education',
        'title' => 'Page Settings: Education',
        'fields' => array(
            array(
                'key' => 'field_education_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_education_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_education_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_education_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_education_courses_tab',
                'label' => 'Courses Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_education_courses_list',
                'label' => 'Courses List',
                'name' => 'courses_list',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_education_course_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url'),
                    array('key' => 'field_education_course_badge', 'label' => 'Badge Text (In-person/Virtual)', 'name' => 'badge', 'type' => 'text'),
                    array('key' => 'field_education_course_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_education_course_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea'),
                    array('key' => 'field_education_course_date', 'label' => 'Date String', 'name' => 'date', 'type' => 'text'),
                    array('key' => 'field_education_course_price', 'label' => 'Price String', 'name' => 'price', 'type' => 'text'),
                    array('key' => 'field_education_course_inq_url', 'label' => 'Inquire URL', 'name' => 'inquire_link', 'type' => 'url'),
                    array('key' => 'field_education_course_more_url', 'label' => 'Learn More URL', 'name' => 'learn_more_link', 'type' => 'url'),
                )
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-education.php',
                ),
            ),
        ),
    ));

    // Page: Open Innovation
    acf_add_local_field_group(array(
        'key' => 'group_page_open_innovation',
        'title' => 'Page Settings: Open Innovation',
        'fields' => array(
            array(
                'key' => 'field_open-innovation_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_open-innovation_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_open-innovation_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_open-innovation_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_open-innovation_intro_tab',
                'label' => 'Intro Section',
                'type' => 'tab',
            ),
            array('key' => 'field_open_inn_intro_title', 'label' => 'Intro Title', 'name' => 'intro_title', 'type' => 'text'),
            array('key' => 'field_open_inn_intro_text', 'label' => 'Intro Text', 'name' => 'intro_text', 'type' => 'textarea', 'new_lines' => 'br'),
            array('key' => 'field_open_inn_promise_icon', 'label' => 'Promise Material Icon', 'name' => 'promise_icon', 'type' => 'text'),
            array('key' => 'field_open_inn_promise_title', 'label' => 'Promise Title', 'name' => 'promise_title', 'type' => 'text'),
            array('key' => 'field_open_inn_promise_text', 'label' => 'Promise Text', 'name' => 'promise_text', 'type' => 'textarea'),
            array(
                'key' => 'field_open_inn_form_tab',
                'label' => 'Form Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_open_inn_cf7_shortcode',
                'label' => 'Contact Form 7 Shortcode',
                'name' => 'cf7_shortcode',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-open-innovation.php',
                ),
            ),
        ),
    ));

    // Page: Influencer Program
    acf_add_local_field_group(array(
        'key' => 'group_page_influencer_program',
        'title' => 'Page Settings: Influencer Program',
        'fields' => array(
            array(
                'key' => 'field_influencer-program_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_influencer-program_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_influencer-program_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_influencer-program_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_influencer_hero_badge',
                'label' => 'Hero Badge Text',
                'name' => 'hero_badge',
                'type' => 'text',
            ),
            array(
                'key' => 'field_influencer_perks_tab',
                'label' => 'Perks Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_influencer_perks_list',
                'label' => 'Perks List',
                'name' => 'perks_list',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_influencer_perk_icon', 'label' => 'Material Icon', 'name' => 'icon', 'type' => 'text'),
                    array('key' => 'field_influencer_perk_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_influencer_perk_text', 'label' => 'Text', 'name' => 'text', 'type' => 'textarea'),
                )
            ),
            array(
                'key' => 'field_influencer_cta_tab',
                'label' => 'CTA Section',
                'type' => 'tab',
            ),
            array('key' => 'field_inf_cta_icon', 'label' => 'CTA Icon', 'name' => 'cta_icon', 'type' => 'text'),
            array('key' => 'field_inf_cta_title', 'label' => 'CTA Title', 'name' => 'cta_title', 'type' => 'text'),
            array('key' => 'field_inf_cta_text', 'label' => 'CTA Text', 'name' => 'cta_text', 'type' => 'textarea', 'new_lines' => 'br'),
            array('key' => 'field_inf_cta_btn_text', 'label' => 'CTA Button Text', 'name' => 'cta_btn_text', 'type' => 'text'),
            array('key' => 'field_inf_cta_btn_url', 'label' => 'CTA Button URL', 'name' => 'cta_btn_url', 'type' => 'url'),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-influencer-program.php',
                ),
            ),
        ),
    ));

    // Page: Become a Stockist
    acf_add_local_field_group(array(
        'key' => 'group_page_become_stockist',
        'title' => 'Page Settings: Become a Stockist',
        'fields' => array(
            array(
                'key' => 'field_become-stockist_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_become-stockist_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_become-stockist_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_become-stockist_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_become-stockist_benefits_tab',
                'label' => 'Benefits Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_become-stockist_benefits_title',
                'label' => 'Benefits Title',
                'name' => 'benefits_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_become-stockist_benefits_list',
                'label' => 'Benefits List',
                'name' => 'benefits_list',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_become-stockist_benefit_icon', 'label' => 'Material Icon Name', 'name' => 'icon', 'type' => 'text'),
                    array('key' => 'field_become-stockist_benefit_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_become-stockist_benefit_text', 'label' => 'Description', 'name' => 'text', 'type' => 'textarea'),
                )
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-become-stockist.php',
                ),
            ),
        ),
    ));

    // Page: Become a Supplier
    acf_add_local_field_group(array(
        'key' => 'group_page_become_supplier',
        'title' => 'Page Settings: Become a Supplier',
        'fields' => array(
            array(
                'key' => 'field_become-supplier_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_become-supplier_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_become-supplier_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_become-supplier_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_become-supplier_vp_tab',
                'label' => 'Value Proposition',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_become-supplier_vp_title',
                'label' => 'Title',
                'name' => 'vp_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_become-supplier_vp_text',
                'label' => 'Text',
                'name' => 'vp_text',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_become-supplier_vp_list',
                'label' => 'Features List',
                'name' => 'vp_list',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_become-supplier_vp_icon', 'label' => 'Material Icon', 'name' => 'icon', 'type' => 'text'),
                    array('key' => 'field_become-supplier_vp_title_sub', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_become-supplier_vp_text_sub', 'label' => 'Description', 'name' => 'text', 'type' => 'textarea'),
                )
            ),
            array(
                'key' => 'field_become-supplier_vp_btn',
                'label' => 'Button Text',
                'name' => 'vp_button_text',
                'type' => 'text',
            ),
            array(
                'key' => 'field_become-supplier_vp_image',
                'label' => 'Image',
                'name' => 'vp_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_become-supplier_form_tab',
                'label' => 'Form Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_become-supplier_form_title',
                'label' => 'Form Title',
                'name' => 'form_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_become-supplier_form_subtitle',
                'label' => 'Form Subtitle',
                'name' => 'form_subtitle',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_become_supplier_cf7_shortcode',
                'label' => 'Contact Form 7 Shortcode',
                'name' => 'cf7_shortcode',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-become-supplier.php',
                ),
            ),
        ),
    ));

    // Page: Food Service Partners
    acf_add_local_field_group(array(
        'key' => 'group_page_food_service_partners',
        'title' => 'Page Settings: Food Service Partners',
        'fields' => array(
            array(
                'key' => 'field_food-service-partners_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_food-service-partners_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_food-service-partners_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_food-service-partners_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_food_service_vp_tab',
                'label' => 'Value Proposition',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_food_service_vp_title',
                'label' => 'VP Title',
                'name' => 'vp_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_food_service_vp_text',
                'label' => 'VP Text',
                'name' => 'vp_text',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_food_service_vp_list',
                'label' => 'Features List',
                'name' => 'vp_list',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_food_service_vp_icon', 'label' => 'Material Icon', 'name' => 'icon', 'type' => 'text'),
                    array('key' => 'field_food_service_vp_title_sub', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_food_service_vp_text_sub', 'label' => 'Text', 'name' => 'text', 'type' => 'textarea'),
                )
            ),
            array(
                'key' => 'field_food_service_vp_image',
                'label' => 'Image',
                'name' => 'vp_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_food_service_benefits_tab',
                'label' => 'Benefits Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_food_service_benefits_title',
                'label' => 'Benefits Title',
                'name' => 'benefits_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_food_service_benefits_list',
                'label' => 'Benefits List',
                'name' => 'benefits_list',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_food_service_benefit_icon', 'label' => 'Material Icon', 'name' => 'icon', 'type' => 'text'),
                    array('key' => 'field_food_service_benefit_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_food_service_benefit_text', 'label' => 'Text', 'name' => 'text', 'type' => 'textarea'),
                )
            ),
            array(
                'key' => 'field_food_service_form_tab',
                'label' => 'Form Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_food_service_form_title',
                'label' => 'Form Title',
                'name' => 'form_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_food_service_form_subtitle',
                'label' => 'Form Subtitle',
                'name' => 'form_subtitle',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_food_service_cf7_shortcode',
                'label' => 'Contact Form 7 Shortcode',
                'name' => 'cf7_shortcode',
                'type' => 'text',
                'instructions' => 'Paste the shortcode here, e.g., [contact-form-7 id="123" title="Partner Form"]',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-food-service-partners.php',
                ),
            ),
        ),
    ));

    // Page: Contract Bee Farmer
    acf_add_local_field_group(array(
        'key' => 'group_page_contract_bee_farmer',
        'title' => 'Page Settings: Contract Bee Farmer',
        'fields' => array(
            array(
                'key' => 'field_contract-bee-farmer_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_contract-bee-farmer_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contract-bee-farmer_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_contract-bee-farmer_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_contract_hero_badge',
                'label' => 'Hero Badge Text',
                'name' => 'hero_badge',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contract_hero_btn1_text',
                'label' => 'Hero Button 1 Text',
                'name' => 'hero_btn1_text',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contract_hero_btn1_url',
                'label' => 'Hero Button 1 URL',
                'name' => 'hero_btn1_url',
                'type' => 'url',
            ),
            array(
                'key' => 'field_contract_hero_btn2_text',
                'label' => 'Hero Button 2 Text',
                'name' => 'hero_btn2_text',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contract_hero_btn2_url',
                'label' => 'Hero Button 2 URL',
                'name' => 'hero_btn2_url',
                'type' => 'url',
            ),
            array(
                'key' => 'field_contract_vp_tab',
                'label' => 'Value Proposition',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_contract_vp_title',
                'label' => 'VP Title',
                'name' => 'vp_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contract_vp_text',
                'label' => 'VP Text',
                'name' => 'vp_text',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_contract_vp_list',
                'label' => 'VP List',
                'name' => 'vp_list',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_contract_vp_icon', 'label' => 'Icon Name', 'name' => 'icon', 'type' => 'text'),
                    array('key' => 'field_contract_vp_title_sub', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_contract_vp_text_sub', 'label' => 'Text', 'name' => 'text', 'type' => 'textarea'),
                )
            ),
            array(
                'key' => 'field_contract_form_tab',
                'label' => 'Form Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_contract_cf7_shortcode',
                'label' => 'Contact Form 7 Shortcode',
                'name' => 'cf7_shortcode',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-contract-bee-farmer.php',
                ),
            ),
        ),
    ));

    // Page: Contact
    acf_add_local_field_group(array(
        'key' => 'group_page_contact',
        'title' => 'Page Settings: Contact',
        'fields' => array(
            array(
                'key' => 'field_contact_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_contact_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_contact_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_contact_info_tab',
                'label' => 'Contact Information',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_contact_info_list',
                'label' => 'Info Blocks',
                'name' => 'contact_info_list',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_contact_info_icon', 'label' => 'Material Icon', 'name' => 'icon', 'type' => 'text'),
                    array('key' => 'field_contact_info_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_contact_info_details', 'label' => 'Details (HTML allowed for links/breaks)', 'name' => 'details', 'type' => 'textarea', 'new_lines' => 'br'),
                )
            ),
            array(
                'key' => 'field_contact_map_image',
                'label' => 'Map Image Placeholder',
                'name' => 'map_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_contact_form_tab',
                'label' => 'Contact Form',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_contact_form_title',
                'label' => 'Form Title',
                'name' => 'form_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_cf7_shortcode',
                'label' => 'Contact Form 7 Shortcode',
                'name' => 'cf7_shortcode',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-contact.php',
                ),
            ),
        ),
    ));


    // Page: Wishlist
    acf_add_local_field_group(array(
        'key' => 'group_page_wishlist',
        'title' => 'Page Settings: Wishlist',
        'fields' => array(
            array(
                'key' => 'field_wishlist_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_wishlist_hero_title',
                'label' => 'Title',
                'name' => 'hero_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_wishlist_hero_subtitle',
                'label' => 'Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_wishlist_demo_tab',
                'label' => 'Demo Wishlist Grid',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_wishlist_demo_items',
                'label' => 'Demo Items (Used if YITH Wishlist is not active)',
                'name' => 'wishlist_demo_items',
                'type' => 'repeater',
                'sub_fields' => array(
                    array('key' => 'field_wl_demo_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url'),
                    array('key' => 'field_wl_demo_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_wl_demo_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text'),
                    array('key' => 'field_wl_demo_badge', 'label' => 'Badge (Optional)', 'name' => 'badge', 'type' => 'text'),
                )
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-wishlist.php',
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
    wp_enqueue_style('google-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap', array(), null);
            }
add_action('wp_enqueue_scripts', 'novara_enqueue_assets');
