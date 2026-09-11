<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Pixelar Photobooth' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700&display=swap">

    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }
        ::-webkit-scrollbar { display: none; }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "inverse-on-surface": "#eef0ff",
                        "error-container": "#ffdad6",
                        "primary": "#380006",
                        "surface-container": "#eaedff",
                        "on-primary-fixed": "#410008",
                        "on-secondary-fixed": "#410008",
                        "tertiary-fixed": "#dde3eb",
                        "on-secondary": "#ffffff",
                        "on-background": "#131b2e",
                        "tertiary-container": "#262c32",
                        "tertiary": "#11181d",
                        "error": "#ba1a1a",
                        "outline-variant": "#dcc0bf",
                        "tertiary-fixed-dim": "#c1c7cf",
                        "surface-container-high": "#e2e7ff",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "surface": "#faf8ff",
                        "surface-dim": "#d2d9f4",
                        "on-tertiary-container": "#8d939b",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed-variant": "#8c1524",
                        "on-surface-variant": "#564241",
                        "surface-container-highest": "#dae2fd",
                        "on-primary-fixed-variant": "#82252a",
                        "on-error": "#ffffff",
                        "outline": "#897171",
                        "secondary-container": "#fe6b70",
                        "on-surface": "#131b2e",
                        "inverse-surface": "#283044",
                        "surface-tint": "#a23c40",
                        "on-tertiary-fixed": "#161c22",
                        "surface-variant": "#dae2fd",
                        "secondary-fixed": "#ffdad9",
                        "on-secondary-container": "#6d0014",
                        "on-primary-container": "#e46f70",
                        "surface-bright": "#faf8ff",
                        "primary-container": "#5c0612",
                        "secondary": "#ad2f39",
                        "background": "#faf8ff",
                        "on-error-container": "#93000a",
                        "inverse-primary": "#ffb3b2",
                        "primary-fixed": "#ffdad8",
                        "primary-fixed-dim": "#ffb3b2",
                        "on-tertiary-fixed-variant": "#41474e",
                        "surface-container-low": "#f2f3ff",
                        "secondary-fixed-dim": "#ffb3b2"
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },
                    spacing: {
                        "space-2xl": "4rem",
                        "space-md": "1rem",
                        "margin": "3rem",
                        "space-xl": "2.5rem",
                        "gutter-mobile": "1rem",
                        "gutter": "1.5rem",
                        "margin-mobile": "1.25rem",
                        "space-sm": "0.5rem",
                        "space-lg": "1.5rem",
                        "space-xs": "0.25rem"
                    },
                    fontFamily: {
                        "body-md": ["Inter"],
                        "body-sm": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "display-hero-mobile": ["Plus Jakarta Sans"],
                        "label-md": ["Inter"],
                        "display-hero": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "headline-xl-mobile": ["Plus Jakarta Sans"],
                        "headline-xl": ["Plus Jakarta Sans"],
                        "mono-metric": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "body-md": ["15px", { lineHeight: "24px", fontWeight: "400" }],
                        "body-sm": ["13px", { lineHeight: "20px", fontWeight: "400" }],
                        "label-sm": ["12px", { lineHeight: "16px", fontWeight: "600" }],
                        "headline-md": ["24px", { lineHeight: "32px", fontWeight: "600" }],
                        "display-hero-mobile": ["36px", { lineHeight: "44px", fontWeight: "700" }],
                        "label-md": ["14px", { lineHeight: "20px", fontWeight: "500" }],
                        "display-hero": ["56px", { lineHeight: "64px", fontWeight: "700" }],
                        "headline-sm": ["18px", { lineHeight: "26px", fontWeight: "600" }],
                        "headline-xl-mobile": ["28px", { lineHeight: "36px", fontWeight: "700" }],
                        "headline-xl": ["40px", { lineHeight: "48px", fontWeight: "700" }],
                        "mono-metric": ["13px", { lineHeight: "16px", fontWeight: "600" }],
                        "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
                        "headline-lg": ["32px", { lineHeight: "40px", fontWeight: "600" }]
                    }
                }
            }
        };
    </script>

    {{ $head ?? '' }}
</head>
<body class="bg-background font-body-md text-on-surface antialiased selection:bg-secondary-fixed selection:text-on-secondary-fixed">

    <x-navbar :links="$links ?? [
        ['label' => 'Home', 'path' => 'home', 'active' => true],
        ['label' => 'Features', 'path' => 'features'],
        ['label' => 'Pricing', 'path' => 'pricing'],
        ['label' => 'Testimonials', 'path' => 'testimonials'],
        ['label' => 'Contact', 'path' => 'contact'],
    ]" />

    <main class="w-full pt-20 bg-background min-h-screen">
        <div class="flex flex-col w-full selection:bg-secondary-fixed selection:text-on-secondary-fixed">
            {{ $slot }}
        </div>
    </main>

    {{ $footer ?? '' }}

</body>
</html>