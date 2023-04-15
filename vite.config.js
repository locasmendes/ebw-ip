import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import VitePluginEntryInject from 'vite-plugin-entry-inject';
import path from 'path'

export default defineConfig({
    plugins: [
        VitePluginEntryInject({
            // head-prepend/head/body-prepend/body
            injectTo: 'head-prepend'
        }),
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
    ],
            refresh: true,
}),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~bootstrap-icons': path.resolve(__dirname, 'node_modules/bootstrap-icons'),
        }
    },
});
