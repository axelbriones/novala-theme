# Novara - Premium WooCommerce Theme

Custom WooCommerce Theme developed exclusively for Novala Bee Works.

## Overview
Novara is a highly optimized, artisanal e-commerce theme built on a modern stack. It features a complete decoupling of data via Advanced Custom Fields (ACF) and a localized, zero-CDN Tailwind CSS implementation for maximum PageSpeed performance.

## Release Candidate 2 (RC2)
This theme has passed rigorous QA auditing and WordPress Coding Standards:
- **Child Theme Ready:** All core functions are wrapped in `!function_exists()` checks.
- **Security:** Strict use of `esc_html`, `esc_url`, and `wp_kses_post`. All core PHP files verify `ABSPATH` to prevent direct access.
- **Performance:** 100% compiled CSS. Zero external CDNs. `loading="lazy"` + `decoding="async"` on all off-screen images. Hero images utilize `fetchpriority="high"`.
- **Accessibility:** Interactive elements are labeled with `aria-label` and `role="button"`.
- **Fallbacks:** The theme survives missing plugins (WooCommerce, CF7, YITH) natively without fatal errors.

## Installation & Import Demo
1. Ensure your WordPress installation has **Advanced Custom Fields PRO**, **WooCommerce**, and **Contact Form 7** activated.
2. Upload the `novara-theme.zip` (which excludes all `/dev/` files) via WP Admin > Appearance > Themes.
3. Activate the theme.
4. Navigate to `Theme Settings` in the WP Admin sidebar to configure global options (Logos, Socials, Legal, etc.).
5. Set up your static homepage via Settings > Reading.

## Development
To modify Tailwind CSS:
1. Navigate to the `/dev` folder.
2. Run `npm install`.
3. Run `npx tailwindcss -i ./input.css -o ../assets/css/app.min.css --watch`.

## Architecture
- `functions.php`: Handles programmatic ACF registration, Theme Settings, menus, and script enqueueing.
- `inc/helpers.php`: Contains `novara_get_option()` and `novara_get_field()` for safe, escaped data retrieval.
- `assets/css/app.min.css`: The compiled payload of all theme styles.

## Version
1.0.0

## Author
Byron Briones
