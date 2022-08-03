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

mix.setPublicPath('public')
    .setResourceRoot('../') // Turns assets paths in css relative to css file
    // .options({
    //     processCssUrls: false,
    // })
    .sass('public/assets/scss/main.scss', 'public/assets/css/main.css')
    .sass('public/assets/scss/base/h-menu.scss', 'public/assets/css/h-menu.css')
    .sass('public/assets/scss/pages/chatapp.scss', 'public/assets/css/chatapp.css')
    .sass('public/assets/scss/pages/blog.scss', 'public/assets/css/blog.css')
    .sass('public/assets/scss/pages/ecommerce.scss', 'public/assets/css/ecommerce.css')
    .sass('public/assets/scss/pages/inbox.scss', 'public/assets/css/inbox.css')
    .scripts([
        'public/assets/vendor/jquery/jquery-3.5.1.min.js',
        'public/assets/vendor/bootstrap/js/popper.min.js',
        'public/assets/vendor/bootstrap/js/bootstrap.bundle.js'
    ],'public/assets/bundles/libscripts.bundle.js') /* main js*/
    .scripts([
        'public/assets/vendor/metisMenu/metisMenu.js',
        'public/assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js',
        'public/assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js'
    ],'public/assets/bundles/vendorscripts.bundle.js') /* coman js*/
    .scripts('public/js/common.js','public/assets/bundles/mainscripts.bundle.js') /*coman js*/
    .scripts('public/assets/vendor/apexcharts/apexcharts.min.js','public/assets/bundles/apexcharts.bundle.js') /* Apex chart js*/
    .scripts([
        'public/assets/vendor/charts-c3/js/c3.min.js', 
        'public/assets/vendor/charts-c3/js/d3.v3.min.js'
        ],'public/assets/bundles/c3.bundle.js')
    .scripts([
        'public/assets/vendor/raphael/raphael.min.js',
        'public/assets/vendor/morrisjs/morris.js'
        ],'public/assets/bundles/morrisscripts.bundle.js') /* Morris Plugin Js */
    .scripts('public/assets/vendor/jquery-knob/jquery.knob.min.js','public/assets/bundles/knob.bundle.js') /* knob js*/
    .scripts([
        'public/assets/vendor/chartist/js/chartist.min.js',
        'public/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js',
        'public/assets/vendor/chartist-plugin-axistitle/chartist-plugin-axistitle.min.js',
        'public/assets/vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js',
        'public/assets/vendor/chartist/Chart.bundle.js'
        ],'public/assets/bundles/chartist.bundle.js') /*chartist js*/
    .scripts([
        'public/assets/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js',
        'public/assets/vendor/jquery.easy-pie-chart/easy-pie-chart.init.js'
        ],'public/assets/bundles/easypiechart.bundle.js')
    .scripts([
        'public/assets/vendor/flot-charts/jquery.flot.js',
        'public/assets/vendor/flot-charts/jquery.flot.resize.js',
        'public/assets/vendor/flot-charts/jquery.flot.pie.js',
        'public/assets/vendor/flot-charts/jquery.flot.categories.js',
        'public/assets/vendor/flot-charts/jquery.flot.time.js'
        ],'public/assets/bundles/flotscripts.bundle.js') /* Flot Chart js*/

    .scripts('public/assets/vendor/fullcalendar/moment.min.js','public/assets/bundles/fullcalendarscripts.bundle.js')   /* calender page js */
    .scripts( [
         'public/assets/vendor/jquery-datatable/jquery.dataTables.min.js',
         'public/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.js'
        ],'public/assets/bundles/datatablescripts.bundle.js') /* Jquery DataTable Plugin Js  */
    .scripts([
        'public/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js',
        'public/assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js'
        ],'public/assets/bundles/jvectormap.bundle.js') /* ChartJs js*/
    .extract([
        // Extract packages from node_modules to vendor.js
        'jquery',
        'bootstrap',
        'popper.js',
        'axios',
        'sweetalert2',
        'lodash'
    ])
    .sourceMaps();

if (mix.inProduction()) {
    mix.version()
        .options({
            // Optimize JS minification process
            terser: {
                cache: true,
                parallel: true,
                sourceMap: true
            }
        });
} else {
    // Uses inline source-maps on development
    mix.webpackConfig({
        devtool: 'inline-source-map'
    });
}
