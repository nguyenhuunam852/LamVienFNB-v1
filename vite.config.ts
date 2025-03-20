import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import tailwindcss from 'tailwindcss';
import { resolve } from 'node:path';
import { defineConfig } from 'vite';
import inject from "@rollup/plugin-inject";

export default defineConfig({
    plugins: [
        inject({
                     $: 'jquery',
                     jQuery: 'jquery',
                   }),
        laravel([
            'resources/css/app.css',
            'resources/css/landing.css',
            'resources/js/app.ts',
        ]),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },

        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './resources/js'),
            'ziggy-js': resolve(__dirname, 'vendor/tightenco/ziggy'),
        },
    },
    css: {
        postcss: {
            plugins: [tailwindcss],
        },
    },
});
