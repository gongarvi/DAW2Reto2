const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
<<<<<<< HEAD
.js('resources/js/matching.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
=======
    .sass('resources/sass/app.scss', 'public/css');
>>>>>>> 314d53b66ceee3f72f00f6bfb387f04cc842b6bd
