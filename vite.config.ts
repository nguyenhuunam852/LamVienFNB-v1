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
            'resources/css/admin.css',
            'resources/css/app.css',
            'resources/js/app.ts', 'resources/js/grapes.js'
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
            'vue': 'vue/dist/vue.esm-bundler.js'
        },
    },
    css: {
        postcss: {
            plugins: [tailwindcss],
        },
    },
});
