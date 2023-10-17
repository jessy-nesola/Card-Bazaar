import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/navbar-scroll.js', 'resources/js/app.js', 'resources/css/cards.css', 'resources/css/navbar_dropdown.css', 'resources/css/carousel.css', 'resources/css/cardhomepage.css'],
            refresh: true,
        }),
    ],
});
