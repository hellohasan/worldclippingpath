const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);
mix.styles(
    [
        "public/backend/plugins/fontawesome-free/css/all.min.css",
        "public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
        "public/backend/plugins/select2/css/select2.min.css",
        "public/backend/plugins/bootstrap-toggle/css/bootstrap-toggle.css",
        "public/backend/dist/css/adminlte.min.css",
    ],
    "public/css/backend.css"
)
    .scripts(
        [
            "public/backend/plugins/jquery/jquery.min.js",
            "public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js",
            "public/backend/plugins/select2/js/select2.full.min.js",
            "public/backend/plugins/bootstrap-toggle/js/bootstrap-toggle.js",
            "public/backend/dist/js/adminlte.min.js",
        ],
        "public/js/backend.js"
    )
    .version()
    .sourceMaps();
