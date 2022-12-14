const mix = require("laravel-mix");

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

mix.sass("resources/sass/app.scss", "public/css").options({
    processCssUrl: false,
});

mix.js("resources/js/back.js", "public/js");
mix.js("resources/js/front.js", "public/js");
mix.js("resources/js/addressInfo.js", "public/js");
mix.js("resources/js/aptValidation.js", "public/js");
mix.js("resources/js/editValidation.js", "public/js");
mix.js("resources/js/userValidation.js", "public/js");
