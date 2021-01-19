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
    .js('resources/js/jsPuzzle.js','public/js')
<<<<<<< HEAD
    .js('resources/js/game-card-controller.js','public/js')
    .js('resources/js/ruletaMujeres.js','public/js')
    .js('resources/js/mujeres.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
=======
    .js('resources/js/match.js', 'public/js')
    .css('resources/css/matching.css','public/css')
    .sourceMaps()
    .sass('resources/sass/app.scss', 'public/css');
>>>>>>> c0ca664fd53bf123d465304b4fab8f9d8b03e8ac
/*
mix.webpackConfig({
    output: {
        chunkFilename: 'js/chunks/[name].js',
    },
});
*/
