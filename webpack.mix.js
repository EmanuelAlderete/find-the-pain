let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/sass/style.css',
    'public/css/app.css'
], 'public/css/all.css');

mix.styles([
    'resources/assets/sass/vendor/bootstrap.min.css',
    'resources/assets/sass/vendor/font-awesome.min.css',
    'resources/assets/sass/vendor/simple-line-icons.css',
    'resources/assets/sass/vendor/device-mockups.min.css',
    'resources/assets/sass/vendor/new-age.min.css',
    'resources/assets/sass/vendor/main.css'
], 'public/css/site.css')

mix.scripts([
    'resources/assets/js/vendor/jquery.min.js',
    'resources/assets/js/vendor/bootstrap.bundle.min.js',
    'resources/assets/js/vendor/jquery.easing.min.js',
    'resources/assets/js/vendor/new-age.min.js',
    'resources/assets/js/vendor/main.js'
], 'public/js/site.js');


mix.browserSync('localhost:8000');