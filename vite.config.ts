import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import tailwindcss from 'tailwindcss';
import { resolve } from 'node:path';
import { defineConfig } from 'vite';
import inject from "@rollup/plugin-inject";
import WindiCSS from 'vite-plugin-windicss';

export default defineConfig({
    plugins: [
        WindiCSS(),
        inject({
                     $: 'jquery',
                     jQuery: 'jquery',
                   }),
        laravel([
            'resources/css/admin.css',
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
