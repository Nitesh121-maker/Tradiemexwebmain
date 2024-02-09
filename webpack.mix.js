// webpack.mix.js
// webpack.mix.js
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .babel(['public/Globe/main.js'], 'public/js') // Add this line
   .version();

