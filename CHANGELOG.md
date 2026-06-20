# Changelog

All notable changes to this project will be documented in this file.

## [1.0.0-RC2] - 2026-06-17

### Added
- Added `ABSPATH` direct access prevention to all core PHP templates.
- Wrapped all `functions.php` and `helpers.php` core logic in `!function_exists()` to support Child Themes seamlessly.
- Added `fetchpriority="high"` to LCP Hero Images for Lighthouse optimization.
- Added `decoding="async"` to lazy-loaded images to unblock the main thread.

### Changed
- Refactored `README.md` to clarify installation and Demo Import instructions for production clients.

### Removed
- Moved all development files (`package.json`, `package-lock.json`, `tailwind.config.js`, `input.css`) out of the root directory and into `/dev/` to ensure a pristine ZIP payload.

## [1.0.0-RC1] - 2026-06-17

### Added
- Complete Novara Theme Settings V2 ACF Options Dashboard with 14 functional tabs.
- Full ACF dynamic integration for 12 custom page templates.
- WooCommerce dynamic template overrides (cart, checkout, my-account) with strict Tailwind styling hooks.
- Helper functions (`novara_get_option`, `novara_get_field`) for safe data retrieval with HTML fallbacks.
- Contact Form 7 support dynamically injected via ACF across all form templates.
- Localized Google Fonts (`fonts.css`).
- Offline, locally compiled Tailwind CSS (`app.min.css`) replacing the CDN.

### Security
- Verified strict WP data sanitization and output escaping.
