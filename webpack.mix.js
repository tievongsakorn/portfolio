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

// mix.js('resources/js/app.js', 'public/js');
// mix.js('resources/js/main.js', 'public/js');
// mix.sass('resources/scss/bootstrap5/bootstrap.scss', 'public/css');
mix.sass('resources/scss/style.scss', 'public/css')
.sass('resources/scss/bootstrap5/bootstrap.scss', 'public/css/min.bootstrap.css')
   .options({
     processCssUrls: false, // Prevent processing of URLs in CSS
     postCss: [
       require('postcss-csso') // Minify CSS
     ]
}).browserSync({
    proxy: 'http://vk-site.dev/'
}).disableSuccessNotifications();