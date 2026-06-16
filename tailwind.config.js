/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './assets/js/**/*.js'
  ],

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

};
