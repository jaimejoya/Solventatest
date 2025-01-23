const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .vue({ version: 3 })
   .sass('resources/sass/app.scss', 'public/css')
   .options({
       processCssUrls: false,
       postCss: [
           require('autoprefixer')
       ]
   });

// Desactivar las notificaciones de éxito
mix.disableSuccessNotifications();

// Si estás en desarrollo, habilita el source maps
if (!mix.inProduction()) {
    mix.sourceMaps();
}
