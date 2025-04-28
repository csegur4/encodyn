// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/master-about.scss',
                'resources/scss/master-branding-agency.scss',
                'resources/scss/master-contact.scss',
                'resources/scss/master-common.scss',
                'resources/scss/master-blog-details.scss',
                'resources/scss/master-services.scss',
                'resources/scss/master-service-details.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
