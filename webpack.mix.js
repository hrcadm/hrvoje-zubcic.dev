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
   .sass('resources/sass/app.scss', 'public/css')

    .copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js')
    .copy('node_modules/popper.js/dist/umd/popper.min.js', 'resources/assets/js')
    .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'resources/assets/js')
    .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'resources/assets/css')

    .combine(
        [
            'resources/assets/js/jquery.min.js',
            'resources/assets/js/popper.min.js',
            'resources/assets/js/bootstrap.min.js',
            'resources/assets/js/revolution/jquery.themepunch.tools.min.js',
            'resources/assets/js/revolution/jquery.themepunch.revolution.min.js',
        ], './public/js/scripts.js'
    )

    .combine(
        [
            'resources/assets/css/bootstrap.min.css',
            'resources/assets/css/font-awesome.min.css',
            'resources/assets/css/owl.carousel.css',
            'resources/assets/css/style.css',
            'resources/assets/css/responsive.css',
            'resources/assets/css/colors/colors.css',
            'resources/assets/css/revolution/settings.css',
            'resources/assets/css/revolution/layers.css',
            'resources/assets/css/revolution/navigation.css'
        ], './public/css/main.css'
    );
