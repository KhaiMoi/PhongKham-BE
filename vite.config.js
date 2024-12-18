import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            buildDirectory: 'build'
        }),
    ],
    build: {
        outDir: path.resolve(__dirname, 'public/build'),
        assetsDir: 'assets',
        manifest: true,
        emptyOutDir: true,
        rollupOptions: {
            output: {
                manualChunks: undefined
            }
        }
    },
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        }
    }
}); 