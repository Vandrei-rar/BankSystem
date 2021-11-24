const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

    mix.styles(['resources/views/site/css/',
    'resources/views/site/css/owl'
    ], 'public/site/css/estilo.css')

    // .scripts([
    //     'resources/views/site/js',
    //     'resources/views/site/js/magnify'
    // ], 'public/site/js/script.js')

    .styles(['resources/views/site/css/dashboard'],
    'public/site/css/dashboard.css')
    
    .version();
