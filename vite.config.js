import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/sass/bootstrap.scss',
                'resources/sass/pages/auth.scss',
                'resources/sass/themes/dark/app-dark.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
