let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
  .js('resources/assets/js/bootstrap.js', 'public/js')
  .js('resources/assets/js/custom.js', 'public/js')
  .js('resources/assets/js/easing.js', 'public/js')
  .js('resources/assets/js/imagezoom.js', 'public/js')
  .js('resources/assets/js/jquery-2.2.3.min.js', 'public/js')
  .js('resources/assets/js/jquery-scrolltofixed-min.js', 'public/js')
  .js('resources/assets/js/jquery.classycountdown.js', 'public/js')
  .js('resources/assets/js/jquery.flexslider.js', 'public/js')
  .js('resources/assets/js/jquery.jscrollpane.min.js', 'public/js')
  .js('resources/assets/js/jquery.knob.js', 'public/js')
  .js('resources/assets/js/jquery.marquee.min.js', 'public/js')
  .js('resources/assets/js/jquery.menu-aim.js', 'public/js')
  .js('resources/assets/js/jquery.mousewheel.js', 'public/js')
  .js('resources/assets/js/jquery.throttle.js', 'public/js')
  .js('resources/assets/js/main.js', 'public/js')
  .js('resources/assets/js/minicart.js', 'public/js')
  .js('resources/assets/js/move-top.js', 'public/js')
  .js('resources/assets/js/owl.carousel.js', 'public/js')
  .sass('resources/assets/sass/app.scss', 'public/css')
  .sass('resources/assets/sass/animate.min.scss', 'public/css')
  .sass('resources/assets/sass/flexslider.scss', 'public/css')
  .sass('resources/assets/sass/font-awesome.scss', 'public/css')
  .sass('resources/assets/sass/ken-burns.scss', 'public/css');

mix.copy('resources/assets/css/*', 'public/css/');
mix.copy('resources/assets/fonts/*', 'public/fonts/');
mix.copy('resources/assets/images/*', 'public/images/');
mix.copy('resources/assets/js/*', 'public/js/');

