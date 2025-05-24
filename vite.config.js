import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: '0.0.0.0',
        hmr: {
            protocol: 'ws',
            host: 'localhost' // Critical for Windows Docker Desktop
        },
        watch: {
            usePolling: true, // Required for Windows
            interval: 500
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true
        }),
        tailwindcss()
    ]
})
