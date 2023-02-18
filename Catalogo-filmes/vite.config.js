import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    server: {
        https: true,
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    build: {
        rollupOptions: {
            external: [
                'Vuex',
            ],
        }
    },
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
            vuex: 'vuex/dist/vuex.esm-bundler.js',
        },
    },
});
