const mix = require('laravel-mix');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

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

mix.scripts([
    'resources/js/vendor/jquery-2.2.4.min.js',
    'resources/js/popper.min.js',
    'resources/js/bootstrap.min.js',
    'resources/js/magnific-popup.min.js',
    'resources/js/waypoints.min.js',
    'resources/js/counterup.min.js',
    'resources/js/meanmenu.min.js',
    'resources/js/aos.min.js',
    'resources/js/isotope.min.js',
    'resources/js/jquery.backgroundMove.js',
    'resources/js/slick.min.js',
    'resources/js/scrollUp.js',
    'resources/js/main.js'
], 'public/js/all.js');


mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/meanmenu.css',
    'resources/css/aos.min.css',
    'resources/css/slick.css',
    'resources/css/responsive.css',
    'resources/css/style.css'
], 'public/css/all.css');

mix.react('resources/react-app/js/app.js', 'public/js/react')
    .sass('resources/react-app/sass/app.scss', 'public/css/react')
    .purgeCss()
    .tailwind('tailwind.config.js')
    .webpackConfig({
        externals: [
            'child_process'
        ],
        node: {
            fs: 'empty'
        }
    }).sourceMaps();
