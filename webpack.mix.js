// webpack.mix.js

let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'js')
    .sass('resources/sass/main.scss', 'css')
    .sass('resources/sass/dev.scss', 'css')
