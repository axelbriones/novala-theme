# Changelog

All notable changes to this project will be documented in this file.

## [1.0.0] - 2026-06-17

### Added
- Complete Novara Theme Settings V2 ACF Options Dashboard with 14 functional tabs.
- Full ACF dynamic integration for 12 custom page templates.
- WooCommerce dynamic template overrides (cart, checkout, my-account) with strict Tailwind styling hooks.
- Helper functions (`novara_get_option`, `novara_get_field`) for safe data retrieval with HTML fallbacks.
- Contact Form 7 support dynamically injected via ACF across all form templates.
- Localized Google Fonts (`fonts.css`).
- Offline, locally compiled Tailwind CSS (`app.min.css`) replacing the CDN.

### Changed
- Refactored `header.php` and `footer.php` to use `wp_nav_menu()` and i18n compliant escaping.
- Updated all templates for rigorous escaping (`esc_html`, `esc_url`, `wp_kses_post`).
- Added accessibility improvements (`aria-label`, `role`, `loading="lazy"`).

### Security
- Verified strict WP data sanitization and output escaping.
- Verified shortcode and plugin dependency fallbacks (CF7, WooCommerce, YITH).
