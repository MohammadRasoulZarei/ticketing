import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/home/home.css', 'resources/js/home/home.js'],
            refresh: true,
        }),
    ],
});
