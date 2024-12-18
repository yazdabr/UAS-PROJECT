import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/tampilan.css', 'resources/js/respon.js'],
            refresh: true,
        }),
    ],
});
