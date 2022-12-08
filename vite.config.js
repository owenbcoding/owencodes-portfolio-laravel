import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        strictPort: true,
        port: 5173,
        host: '0.0.0.0',
        origin: 'http://localhost:5173',
        hmr: {
            host: 'localhost',
        },
        watch: {
            ignored: ['./app/**', './bootstrap/**', './config/**', './database/**', './lang/**', './node_modules/**', './public/**', './routes/**', './storage/**', './tests/**', './vendor/**'],
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
