# Novara - Premium WooCommerce Theme

Custom WooCommerce Theme developed exclusively for Novala Bee Works.

## Overview
Novara is a highly optimized, artisanal e-commerce theme built on a modern stack. It features a complete decoupling of data via Advanced Custom Fields (ACF) and a localized, zero-CDN Tailwind CSS implementation for maximum PageSpeed performance.

## Core Features
- **Strict Visual Design:** Pure Tailwind CSS (compiled via CLI).
- **100% Dynamic:** All 12 landing templates and WooCommerce flows are managed via ACF.
- **Performance First:** No inline styles, no CDNs, lazy-loaded images, and localized typography.
- **Graceful Fallbacks:** If a plugin (WooCommerce, CF7, YITH) or ACF field is missing, the theme falls back to its pristine static HTML mockups seamlessly.

## Installation
1. Install and activate Advanced Custom Fields PRO.
2. Install and activate WooCommerce and Contact Form 7.
3. Upload the Novara theme folder to `wp-content/themes/`.
4. Activate the theme via WP Admin > Appearance > Themes.

## Development
To compile Tailwind CSS during development:
\`\`\`bash
npm install
npx tailwindcss -i ./assets/css/input.css -o ./assets/css/app.min.css --watch
\`\`\`

## Architecture
- `functions.php`: Handles programmatic ACF registration, Theme Settings, menus, and script enqueueing.
- `inc/helpers.php`: Contains `novara_get_option()` and `novara_get_field()` for safe, escaped data retrieval.
- `assets/css/app.min.css`: The compiled payload of all theme styles.

## Version
1.0.0

## Author
Byron Briones (https://github.com/axelbriones)
