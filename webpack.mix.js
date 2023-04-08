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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .sass('resources/sass/btn.scss', 'public/css')
    .sass('resources/sass/error.scss', 'public/css')
    .sass('resources/sass/front.scss', 'public/css')
    .sass('resources/sass/guideline.scss', 'public/css')
    .sass('resources/sass/mypage.scss', 'public/css')
    .sass('resources/sass/reset.scss', 'public/css')
    .sass('resources/sass/review.scss', 'public/css')
    .sass('resources/sass/table.scss', 'public/css')
    .sourceMaps();