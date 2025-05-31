import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),    tailwindcss(),
    ],

    //uncomment apabila menggunakan docker 
    
    // server: {
    //     host: '0.0.0.0',
    //     port: 5173,
    //     // cors: true,
    //     // hmr: {
    //     //     host: '192.168.111.123',
    //     //     port: 5173,
    //     //     protocol: 'ws',
    //     // }
    // }
});
