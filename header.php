<!DOCTYPE html>
<html class="light" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&amp;family=Playfair+Display:wght@600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                "on-error-container": "#93000a",
                "on-tertiary-fixed-variant": "#49473e",
                "surface-container-low": "#f6f3f2",
                "primary-fixed": "#ffdea9",
                "surface-dim": "#dcd9d9",
                "tertiary-container": "#78746b",
                "surface-container-high": "#eae7e7",
                "secondary-fixed-dim": "#febb10",
                "on-secondary-fixed": "#261900",
                "error-container": "#ffdad6",
                "surface-tint": "#7d5800",
                "inverse-surface": "#303030",
                "secondary-container": "#febb10",
                "surface-variant": "#e4e2e1",
                "on-tertiary-fixed": "#1d1c15",
                "outline-variant": "#d4c4af",
                "tertiary": "#5f5c53",
                "primary-fixed-dim": "#f8bc49",
                "primary": "#7a5500",
                "on-secondary": "#ffffff",
                "surface-container-lowest": "#ffffff",
                "surface-container": "#f0eded",
                "outline": "#827563",
                "tertiary-fixed-dim": "#cbc6bb",
                "surface": "#fcf9f8",
                "tertiary-fixed": "#e8e2d6",
                "on-tertiary": "#ffffff",
                "error": "#ba1a1a",
                "on-error": "#ffffff",
                "surface-bright": "#fcf9f8",
                "on-surface": "#1b1c1c",
                "on-tertiary-container": "#fffbff",
                "on-background": "#1b1c1c",
                "on-primary-container": "#fffbff",
                "primary-container": "#996c00",
                "secondary": "#7b5800",
                "inverse-on-surface": "#f3f0f0",
                "surface-container-highest": "#e4e2e1",
                "on-primary-fixed": "#271900",
                "background": "#fcf9f8",
                "on-surface-variant": "#504535",
                "inverse-primary": "#f8bc49",
                "on-primary-fixed-variant": "#5e4100",
                "secondary-fixed": "#ffdea5",
                "on-primary": "#ffffff",
                "on-secondary-fixed-variant": "#5d4200",
                "on-secondary-container": "#6c4d00"
              },
              "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
              },
              "spacing": {
                "margin-desktop": "64px",
                "margin-mobile": "20px",
                "container-max": "1280px",
                "gutter": "24px",
                "unit": "8px"
              },
              "fontFamily": {
                "body-lg": ["Montserrat"],
                "label-md": ["Montserrat"],
                "headline-sm": ["Playfair Display"],
                "headline-md": ["Playfair Display"],
                "display-lg": ["Playfair Display"],
                "display-lg-mobile": ["Playfair Display"],
                "caption": ["Montserrat"],
                "body-md": ["Montserrat"]
              },
              "fontSize": {
                "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "display-lg-mobile": ["36px", {"lineHeight": "44px", "fontWeight": "700"}],
                "caption": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
                "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
              }
            },
          },
        }
</script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .honey-overlay {
            background: linear-gradient(to bottom, rgba(122, 85, 0, 0.4), rgba(27, 28, 28, 0.6));
        }
        .soft-elevation {
            box-shadow: 0 10px 30px -10px rgba(122, 85, 0, 0.15);
        }
        .soft-elevation:hover {
            box-shadow: 0 20px 40px -12px rgba(122, 85, 0, 0.25);
        }
        .icon-fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .organic-shape {
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        }
        .hover-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -10px rgba(122, 85, 0, 0.15); /* Warm ambient shadow */
        }
        .material-symbols-outlined[data-weight="fill"] {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
</style>
</head>
<body <?php body_class("bg-background text-on-surface font-body-md overflow-x-hidden"); ?>>
<?php wp_body_open(); ?>
<!-- TopNavBar -->
<header class="sticky top-0 w-full z-50 bg-surface/80 dark:bg-surface-container/80 backdrop-blur-md shadow-sm">
<nav class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
<div class="flex items-center gap-2">
<a href="<?php echo esc_url(home_url('/')); ?>" class="font-headline-sm text-headline-sm font-bold tracking-tight text-on-surface">NOVALA Bee Works</a>
</div>
<div class="hidden md:flex items-center gap-8">
<a class="font-label-md text-label-md text-primary dark:text-primary-fixed-dim border-b-2 border-primary pb-1 hover:text-primary transition-colors duration-300" href="#">Shop</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Sustainability</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Our Story</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Buzz</a>
</div>
<div class="flex items-center gap-6 text-on-surface-variant">
<button class="material-symbols-outlined hover:text-primary transition-colors">search</button>
<div class="relative">
<span class="material-symbols-outlined hover:text-primary transition-colors" data-icon="shopping_cart">shopping_cart</span>
<span class="absolute -top-2 -right-2 bg-primary text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold">0</span>
</div>
</div>
</nav>
</header>
