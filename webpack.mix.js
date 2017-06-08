const { mix } = require('laravel-mix');

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

/*mix.js('resources/assets/js/app.js', 'public/js');*/

/*mix.combine(['resources/assets/sass/app.scss',
    'resources/assets/sass/extended_footer.scss',
    'resources/assets/sass/fontawesome.scss',
    'resources/assets/sass/fonts.scss',
    'resources/assets/sass/footer.scss'], 'resources/assets/sass/all.scss');*/


mix.sass('resources/assets/sass/app.scss', 'public/css');

/*mix.sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/extended_footer.scss', 'public/css')
   .sass('resources/assets/sass/fontawesome.scss', 'public/css')
   .sass('resources/assets/sass/fonts.scss', 'public/css')
   .sass('resources/assets/sass/footer.scss', 'public/css');*/

/*mix.version();*/
