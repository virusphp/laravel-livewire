import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
import { viteStaticCopy } from "vite-plugin-static-copy";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/datepicker.js",
            ],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
        viteStaticCopy({
            targets: [
                {
                    src: "node_modules/flowbite/dist/datepicker.js",
                    dest: "public/js",
                },
                {
                    src: "node_modules/pikaday/css/pikaday.css",
                    dest: "public/css",
                },
                {
                    src: "node_modules/pikaday/pikaday.js",
                    dest: "public/js",
                },
            ],
        }),
    ],
});
