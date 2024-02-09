import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/Globe/src/world/world.js',
                'public/Globe/src/main.js', // Include your ES6 files here
            ],
            refresh: true,
        }),
    ],
});
