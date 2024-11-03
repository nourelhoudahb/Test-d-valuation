import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/navigation.css', // Additional CSS file
                'resources/css/style.css', // Additional CSS file
                'resources/css/addArticle.css', // Additional CSS file
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
