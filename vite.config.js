import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/tinymce/tinymce.min.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            tinymce: "tinymce/tinymce.min.js",
        },
    },
});
